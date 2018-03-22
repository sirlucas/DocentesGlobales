<!DOCTYPE html>
<html lang="en">
<head>

    <title>Movilidad</title>


</head>

<body>
  <div>
        <h3>Permiso Programas para Viajes de Estudios</h3>

        <small>Informe de prueba</small>
        <!-- Main content -->
        <section class="content">

          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="info">Nombre Colaborador</td>
                <td>{{$formulario->nombre}}</td>
              </tr>
              <tr>
                <td>Cargo</td>
                <td>{{$formulario->cargo->cargo}}</td>
              </tr>
              <tr>
                <td>Facultad y/o Unidad</td>
                <td>{{$formulario->unidad->unidad}}</td>
              </tr>
              <tr>
                <td>Actividad Solicitada</td>
                <td>{{$formulario->actividad->actividad}}</td>
              </tr>
              <tr>
                <td>Descripción actividad</td>
                <td>{{$formulario->proposito}}</td>
              </tr>
              <tr>
                <td>Sede</td>
                <td>{{$formulario->sede->sede}}</td>
              </tr>
              <tr>
                <td>fecha de Inicio</td>
                <td>{{$formulario->fecha_ida}}</td>
              </tr>
              <tr>
                <td>Fecha de término</td>
                <td>{{$formulario->fecha_retorno}}</td>
              </tr>
            </tbody>


            <h5>{{$formulario->unidad->autoridad}}</h5>

            </thead>

          </table>

        </section><!-- /.content -->

  </div>

</body>
</html>
