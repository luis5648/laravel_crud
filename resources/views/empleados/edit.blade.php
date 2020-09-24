<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Registro</title>

    <!-- Bootstrap
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <style media="screen">
      .lbl{
        background-color: #d7f0d1;
      }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Menu de empleados</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Acerca de</a>
            </li>
          </ul>
          <div class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </div>
        </div>
      </nav>

    <form class="container form-group" action="{{ url('/empleados/'. $empleado->id)}}" method="post"
        enctype="multipart/form-data" style="padding: 5%">

        {{csrf_field()}}
        <!--Esta linea sirve como llave para poder acceder al método storage -->
        {{method_field('PATCH')}}
        <label for="Nombre" class="form-control lbl">Nombre</label>
        <input type="text" name="Nombre" id="nombre" class="form-control" value="{{$empleado->Nombre}}">
        <br />
        <label class="form-control lbl" for="ApellidoPaterno">Apellido Paterno</label>
        <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno"
            value="{{$empleado->ApellidoPaterno}}">

        <br />
        <label class="form-control lbl" for="ApellidoMaterno">Apellido Materno</label>
        <input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno"
            value="{{$empleado->ApellidoMaterno}}">

        <br />
        <label class="form-control lbl" for="Email">Correo electronico</label>
        <input class="form-control" type="email" name="Email" id="Email" value="{{$empleado->Email}}">

        <br />

        <img src="{{url(asset('storage').'/'.$empleado->Foto)}}" alt="foto de perfil" width="50">
        <label class="form-control lbl" for="Foto">Foto</label>
        <input class="form-control" type="file" name="Foto" id="Foto" required>
        <br>

        <input class="form-control btn btn-success" type="submit" value="Confirmar cambios">
        <br>
        <br>
        <a href="{{url('empleados')}}" class="btn btn-primary form-control">Regresar</a>

    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
