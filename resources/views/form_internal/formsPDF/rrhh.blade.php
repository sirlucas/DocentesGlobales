<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <title>facultad form</title>
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
        margin-bottom: 10px;
      }

      #logo {
        float: left;
        height: 70px;
        width: 221px;
        background: url(/img/set_corporativos/uddbajada70drrhh.png);
      }

      #logo img {

      }

      #folio {
        float: right;
      }

      h1 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: /*#5D6975;*/ #4b5660;
        font-size: 2.2em;
        line-height: 1.3em;
        font-weight: normal;
        text-align: center;
        margin: 70px 0 20px 0;
        background: url(/img/set_corporativos/dimension.png);
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
      bottom: 130px;
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
      <h1>Permiso Programas Para Viajes De Estudio</h1>
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

        </tbody>
      </table>
      <h3>Autorizado por:</h3>
      <div class="firmas">
        <div class="izq">
          <div>{{$formulario->unidad->autoridad}} </div>
          <div class="notice">{{$formulario->unidad->unidad}}</div>
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
