<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="icono/pastel.icon" type="imagen/x-icon">
    <title>Repostería VJ CAKES</title>
</head>
<body background="img/fondo1.png">
	 <nav class="navmodulo">       
        <ul class="menumodulo">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="factu.php">Facturación</a></li>
            <li><a href="inventario.php">Inventario</a></li> 
            <li><a href="venta.php">Venta</a></li>              
        </ul>
        <ul class="perfil1">
            <li><img src="img/unnamed.png" alt="perfil" width="50px"></li>
        </ul>
        <ul class="sesion">
            <li><a href="datos.php">Pepito</a></li>
        </ul>
    </nav>
    <div class="datos">
        <img src="img/unnamed.png" alt="perfil" width="200px" class="perfil">
        <h1 class="dato">Nombre:Pepito</h1>
        <h1 class="dato2">Cargo: Vendedor</h1>
    </div>
    <div >
        <h1 class="modulo1">Módulo</h1>
        <br>
        <nav class="modulo">
            <ul >
                <li><a href="factu.php" class="fac">Facturación</a></li>
                <br>    
                <li><a href="inventario.php" class="inv">Inventario</a></li>
                <br>    
                <li><a href="venta.php" class="venta">Venta</a></li>
            </ul>
        </nav>
    </div>
    <div class="botones">
        <a href="#ventana" class="regusu">Registrar Nuevo Usuario</a>  
        <a href="index.php" class="sesion2">Cerrar Sesión</a>
    </div>  
    <aside id="ventana" class="ventanae">
            <div class="contenido">
                <header>
                <p class="titulo"> Iniciar Sesión </p>
                <form method="post">
                    <p class="text">Usuario:</p>
                <input type="text" maxlength="32" name="usuario" class="campo"> <br>
                    <p class="text">Contraseña:</p>
                <input type="password" maxlength="32" name="contraseña" class="campo"> <br>
                    <div class="boton"> 
                    <a href="#" class="cerrar">Cancelar</a>
                <a href="registro.php" class="aceptar">Aceptar</a>
                </div>
                </form>
                </header>
            </div>
        </aside>
</body>
</html>