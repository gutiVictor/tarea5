<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formularioss - HTML </title>
</head>
<body>
    <!-- Si todos los campos están validados, mostramos un mensaje de EXITO -->
    @if(Session::has('success'))
        <strong>
            {{Session::get('success')}}
        </strong>
    @endif       
    <form method="post" action="save">
        @csrf                        
        <label for="nombre">Nombre</label>
        <input type="text" class="" name="nombre" id="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <small>
                <strong>{{ $message }}</strong>
            </small>
        @enderror
        <br><br>
        <label for="apellido">Apellido</label>
        <input type="text" class="" name="apellido" id="apellido" value="{{ old('apellido') }}">
        @error('apellido')
            <small>
                <strong>{{ $message }}</strong>
            </small>
        @enderror
        <br><br>
        <label for="email">Email</label>
        <input type="email" class="" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <small>
                <strong>{{ $message }}</strong>
            </small>
        @enderror
        <br><br>
        <label for="contraseña">Contraseña</label>
        <input type="password" class="" name="contraseña" id="contraseña" value="{{ old('contraseña') }}">      
        @error('contraseña')
            <small>
                <strong>{{ $message }}</strong>
            </small>
        @enderror
        <br><br>
        
        <input type="submit" name="send" value="Guardar">
    </form>
</body>
</html>