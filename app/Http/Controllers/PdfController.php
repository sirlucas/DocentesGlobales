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
  public function ddca(Request $request){
    $id = $request->getQueryString();
    $form = FormularioIn::find($id);
    $created_at = explode(' ', $form->created_at );
    $date = date('d-m-Y');
    $doc_id = str_pad($id, 6,'0', STR_PAD_LEFT);
    $pdf = PDF::loadView('Form_internal.formsPDF.ddca', ['created_at'=>$created_at,'formulario' => $form, 'date' => $date, 'doc_id' => $doc_id]);
    return $pdf->stream('ddcaForm'.$doc_id.'.pdf');
  }

// formulario para Pago de Viaticos (Vicerrectoria académica)
  public function fpv(Request $request){
    $id = $request->getQueryString();
    $form = FormularioIn::find($id);
    $created_at = explode(' ', $form->created_at );
    $date = date('d-m-Y');
    $doc_id = str_pad($id, 6,'0', STR_PAD_LEFT);
    $pdf = PDF::loadView('Form_internal.formsPDF.fpv', ['created_at'=>$created_at,'formulario' => $form, 'date' => $date, 'doc_id' => $doc_id]);
    return $pdf->stream('fpvForm'.$doc_id.'.pdf');
  }

//formulario par autorizacion de viajes academicos INgenieria UDD
  public function facultad(Request $request){
    $id = $request->getQueryString();
    $form = FormularioIn::find($id);
    $created_at = explode(' ', $form->created_at );
    $date = date('d-m-Y');
    $doc_id = str_pad($id, 6,'0', STR_PAD_LEFT);
    $pdf = PDF::loadView('Form_internal.formsPDF.facultad', ['created_at'=>$created_at,'formulario' => $form, 'date' => $date, 'doc_id' => $doc_id]);
    return $pdf->stream('facultadForm'.$doc_id.'.pdf');
  }

//formulario "Permiso Programas para viajes de Estudio" (Direccion de Recursos Humanos)
  public function drrhh(Request $request){
    $id = $request->getQueryString();
    $form = FormularioIn::find($id);
    $created_at = explode(' ', $form->created_at );
    $date = date('d-m-Y');
    $doc_id = str_pad($id, 6,'0', STR_PAD_LEFT);
    $pdf = PDF::loadView('Form_internal.formsPDF.rrhh', ['created_at'=>$created_at,'formulario' => $form, 'date' => $date, 'doc_id' => $doc_id]);
    return $pdf->stream('rrhhForm'.$doc_id.'.pdf');
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
