<?php
require('../uddsaml/lib/_autoload.php');
$as = new SimpleSAML_Auth_Simple('udd-sp');
$as->requireAuth();
$attributes = $as->getAttributes();
$Users = array("aldomartinezn", "andresibarra");
if (in_array($attributes["uid"][0], $Users)) $B_Sesion = 1; else $B_Sesion = 0;
switch($B_Sesion){
case 1:
//mantener en la pagina
break;
case 0:
//Cerrar sesi�n y redireccionar
session_destroy();
header('Location: /');
break;
}
?>
<!--
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Jorge Torres -- SirlucasT">

    <meta property="og:title" content="UDD" />
    <meta property="og:type" content="website" />



    <title>{{ trans('adminlte_lang::message.landingdescriptionpratt') }}</title>

    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>adminlte-laravel</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">

                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>




    <footer>
        <div id="c">
            <div class="container">
                <p>
                </p>

            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>-->
