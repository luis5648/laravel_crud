
<form class="" action="{{ url('/empleados')}}" method="post" enctype="multipart/form-data">

{{csrf_field()}} <!--Esta linea sirve como llave para poder acceder al método storage -->
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="nombre">
<br/>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">

<br/>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno">

<br/>
    <label for="Email">Correo electronico</label>
    <input type="email" name="Email" id="Email">

<br/>
    <label for="Foto">Foto</label>
    <input type="file" name="Foto" id="Foto">


    <input type="submit" name="Subir" value="Subir">

</form>
