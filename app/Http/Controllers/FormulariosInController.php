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
	$medicos = Doctor::orderBy('nombres', 'asc')->get();
  	$estados = Status::All();
  	$indice=Index_file::All();
	return view('ficha.create')->with('medicos',$medicos)
                             ->with('estados',$estados)
                             ->with('indice',$indice);
  }

  public function edit($id){

  }

  public function update(Request $request, $id){

  }

  
}
