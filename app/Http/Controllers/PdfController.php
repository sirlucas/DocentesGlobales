<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


class PdfController extends Controller
{

//Formulario para perfeccionamiento academico (DDCA)
  public function ddca($id){
    $data = $this->getData();
    $date = date('Y-m-d');
    $invoice = "2222";
    $view =  \View::make('Form_internal.formsPDF.fpv', compact('data', 'date', 'invoice'))->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('invoice');
    $pdf = PDF::loadView('Form_internal.formsPDF.fpv', ['formulario' => $ficha]);
  }

// formulario para Pago de Viaticos (Vicerrectoria académica)
  public function fpv($id){
    $data = $this->getData();
    $date = date('Y-m-d');
    $invoice = "2222";
    $view =  \View::make('Form_internal.formsPDF.fpv', compact('data', 'date', 'invoice'))->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('invoice');
    $pdf = PDF::loadView('Form_internal.formsPDF.fpv', ['formulario' => $ficha]);
  }

//formulario par autorizacion de viajes academicos INgenieria UDD
  public function facultad($id){
    $data = $this->getData();
    $date = date('Y-m-d');
    $invoice = "2222";
    $view =  \View::make('Form_internal.formsPDF.fpv', compact('data', 'date', 'invoice'))->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('invoice');
    $pdf = PDF::loadView('Form_internal.formsPDF.fpv', ['formulario' => $ficha]);
  }

//formulario "Permiso Programas para viajes de Estudio" (Direccion de Recursos Humanos)
  public function drrhh($id){
    $data = $this->getData();
    $date = date('Y-m-d');
    $invoice = "2222";
    $view =  \View::make('Form_internal.formsPDF.fpv', compact('data', 'date', 'invoice'))->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('invoice');
    $pdf = PDF::loadView('Form_internal.formsPDF.fpv', ['formulario' => $ficha]);
  }



  public function getData(){
    $data =  [
        'quantity'      => '1' ,
        'description'   => 'some ramdom text',
        'price'   => '500',
        'total'     => '500'
    ];
    return $data;
  }
}
