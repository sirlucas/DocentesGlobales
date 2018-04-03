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
        background: url(/img/set_corporativos/uddbajada70.png);
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
      h1 small{
        font-size: 0.6em;
        line-height: 1em;
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

      table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 30px;
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
      padding: 10px;
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td.pas,
    table td.via,
    table td.ins {
      font-size: 1.1em;
      text-align: center;
    }

    table td.grand {
      border-top: 1px solid #5D6975;
    }

    table td h3{
      color: #0f3168;
      font-size: 1.2em;
      font-weight: normal;
      margin: 0 0 0.2em 0;
    }

    table .pas {
      background: #DDDDDD;
    }

    table .via {
      background: #ededed;
    }

    table .ins {
      background: #DDDDDD;
    }

    input{
      width:20px;
      position:relative;
      left: 200px;
      vertical-align:middle;
      }

    label{
      width:200px;

      position:relative;
      left: -20px;

      display:inline-block;
      vertical-align:middle;
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
    .firmas .cargo {
      color: #5D6975;
      font-size: 1.1em;
    }
    .firmas .nombre {
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
        <small id="folio">FAC{{ $doc_id }}</small><br>
        <small id="folio">Fecha Registro: {{ $formulario->created_at }}</small>
      </div>
      <h1>
        Autorización de Viajes Académicos UDD
        <br>
        <small>{{$formulario->unidad->unidad}}</small>
      </h1>
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
            <td class="service">Motivo de Viaje</td>
            <td class="desc">{{$formulario->clasificacion->clasificacion}} - {{$formulario->actividad->actividad}} <br> {{$formulario->proposito}} </td>
          </tr>
          <tr>
            <td class="service">Institución Anfitriona</td>
            <td class="desc">{{$formulario->institucion_anf}}</td>
          </tr>
          <tr>
            <td class="service">Ciudad/País Destino</td>
            <td class="desc">{{$formulario->ciudad->ciudad}}, {{$formulario->ciudad->pais->pais}}</td>
          </tr>
          <tr>
            <td class="service">Plazo de Viaje</td>
            <td class="desc">Fecha de Ida: {{$formulario->fecha_ida}} <br> Fecha de Retorno: {{$formulario->fecha_retorno}}</td>
          </tr>
        </tbody>
      </table>

      <table>
        <thead>
          <tr>
            <th class="desc">FINANCIEMIENTO</th>
            <th class="pas">PASAJES</th>
            <th class="via">VIÁTICOS</th>
            <th class="ins">INSCRIPCIÓN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @if($pasajes != null && $viaticos != null && $inscripcion != null)
            <td class="desc"><h3>Monto</h3>Montos en divisa: {{$pasajes->currency[0]->isocode}}</td>
            <td class="pas">{{$pasajes->currency[0]->cursymbol}}{{$pasajes->pivot->monto}}.-</td>
            <td class="via">{{$viaticos->currency[0]->cursymbol}}{{$viaticos->pivot->monto}}.-</td>
            <td class="ins">{{$inscripcion->currency[0]->cursymbol}}{{$inscripcion->pivot->monto}}.-</td>
            @elseif($pasajes != null)
            <td class="desc"><h3>Monto</h3>Montos en divisa: {{$pasajes->currency[0]->isocode}}</td>
            <td class="pas">{{$pasajes->currency[0]->cursymbol}}{{$pasajes->pivot->monto}}.-</td>
            <td class="via"></td>
            <td class="ins"></td>
            @elseif($viaticos != null)
            <td class="desc"><h3>Monto</h3>Montos en divisa: {{$viaticos->currency[0]->isocode}}</td>
            <td class="pas"></td>
            <td class="via">{{$viaticos->currency[0]->cursymbol}}{{$viaticos->pivot->monto}}.-</td>
            <td class="ins"></td>
            @elseif($inscripcion != null)
            <td class="desc"><h3>Monto</h3>Montos en divisa: {{$inscripcion->currency[0]->isocode}}</td>
            <td class="pas"></td>
            <td class="via"></td>
            <td class="ins">{{$inscripcion->currency[0]->cursymbol}}{{$inscripcion->pivot->monto}}.-</td>
            @else
            <td class="desc"><h3>Monto</h3>Montos en divisa: </td>
            <td class="pas"></td>
            <td class="via"></td>
            <td class="ins"></td>
            @endif
          </tr>

          <tr>
            <td class="desc"><h3>Fuente de Financiamiento</h3>Ej.: Proyecto propio, Facultad, Beca, etc.</td>
            <td class="pas"></td>
            <td class="via"></td>
            <td class="ins"></td>
          </tr>
        </tbody>
      </table>


      <h4>Otros Viajes Considerados Durante el Presente Año:</h4>
      <table id="viajes">
        <thead>
          <tr>
            <th>LUGAR</th>
            <th>FECHA APROXIMADA</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i <= 4; $i++)
          <tr>
            <td class="desc"></td>
            <td class="cent"></td>
          </tr>
        @endfor
        </tbody>
      </table>

      <div class="opcion">
        <h4>¿Acordó con el Director de Carrera como Recuperará sus Clases?</h4>
        <ul>
          <li>
            <input type="checkbox" >
            <label >SI</label>
          </li>
          <li>
            <input type="checkbox">
            <label >NO</label>
          </li>
        </ul>
      </div>


      <div class="firmas">
        <div class="der">
          <div class="nombre">{{$formulario->nombre}}</div>
          <div class="cargo">Firma</div>
        </div>
      </div>

    </main>

    <footer>
      Documento generado automáticamente por sistema Académicos Globales. <br>
      Con fecha: {{$date}}
    </footer>
  </body>

</html>
