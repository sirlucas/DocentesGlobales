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
    $cgestion = CGestion::All();
    $currency = Currency::All();
    $created_at = explode(' ', $form->created_at );
    $date = date('d-m-Y');
    $doc_id = str_pad($id, 6,'0', STR_PAD_LEFT);
    $pdf = PDF::loadView('Form_internal.formsPDF.ddca', ['created_at'=>$created_at,
        'formulario' => $form, 'date' => $date, 'doc_id' => $doc_id,
        'c_gestion' => $cgestion, 'curr' => $currency]);
    return $pdf->stream('ddcaForm'.$doc_id.'.pdf');
  }

// formulario para Pago de Viaticos (Vicerrectoria académica)
  public function fpv(Request $request){
    $id = $request->getQueryString();
    $form = FormularioIn::find($id);
    $cuentas = null;
    /* accede a todas las account asociados al formularios
    y guarda la correspondiente a id=4 (Viaticos)*/
    foreach($form->account as $account){
      if($account->pivot->account_id == 4){
        $cuentas = $account;
      }
    }
    $created_at = explode(' ', $form->created_at );
    $date = date('d-m-Y');
    $doc_id = str_pad($id, 6,'0', STR_PAD_LEFT);
    $pdf = PDF::loadView('Form_internal.formsPDF.fpv', ['created_at'=>$created_at,'formulario' => $form, 'date' => $date, 'doc_id' => $doc_id,'cuentas'=>$cuentas]);
    return $pdf->stream('fpvForm'.$doc_id.'.pdf');
  }

//formulario par autorizacion de viajes academicos INgenieria UDD
  public function facultad(Request $request){
    $id = $request->getQueryString();
    $form = FormularioIn::find($id);
    $cur = Currency::All();
    $pasajes = null;
    $viaticos = null;
    $inscripcion = null;
    /* accede a todas las account asociados al formularios
    y guarda la correspondiente a id=4 (Viaticos) id=1 (inscrip) id=3 (pasajes)
    corroborar con la base de datos*/
    foreach($form->account as $account){
      if($account->pivot->account_id == 4){
        $viaticos = $account;
      }
      if($account->pivot->account_id == 1){
        $inscripcion = $account;
      }
      if($account->pivot->account_id == 3){
        $pasajes = $account;
      }
    }
    $created_at = explode(' ', $form->created_at );
    $date = date('d-m-Y');
    $doc_id = str_pad($id, 6,'0', STR_PAD_LEFT);
    $pdf = PDF::loadView('Form_internal.formsPDF.facultad', ['created_at'=>$created_at,
                         'formulario' => $form, 'date' => $date, 'doc_id' => $doc_id,
                         'viaticos' => $viaticos, 'pasajes' => $pasajes,
                         'inscripcion' => $inscripcion, 'curr' => $cur]);
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
