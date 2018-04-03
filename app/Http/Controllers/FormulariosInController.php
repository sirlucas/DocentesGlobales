<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ForminCreateRequest;
use Illuminate\Support\Facades\Validator;
use PDF;

use App\City;
use App\Country;
use App\Currency;
use App\DomActivity;
use App\DomCareer;
use App\DomCargo;
use App\DomClasificacion;
use App\DomFaculty;
use App\CGestion;
use App\Outlay;
use App\Account;
use App\DomSede;
use App\FormularioIn;
use App\Host;
use App\User;
use App\Auth;



// Controlador para Formularios de administrativos y docentes internos.
class FormulariosInController extends Controller
{


  /* @param  StoreBlogPostRequest  $request */
  public function index()
  {
    $forms = FormularioIn::All();

      return view('form_internal.index',compact('forms'));
  }

  public function create()
  {
	$cities          = City::orderBy('ciudad', 'asc')->get();
  $countries       = Country::All();
  $cargos          = DomCargo::All();
  $clasificaciones = DomClasificacion::All();
  $unidades        = DomFaculty::All();
  $sedes           = DomSede::All();
  $actividades     = DomActivity::All();
  $currencies      = Currency::All();
  $carreras        = DomCareer::All();
  $cgestiones      = CGestion::All();

	return view('form_internal.create')->with('countries',$countries)
                                    ->with('cargos',$cargos)
                                    ->with('clasis',$clasificaciones)
                                    ->with('unidades',$unidades)
                                    ->with('sedes',$sedes)
                                    ->with('actividades',$actividades)
                                    ->with('divisas',$currencies)
                                    ->with('carreras',$carreras)
                                    ->with('cgestion',$cgestiones);
  }

  public function store(Request $request){


    $dates = explode(' / ', $request->get('ida_retorno'));
    //dd(date_format($dates[0], 'Y-m-d'));

    $formularioin= FormularioIn::create([
       'rut'  => $request->get('rut'),
       'nombre' => $request->get('nombre'),
       'email' => $request->get('email'),
       'telefono' => $request->get('telefono'),
       'dom_unidad_id' => $request->get('unidad'),
       'dom_sede_id' => $request->get('sede'),
       'dom_cargo_id'=> $request->get('cargo'),
       'dom_carrera_id' => $request->get('carreras'),
       'postitulo'=> $request->get('postitulo'),
       'institucion_anf' => $request->get('inst_anf'),
       'website' => $request->get('website'),
       'dom_ciudad_id' => $request->get('cities'),
       'inst_descripcion'=> $request->get('inst_descripcion'),
       'fecha_ida'=> $dates[0],
       'fecha_retorno'=> $dates[1],
       'dom_actividad_id'=> $request->get('actividad'),
       'actividad_nombre'=> $request->get('actividad_nombre'),
       'ipt' => $request->get('plantrabajo'),
       'dom_clasificacion_id'=> $request->get('clasis'),
       'proposito' => $request->get('proposito'),
       'contacto_anf'=> $request->get('contacto_anf'),
       'cont_cargo'=> $request->get('cargo_anf'),
       'cont_email' => $request->get('email_anf'),
       'cont_fono'=> $request->get('fono_anf'),
       'colaboracion' => $request->get('colaboracion'),
       'observaciones'=> $request->get('observaciones'),
    ]);



    if ($request->get('matricula')) {
      //account_id = 1 corresponde a matriculas
      $formularioin->cgestion()->attach($request->get('cgestionm'),['currency_id'=>$request->get('currency'),'account_id'=>'1', 'monto'=>$request->get('matricula')]);
    }
    if ($request->get('arancel')) {
      //account_id = 2 corresponde a arancel
      $formularioin->cgestion()->attach($request->get('cgestiona'),['currency_id'=>$request->get('currency'), 'account_id'=>'2', 'monto'=>$request->get('arancel')]);

    }
    if ($request->get('pasajes')) {
      //account_id = 3 corresponde a pasajes
      $formularioin->cgestion()->attach($request->get('cgestionp'),['currency_id'=>$request->get('currency'), 'account_id'=>'3', 'monto'=>$request->get('pasajes')]);

    }
    if ($request->get('viaticos')) {
      //account_id = 4 corresponde a viaticos
      $formularioin->cgestion()->attach($request->get('cgestionv'),['currency_id'=>$request->get('currency'), 'account_id'=>'4', 'monto'=>$request->get('viaticos')]);

    }
    if ($request->get('otros')) {
      //account_id = 5 corresponde a otros
      $formularioin->cgestion()->attach($request->get('cgestiono'),['currency_id'=>$request->get('currency'), 'account_id'=>'5', 'monto'=>$request->get('otros')]);

    }
    if ($request->get('total')) {
      //account_id = 6 corresponde a total
      // c_gestion_id = 1 => "NO APLICA"
      $formularioin->cgestion()->attach('1',['currency_id'=>$request->get('currency'), 'account_id'=>'6','monto'=>$request->get('total')]);

    }

    return redirect()->route('formin.index')
                    ->with('success','Formulario Ingresado Correctamente.');

  }


  public function show($id){

  }

  public function edit($id){

    $form            = FormularioIn::findOrFail($id);
    $cities          = City::orderBy('ciudad', 'asc')->get();
    $countries       = Country::All();
    $cargos          = DomCargo::All();
    $clasificaciones = DomClasificacion::All();
    $unidades        = DomFaculty::All();
    $sedes           = DomSede::All();
    $actividades     = DomActivity::All();
    $currencies      = Currency::All();
    $carreras        = DomCareer::All();
    $cgestiones      = CGestion::All();

    //futura mejora de eficiencia:
    $e = explode('-',$form->fecha_ida);
    $r =array_reverse($e);
    $dates[0]= implode('-',$r);
    $e = explode('-',$form->fecha_retorno);
    $r =array_reverse($e);
    $dates[1]= implode('-',$r);
    $ida_retorno = implode(' / ', $dates );
    //--
    $matricula = $arancel = $pasajes = $viaticos = $otros = $total = $divisa = null;
    foreach($form->account as $account){
      $divisa = $account->pivot->currency_id;

      if($account->pivot->account_id == 1){
        $matricula = $account;
      }
      if($account->pivot->account_id == 2){
        $arancel = $account;
        $divisa = $arancel->pivot->currency_id;

      }
      if($account->pivot->account_id == 3){
        $pasajes = $account;
      }
      if($account->pivot->account_id == 4){
        $viaticos = $account;

      }
      if($account->pivot->account_id == 5){
        $otros = $account;

      }
      if($account->pivot->account_id == 6){
        $total = $account;
      }
    }


  	return view('form_internal.edit')->with('countries',$countries)
                                      ->with('cargos',$cargos)
                                      ->with('clasis',$clasificaciones)
                                      ->with('unidades',$unidades)
                                      ->with('sedes',$sedes)
                                      ->with('actividades',$actividades)
                                      ->with('divisas',$currencies)
                                      ->with('carreras',$carreras)
                                      ->with('cgestion',$cgestiones)
                                      ->with('form',$form)
                                      ->with('ida_retorno', $ida_retorno)
                                      ->with('matricula',$matricula)
                                      ->with('arancel', $arancel)
                                      ->with('pasajes', $pasajes)
                                      ->with('viaticos', $viaticos)
                                      ->with('otros', $otros)
                                      ->with('total',$total)
                                      ->with('divisa',$divisa);
  }


  public function reusar($id){

  }

  public function update(Request $request, $id){

          $dates = explode(' / ', $request->get('ida_retorno'));
           $form = FormularioIn::find($id)->update([
              'rut'  => $request->get('rut'),
              'nombre' => $request->get('nombre'),
              'email' => $request->get('email'),
              'telefono' => $request->get('telefono'),
              'dom_unidad_id' => $request->get('unidad'),
              'dom_sede_id' => $request->get('sede'),
              'dom_cargo_id'=> $request->get('cargo'),
              'dom_carrera_id' => $request->get('carreras'),
              'postitulo'=> $request->get('postitulo'),
              'institucion_anf' => $request->get('inst_anf'),
              'website' => $request->get('website'),
              'dom_ciudad_id' => $request->get('cities'),
              'inst_descripcion'=> $request->get('inst_descripcion'),
              'fecha_ida'=> $dates[0],
              'fecha_retorno'=> $dates[1],
              'dom_actividad_id'=> $request->get('actividad'),
              'actividad_nombre'=> $request->get('actividad_nombre'),
              'ipt' => $request->get('plantrabajo'),
              'dom_clasificacion_id'=> $request->get('clasis'),
              'proposito' => $request->get('proposito'),
              'contacto_anf'=> $request->get('contacto_anf'),
              'cont_cargo'=> $request->get('cargo_anf'),
              'cont_email' => $request->get('email_anf'),
              'cont_fono'=> $request->get('fono_anf'),
              'colaboracion' => $request->get('colaboracion'),
              'observaciones'=> $request->get('observaciones'),
           ]);

           $form = FormularioIn::find($id);
           if ($request->get('matricula')) {
             //account_id = 1 corresponde a matriculas
            $form->account()->updateExistingPivot('1',['c_gestion_id'=>$request->get('cgestionm'),'currency_id'=>$request->get('currency'), 'monto'=>$request->get('matricula')]);
          //  $form->cgestion()->sync($request->get('cgestionm'),['currency_id'=>$request->get('currency'),'account_id'=>'1', 'monto'=>$request->get('matricula')]);

           }
           if ($request->get('arancel')) {
             //account_id = 2 corresponde a arancel
           $form->account()->updateExistingPivot('2',['c_gestion_id'=>$request->get('cgestiona'),'currency_id'=>$request->get('currency'), 'monto'=>$request->get('arancel')]);
        //  $formularioin->cgestion()->sync($request->get('cgestiona'),['currency_id'=>$request->get('currency'), 'account_id'=>'2', 'monto'=>$request->get('arancel')]);

           }
           if ($request->get('pasajes')) {
             //account_id = 3 corresponde a pasajes
            $form->account()->updateExistingPivot('3',['c_gestion_id'=>$request->get('cgestionp'),'currency_id'=>$request->get('currency'), 'monto'=>$request->get('pasajes')]);

           }
           if ($request->get('viaticos')) {
             //account_id = 4 corresponde a viaticos
             $form->account()->updateExistingPivot('4',['c_gestion_id'=>$request->get('cgestionv'),'currency_id'=>$request->get('currency'), 'monto'=>$request->get('viaticos')]);

           }
           if ($request->get('otros')) {
             //account_id = 5 corresponde a otros
             $form->account()->updateExistingPivot('5',['c_gestion_id'=>$request->get('cgestiono'),'currency_id'=>$request->get('currency'), 'monto'=>$request->get('otros')]);

           }
           if ($request->get('total')) {
             //account_id = 6 corresponde a total
             // c_gestion_id = 1 => "NO APLICA"
             $form->account()->updateExistingPivot('6',['c_gestion_id'=>'1','currency_id'=>$request->get('currency'), 'monto'=>$request->get('total')]);

           }
           return redirect()->route('formin.index')
                           ->with('success','Formulario Editado Correctamente.');
  }

  // Funcion para enviar datos de ciudades que pertenencen a un pais.
    public function getCities(Request $request){
      if($request->ajax()){
        $ciudades=City::ciudadesPorPais($request->id);
        return response()->json($ciudades);
      }
    }

    // Funcion para enviar datos de ciudades que pertenencen a un pais.
      public function getCarrer(Request $request){
        if($request->ajax()){
          $carrera=Carrer::finOrFail($request->id);
          if ($carrera->carrera == 'Postitulo' || $carrera->carrera == 'Diplomado' || $carrera->carrera == 'Magister'  ) {
            return response()->json($carrera);
          }
          return response()->json("hola");
        }
      }


    // Funcion para enviar isologo de divisa
      public function getCurrency(Request $request){
        if($request->ajax()){
          $divisa=Currency::findOrFail($request->id);
          dd($divisa);
          return response()->json($divisa);
        }
      }

}
