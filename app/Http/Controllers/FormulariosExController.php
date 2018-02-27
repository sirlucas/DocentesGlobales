<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosExController extends Controller
{
  public function index()
  {
      return view('formularioEx.index');
  }
}
