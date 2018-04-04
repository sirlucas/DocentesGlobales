<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <title>PDF form</title>
    <style media="screen">

      .clearfix:after {
        content: " ";
        display: table;
        clear: both;
      }

      a {
        color: #5D6975;
        text-decoration: underline;
      }
      body {
        position: relative;
        margin: 0 auto;
        color: #001028;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-family: Arial;
      }

      header {
        padding: 10px 0;
        margin-bottom: 0px;
      }

      #logo {
        float: left;
        height: 48px;
        width: 150px;
        background: url(/img/set_corporativos/logo-udd-bajada150x48.png);
      }

      #logo img {

      }

      #folio {
        float: right;

      }
      .titulo{
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        margin: 60px 0 20px 0;
        height: 4em;
        background: url(/img/set_corporativos/dimension.png);

      }

      .titulo h1 {
        color: /*#5D6975;*/ #4b5660;
        font-size: 2.2em;
        line-height: 1em;
        margin: 2px 0 0px 0;
        font-weight: normal;
        text-align: center;
      }

      }
      .titulo h4{
      /*  border-bottom: 1px solid  #5D6975;*/
        color: #5D6975;
        font-size: 1.4em;
        margin: 8px 0 0px 5px;
        font-weight: normal;
        text-align: center;
      }


      h4{
      /*  border-bottom: 1px solid  #5D6975;*/
        color: #5D6975;
        font-size: 1.3em;
        line-height: 0.6em;
        margin: 20px 0 10px 0;
        font-weight: normal;
        text-align: left;
      }


      h3{
        color: #5D6975;
        font-size: 1.3em;
        line-height: 0.6em;
        margin: 20px 0px 10px 0;
        font-weight: normal;
        text-align: left;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #F5F5F5;
        border-left: 1px solid #F5F5F5;
        border-right: 1px solid #F5F5F5;
      }

      table tr:nth-child(2n-1) td {
        background: #F5F5F5;
      }

      table th,
      table td {
        text-align: center;
      }

      table th {
        padding: 0px 20px;
        color: #5D6975;
        border-bottom: 1px solid #C1CED9;
        white-space: nowrap;
        font-weight: normal;
      }

    table .service{
      text-align: right;
      color: #5D6975;
    /*  color: #505a63;*/
      font-style: oblique;
      font-size: 1.1em;
    }
    table .desc{
      text-align: left;
      font-size: 1.1em;
    }

    table td {
      padding: 20px;
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 1.2em;
    }

    table td.grand {
      border-top: 1px solid #5D6975;;
    }

    .firmas{
      position: absolute;
      padding-left: 70px;
      padding-right: 70px;
      bottom: 110px;
    }

    .firmas .der{
      padding-left:6px;
      border-left: 6px solid #0087C3;
      border-top: 2px solid #0087C3;
      width: 200px;
      float: right;
    }

    .firmas .izq{
      padding-left: 6px;
      border-left: 6px solid #0087C3;
      border-top: 2px solid #0087C3;
      width: 200px;
      float: left;
    }
    .firmas .notice {
      color: #5D6975;
      font-size: 1.1em;
    }


    footer {
      color: #5D6975;
      width: 100%;
      height: 30px;
      position: absolute;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }

    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
      </div>
      <div class="company">
        <small id="folio">RRHH{{ $doc_id }}</small><br>
        <small id="folio">Fecha Registro: {{ $formulario->created_at }}</small>
      </div>
      <div class="titulo">
        <h1>Permiso Programas para Viajes de Estudio</h1>
        <h4>Dirección de Recursos Humanos</h4>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service"></th>
            <th class="desc"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Nombre Colaborador</td>
            <td class="desc">{{$formulario->nombre}}</td>

          </tr>
          <tr>
            <td class="service">Cargo</td>
            <td class="desc">{{$formulario->cargo->cargo}}</td>
          </tr>
          <tr>
            <td class="service">Macrounidad y/o Unidad</td>
            <td class="desc">{{$formulario->unidad->unidad}}</td>
          </tr>
          <tr>
            <td class="service">Actividad Solicitada</td>
            <td class="desc">{{$formulario->clasificacion->clasificacion}} - {{$formulario->actividad->actividad}} <br> {{$formulario->proposito}} </td>

          </tr>
          <tr>
            <td class="service">Sede</td>
            <td class="desc">{{$formulario->sede->sede}}</td>
          </tr>
          <tr>
            <td class="service">Plazo de Viaje</td>
            <td class="desc">Fecha de Ida: {{$formulario->fecha_ida}} <br> Fecha de Retorno: {{$formulario->fecha_retorno}}</td>
          </tr>
          <tr>
            <td class="service">Autorizado por</td>
            <td class="desc"> {{$formulario->unidad->autoridad}}, {{$formulario->unidad->unidad}}</td>
          </tr>

        </tbody>
      </table>
      <div class="firmas">
        <div class="izq">
          <div>{{$formulario->unidad->autoridad}} </div>
          <div class="notice">Nombre y Firma</div>
        </div>
        <div class="der">
          <div>Académico/Colaborador</div>
          <div class="notice">Nombre y Firma</div>
        </div>
      </div>
    </main>
    <footer>
      Documento generado automáticamente por sistema Académicos Globales. <br>
      Con fecha: {{$date}}
    </footer>
  </body>
</html>
