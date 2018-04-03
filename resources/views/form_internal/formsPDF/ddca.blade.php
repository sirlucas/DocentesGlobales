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
        padding: 0px 0;
        margin-bottom: 0px;
      }

      #logo {
        float: left;
        height: 70px;
        width: 221px;
        text-align: center;
        vertical-align:text-bottom;
        background: url(/img/set_corporativos/uddbajada70ddca.png);
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
        margin: 60px 0 10px 0;
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
        margin-bottom: 10px;
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
        padding: 0px 0px;
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
      padding: 5px;
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td h3{
      color: #0f3168;
      font-size: 1.2em;
      font-weight: normal;
      margin: 0 0 0.2em 0;
    }

    table tfoot td {
      padding: 0px 10px;
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


    .firmas{
      position: absolute;
      padding-left: 70px;
      padding-right: 60px;
      bottom: 100px;
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
      position: fixed;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }

    #bloque{
      width: 100%;
      height: 220px;

    }
    .A{
      width: 60%;
      float: left;
      font-size: 0.9em;
    }

     .B{
      width: 38%;
      margin-left: 5px;
      float: right;
    }
    #bloque .B textarea{
      height: 8em;
      font-family: Arial, sans-serif;
      font-size: 12px;
      font-family: Arial;
    }

    .obs{
      position: fixed;
      bottom: 140px;
      width: 50%;
    }



    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
      </div>

      <div class="company">
        <small id="folio">DDCA{{ $doc_id }}</small><br>
        <small id="folio">Fecha Registro: {{ $formulario->created_at }}</small>
      </div>
      <h1>Solicitud de Perfeccionamiento Académico<br><small>Académicos Contratados y Honorarios con Planificación del Año en Curso</small></h1>
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
            <td class="service">RUT</td>
            <td class="desc">{{$formulario->rut}}</td>
          </tr>
          <tr>
            <td class="service">Facultad / Unidad</td>
            <td class="desc">{{$formulario->unidad->unidad}}</td>
          </tr>
          <tr>
            <td class="service">Carrera / Plan de Estudio</td>
            <td class="desc">{{$formulario->carrera->carrera}}<br> {{$formulario->postitulo}}</td>
          </tr>
          <tr>
            <td class="service">Cargo</td>
            <td class="desc">{{$formulario->cargo->cargo}}</td>
          </tr>
        </tbody>
      </table>

      <table>
        <thead>
          <h4>Cursos que Dicta Actualmente</h4>
          <thead>
            <tr>
              <th>NOMBRE CURSO</th>
              <th>AÑO/SEMESTRE</th>
            </tr>
          </thead>
          <tbody>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
          </tbody>
      </table>


      <table>
        <thead>
          <h4>Detalles de la Actividad:</h4>
          <tr>
            <th class="service"></th>
            <th class="desc"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Nombre de la Actividad / Propósito</td>
            <td class="desc">{{$formulario->actividad_nombre}} <br>   {{$formulario->proposito}} </td>

          </tr>
          <tr>
            <td class="service">Tipo de Actividad</td>
            <td class="desc">{{$formulario->clasificacion->clasificacion}} - {{$formulario->actividad->actividad}}</td>
          </tr>
          <tr>
            <td class="service">Plazo de Viaje</td>
            <td class="desc">Fecha de Inicio: {{$formulario->fecha_ida}} <br> Fecha de Retorno: {{$formulario->fecha_retorno}}</td>
          </tr>
          <tr>
            <td class="service">Institución Anfitriona</td>
            <td class="desc">{{$formulario->institucion_anf}}</td>
          </tr>
          <tr>
            <td class="service">Ciudad - País</td>
            <td class="desc">{{$formulario->ciudad->ciudad}} - {{$formulario->ciudad->pais->pais}}</td>
          </tr>
        </tbody>
      </table>


      <div id="bloque">
        <div class="A">
          <h4>Detalles del Aporte Solicitado</h4>
          <table>
            <thead>

              <tr>
                <th >Cuenta(*)</th>
                <th >Monto</th>
                <th >Centro de Gestión(**)</th>
              </tr>
            </thead>

            <tbody>
              @if($formulario->account->count() > 0)
              @foreach($formulario->account as $account)
              <tr>
                <td class="desc" >{{$account->cuenta}}</td>
                <td class="desc">{{$account->currency[0]->cursymbol}}{{$account->pivot->monto}}.-</td>
                <td class="desc">{{$account->cgestion[0]->cgestion}}</td>
              </tr>
              @endforeach
              @else
              <tr>
                <td class="desc" >Inscripción/Matricula</td>
                <td class="desc"></td>
                <td class="desc"></td>
              </tr>
              <tr>
                <td class="desc" >Arancel</td>
                <td class="desc"></td>
                <td class="desc"></td>
              </tr>
              <tr>
                <td class="desc" >Pasajes</td>
                <td class="desc"></td>
                <td class="desc"></td>
              </tr>
              <tr>
                <td class="desc" >Viáticos</td>
                <td class="desc"></td>
                <td class="desc"></td>
              </tr>
              <tr>
                <td class="desc" >Otros</td>
                <td class="desc"></td>
                <td class="desc"></td>
              </tr>
              <tr>
                <td class="desc" >TOTAL</td>
                <td class="desc"></td>
                <td class="desc"></td>
              </tr>
              @endif
          </tbody>
          </table>
        </div>

        <div class="B">
          <h4>Observaciones</h4>
          <textarea >
            {{$formulario->observaciones}}
          </textarea>
          <small>(*)Lo aportes solicitados por l facultad deben ser cargados
          al centro de gestión "Perfeccionamiento Académico" conducente a o no
        conducente a grado de la carrera según corresponda.</small>
        <br>
        <small>(**)Los gastos asociados a centros de gestión solo deben incluir
        gastos relativos a las cuentas que se detallan.</small>

        </div>

      </div>


      <div class="obs">
        <h4>Solicitado por</h4>
        <table>
          <tr>
            <td class="desc" ></td>
          </tr>
          <tr>
            <td class="desc" ></td>
          </tr>
        </table>
      </div>


    <div class="firmas">
      <div class="der">
        <div class="nombre">{{$formulario->nombre}}</div>
        <div class="cargo">{{$formulario->cargo->cargo}}- Firma</div>
      </div>
    </div>



    </main>

    <footer>
      Documento generado automáticamente por sistema Académicos Globales. <br>
      Con fecha: {{$date}}
    </footer>
  </body>

</html>
