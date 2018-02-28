<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
  public function index()
  {
      return view('formularioIn.index');
  }

  public function create(Request $request)
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

  public function edit($id){

  }

  public function update(Request $request, $id){

  }


}
