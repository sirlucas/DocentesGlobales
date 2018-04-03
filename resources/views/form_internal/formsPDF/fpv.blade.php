<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <title>ddca form</title>
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
        height: 70px;
        width: 221px;
        text-align: center;
        vertical-align:text-bottom;
        background: url(/img/set_corporativos/uddbajada70.png);
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
        margin: 15px 0 5px 0;
        font-weight: normal;
        text-align: left;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 30px;
        border-bottom: 1px solid #e2e0e0;
        border-left: 1px solid #e2e0e0;
        border-right: 1px solid #e2e0e0;
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
    table td.cent {
      text-align: center;
    }

    table td h3{
      color: #0f3168;
      font-size: 1.2em;
      font-weight: normal;
      margin: 0 0 0.2em 0;
    }

    table tfoot td {
      padding: 10px 10px;
      background: #FFFFFF;
      border-bottom: none;
      font-size: 1em;
      white-space: nowrap;
      border-top: 1px solid #4b5660;
    }

    table tfoot tr:first-child td {
      border-top: none;
    }

    table tfoot tr:last-child td {
      color: #4b5660;
      font-size: 1em;
      border-top: 1px solid #4b5660;

    }

    table tfoot tr td:first-child {
    }

    #bloque{
      width: 100%;
      position: absolute;

    }
    .A{
      width: 50%;
      float: left;
    }
     .B{
      width: 48%;
      margin-left: 5px;
      float: right;
    }
    #bloque .B textarea{
      height: 10em;
      font-family: Arial, sans-serif;
      font-size: 12px;
      font-family: Arial;
    }


    .firmas{
      position: fixed;
      padding-left: 70px;
      padding-right: 70px;
      bottom: 110px;
    }
    .firmas2{
      position: fixed;
      padding-left: 70px;
      padding-right: 70px;
      bottom: 200px;
    }

    .firmas .der, .firmas2 .der{
      padding-left:6px;
      border-left: 6px solid #0087C3;
      border-top: 2px solid #0087C3;
      width: 200px;
      float: right;
    }

    .firmas .izq, .firmas2 .izq{
      padding-left: 6px;
      border-left: 6px solid #0087C3;
      border-top: 2px solid #0087C3;
      width: 200px;
      float: left;
    }
    .firmas .cargo, .firmas2 .cargo {
      color: #5D6975;
      font-size: 1.1em;
    }
    .firmas .nombre, .firmas2 .nombre {
      font-size: 1.1em;
    }



    footer {
      color: #5D6975;
      width: 100%;
      height: 30px;
      position: fixed;
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
        <small id="folio">FPV{{ $doc_id }}</small><br>
        <small id="folio">Fecha Registro: {{ $formulario->created_at }}</small>
      </div>
      <h1>Formulario de Pago de Viáticos<br></h1>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service"></th>
            <th class="cent">CÓDIGO</th>
            <th class="cent">DESCRIPCIÓN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Sede</td>
            <td class="cent">{{$formulario->dom_sede_id}}</td>
            <td class="desc">{{$formulario->sede->sede}}</td>
          </tr>
          @if(is_object($cuentas))
          <tr>
            <td class="service">Centro de Gestión</td>
            <td class="cent">{{$cuentas->cgestion[0]->codigo}}</td>
            <td class="desc">{{$cuentas->cgestion[0]->cgestion}}</td>
          </tr>
          <tr>
            <td class="service">Cuenta (Gasto)</td>
            <td class="cent">{{$cuentas->codigo}}</td>
            <td class="desc">{{$cuentas->cuenta}}</td>
          </tr>
          @else
          <tr>
            <td class="service">Centro de Gestión</td>
            <td class="cent">--</td>
            <td class="desc">--</td>
          </tr>
          <tr>
            <td class="service">Cuenta (Gasto)</td>
            <td class="cent">--</td>
            <td class="desc">Cuenta Viáticos No Asociada</td>
          </tr>
          @endif
        </tbody>
      </table>


      <table>
          <h4>Datos Prestador de Servicios: (*)</h4>
          <thead>
            <tr>
              <th class="service"></th>
              <th class="cent"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="service">Nombre Completo</td>
              <td class="desc">{{$formulario->nombre}}</td>
            </tr>
            <tr>
              <td class="service">RUT / Nº Pasaporte</td>
              <td class="desc">{{$formulario->rut}}</td>
            </tr>
          </tbody>
      </table>





      <div id="bloque">
        <div class="A">
          <table>
            <thead>
              <h4>Detalle Pago Viático: (*)</h4>
                <tr>
                  <th class="cent">DÍA</th>
                  <th class="cent">MES</th>
                  <th class="cent">VALOR UNITARIO</th>
                </tr>
              </thead>
              <tbody>
              @for ($i = 1; $i <= 9; $i++)
                <tr>
                  <td class="desc"></td>
                  <td class="cent"></td>
                  <td class="cent"></td>
                </tr>
              @endfor
              </tbody>
              <tfoot>
                <tr>
                  @if(is_object($cuentas))
                  <td class="service" colspan="2">MONTO TOTAL:(*)<br> <small>Divisa: {{$cuentas->currency[0]->isocode}}</small> </td>
                  <td class="cent">{{$cuentas->currency[0]->cursymbol}}{{$cuentas->pivot->monto}}.- </td>
                  @else
                  <td class="service" colspan="2">MONTO TOTAL:(*)<br> <small>Divisa: </small> </td>
                  <td class="cent"> </td>
                  @endif
                </tr>
              </tfoot>
          </table>
        </div>
        <div class="B">
          <h4>Observaciones</h4><small>(Detallar Actividad Realizada)</small>
          <textarea >
            {{$formulario->proposito}}
          </textarea>
          <br>
          <small>(*) ESTOS DATOS SON OBLIGATORIOS PARA CURSAR EL PAGO DE VIÁTICOS,
            ADICIONALMENTE SE DEBE PRESENTAR "BOARDINGS PASS" O "CARTOLA LAN",
          DE LO CONTRARIO EL FORMULARIO SERÁ RECHAZADO.</small>

        </div>

      </div>





    <div class="firmas2">
      <div class="der">
        <div class="nombre"></div>
        <div class="cargo">VºBº Responsable Centro de Gestión</div>
      </div>

      <div class="izq">
        <div class="cargo">VºBº Analista VRE</div>
      </div>
    </div>

    <div class="firmas">
      <div class="der">
        <div class="cargo">Responsable Centro de Gestión</div>
        @if(is_object($cuentas))
        <td class="nombre">{{$cuentas->cgestion[0]->responsable}} </td>
        @else
        <div class="nombre">Nombre y Firma</div>
        @endif

      </div>

      <div class="izq">
        <div class="cargo">Analista VRE</div>
        <div class="nombre">Nombre y Firma</div>
      </div>
    </div>



    </main>

    <footer>
      Documento generado automáticamente por sistema Académicos Globales. <br>
      Con fecha: {{$date}}
    </footer>
  </body>

</html>
