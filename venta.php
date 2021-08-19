<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="./img/icon/pastel.icon">
    <title>Ventas VJ Cake</title>
</head>

<body background="img/fondo1.png">
    <nav class="navmodulo">       
        <ul class="menumodulo">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="factu.php">Facturación</a></li>
            <li><a href="inventario.php">Inventario</a></li> 
            <li><a href="venta.php">Venta</a></li>              
        </ul>
        <ul class="sesion">
            <li>Volver</li>
        </ul>
    </nav>

    <div class="title">
        <label>VENTAS VJ CAKES</label>
    </div>

    <div class="form">
        <div class="form-sale">
            <div class="space-between">
                <label class="text-comienzo">NOMBRE VENDEDOR:</label>
                <span class="text-comienzo"> Luz Karime Guerra</span>
            </div>

            <div class="space-between">
                <label class="text-form">Nombre:</label>
                <input class="input-secundary" type="text" name="name" placeholder="&#128100; Nombre Completo"
                required autofocus>
            </div>

            <div class="space-between">
                <label class="text-form">Cédula:</label>
                <input class="input-secundary" type="text" name="text" placeholder="Número de identificación">
            </div>

            <div class="space-between">
                <label class="text-form">Teléfono:</label>
                <input class="input-secundary" type="tel" name="tel" required placeholder="&#128222; Número Telefónico"
                required>
            </div>

            <div class="space-between">
                <label class="text-form">E-mail:</label>
                <input class="input-secundary" type="email" name="email" required placeholder="&#9993; Correo Electrónico"
                required="">
                
            </div>

            <div class="space-between">
                <label class="text-form">Dirección:</label>
                <input class="input-secundary" type="text" name="DIRECCIÓN" placeholder="&#8962; Ingrese una Dirección"
                required>
            </div>

            <div class="space-between">
                <label class="text-form">Sub-total:</label>
                <input class="input-secundary" type="number" name="number" placeholder="$"
                required>
            </div>

            <div class="space-between">
                <label class="text-form">Total:</label>
                <input class="input-secundary" type="number" name="number" placeholder="$"
                required>
            </div>            
        </div>

        <div class="dropdown-form">
            
            <div class="space-between">
                <label class="text-primary">Productos: </label>
                <input class="input-secundary"  type="number" name="Código" placeholder="----Inserte el código---"
                required>
            </div>

            <div class="space-between">
                <label class="text-primary">Pago:</label>                
                <select>                 
                    <option selected="selected">$</option>
                    <option> Tarjeta</option>
                    <option>Efectivo</option>
                    <option>Nequi</option>
                </select>
            </div>
        </div>
        <div class="button-form">
            <button class="primary-button">Cancelar</button>
            <Button class="primary-button">Confirmar</Button>
        </div>

    </div>


    <div class="funtion-button">
        <button class="primary-button">Volver</button>
    </div>
</body>

</html>