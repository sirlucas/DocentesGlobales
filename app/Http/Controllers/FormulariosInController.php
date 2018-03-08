<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ForminCreateRequest;
use Illuminate\Support\Facades\Validator;

use App\City;
use App\Country;
use App\Currency;
use App\DomActivity;
use App\DomCareer;
use App\DomCargo;
use App\DomClasificacion;
use App\DomFaculty;
use App\DomSede;
use App\Formulario;
use App\Host;
use App\User;
use App\Auth;

// Controlador para Formularios de administrativos y docentes internos.
class FormulariosInController extends Controller
{


  /* @param  StoreBlogPostRequest  $request */
  public function index()
  {
    $forms = Formulario::latest()->paginate(5);

      return view('formularioIn.index',compact('forms'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
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
	return view('formularioIn.create')->with('cities',$cities)
                                    ->with('countries',$countries)
                                    ->with('cargos',$cargos)
                                    ->with('clasis',$clasificaciones)
                                    ->with('unidades',$unidades)
                                    ->with('sedes',$sedes)
                                    ->with('actividades',$actividades)
                                    ->with('divisas',$currencies);
  }

  public function store(ForminCreateRequest $request){

    Formulario::create($request->all());


    return redirect()->route('formularioIn.index')

                    ->with('success','Formulario Ingresado Correctamente.');

  }

  public function edit($id){

  }

  public function show($id){

  }

  public function update(Request $request, $id){

  }

  // Funcion para enviar datos de ciudades que pertenencen a un pais.
    public function getCities(Request $request){
      if($request->ajax()){
        $ciudades=City::ciudadesPorPais($request->id);
        return response()->json($ciudades);
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
