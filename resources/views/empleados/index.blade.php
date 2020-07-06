<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
      <div class="card border-primary m-3" style="overfow-x:auto;overflow-y:auto;">
          <div class="card-header">
             Empleados
          </div>

      <table class="table table-hover" >
          <thead>
              <tr>
                  <th>#</th>
                  <th>Foto</th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Correo</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
              @foreach($empleados as $empleado)
              <tr>
                 <td>{{$loop->iteration}}</td>
                 <td>
                     <img src="{{url($empleado->Foto)}}" alt="foto de perfil" width="30px"height="30px">
                 </td>
                <!-- <td>{{$empleado->Foto}}</td>-->
                 <td>{{$empleado->Nombre}}</td>
                 <td>{{$empleado->ApellidoPaterno}}</td>
                 <td>{{$empleado->ApellidoMaterno}}</td>
                 <td>{{$empleado->Email}}</td>
                 <td>
                    <form action="" method="post">
                        <a href="{{url('/empleados/'.$empleado->id.'/edit')}} " class="btn btn-warning">Editar</a>

                    </form>
                    <br>
                    <form  action="{{url('/empleados/'.$empleado->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger" name="borrar" onclick="return confirm('¿Desea borrar el registro?');">Borrar</button>

                    </form>

                 </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
