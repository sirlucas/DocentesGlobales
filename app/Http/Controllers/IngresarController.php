<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class IngresarController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
     }



    public function showLoginForm()
    {

      session(['user' => 'juan']);
      session(['email' => 'asdf@sadf.cl']);


      $nuser = User::firstOrCreate(
        ['email' => 'email@email.cl'], ['fullname' => 'Lucas Torres', 'uid' => 'uid']
      );

      return view('adminlte::home');
    }


}
