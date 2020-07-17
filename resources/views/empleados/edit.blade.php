<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Registro</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>

<form class="container form-group" action="{{ url('/empleados/'. $empleado->id)}}" method="post" enctype="multipart/form-data">

{{csrf_field()}} <!--Esta linea sirve como llave para poder acceder al método storage -->
{{method_field('PATCH')}}
    <label for="Nombre" class="form-control">Nombre</label>
    <input type="text" name="Nombre" id="nombre" class="form-control"value="{{$empleado->Nombre}}">
<br/>
    <label class="form-control"for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control"name="ApellidoPaterno" id="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}">

<br/>
    <label class="form-control"for="ApellidoMaterno">Apellido Materno</label>
    <input class="form-control"type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}">

<br/>
    <label class="form-control"for="Email">Correo electronico</label>
    <input class="form-control"type="email" name="Email" id="Email" value="{{$empleado->Email}}" >

<br/>

    <img src="{{url(asset('storage').'/'.$empleado->Foto)}}" alt="foto de perfil" width="50">
    <label class="form-control"for="Foto">Foto</label>
    <input class="form-control"type="file" name="Foto" id="Foto" required>
<br>

    <input class="form-control btn btn-success"type="submit"  value="Subir">

</form>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
