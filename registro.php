<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="icono/pastel.icon" type="imagen/x-icon">
    <title>Registro de Usuario</title>
	<title>Document</title>
</head>
<body background="img/fondo1.png">
	<h1 class="titulo1">Registro de Usuario Empresa Vj Cakes</h1>
	<form method="post">
            <p class="text1">NOMBRES</p>
        <input type="text" maxlength="32" name="usuario" class="campo2"> <br>
            <p class="text1">APELLIDOS</p>
        <input type="text" maxlength="32" name="contraseña" class="campo2"> <br>
        	<p class="text1">CIUDAD</p>
        <input type="text" maxlength="32" name="contraseña" class="campo2"> <br>
        	<p class="text1">DIRECCIÓN</p>
        <input type="text" maxlength="32" name="contraseña" class="campo2"> <br>
        <p class="text1">TELÉFONO</p>
        <input type="text" maxlength="32" name="contraseña" class="campo2"> <br>
        <p class="text1">IDENTIFICACIÓN</p>
        <input type="text" maxlength="32" name="contraseña" class="campo2"> <br>
        <p class="text1">EMAIL</p>
        <input type="text" maxlength="32" name="contraseña" class="campo2"> <br>
        <div class="botones">
        <a href="sesion.php" class="volver">Volver</a>  
        <a href="#ventana" class="sesion3">Registrar Nuevo Usuario</a>
    </div> 
    <aside id="ventana" class="ventanae">
        <div class="contenido">
            <header>
            <p class="titulo"> Usuario Registrado </p>
            <form method="post">
                <p class="text">El usuario ha sido registrado exitosamente.</p>
                <div class="boton"> 
            <a href="sesion.php" class="aceptar">Aceptar</a>
            </div>
            </form>
            </header>
        </div>
    </aside>
</body>
</html>