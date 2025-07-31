<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width= device-width, initial-scale=1.0">
        <link rel="icon" href="./IMGFares/logo cole.png" type="image/JPG"sizes="16x16">
        <link rel="stylesheet" type="text/css" href="./Estilos.css/colores.css">
        <link rel="stylesheet" type="text/css" href="./Estilos.css/diseños.css">
        <title>Edición Fares</title>
</head>

 <body>
            <header id="titulo1" class="fcolor-d5">
                <h1>C.E.M.G.H.R.T</h1>
            </header>

           <nav class="fcolor-14">
            <ul>
                <li><a href="#">Pricipal</a></li>
                <li><a href="#">Libros</a></li>
                <li class="f-desplegable">
                    <a href="#" class="btndesplegable">Inventario</a>
                    <a href="#">Inventario</a>
                    <div class="cont-desplegable">
                    <a href="Cproduccto.php">crear produccto</a>
                    <a href="#">Consultar produccto</a>
                    </div>
                    </li>
                    <li><a href="#">Contacto</a></li>
                    </ul>
                    </nav>
                    <section class="fcolor-l1 seccion-from">
               <div class="s-encabezado">
                    <h2>Inventario<h//2>
                </div>
                <form class="fcolor-l5" action="guardar.php" method="post"
                enctype="multipart/form-data" autocomplete="off">
                  <div id="codnom">
                    <label class="codnom1">Codigo: <input type="text" name="codigo" id="codigo"pattern="[0-9]{3,}"
                    placeholder="ingresar solo numeros" size="12" autofocus required></label> 
                    <label class="codnom1">Producto: <input type="text" class="campof" name="nproducto" id="nproducto"
                     pattern="[a-zA-Z\s]+{3,100}" placeholder="ingresar solo letras" size="50" autofocus required></label>
                  </div>
                   <div id="cospor">
                    <label class="codnom1">Costo: <input type="text" class="campof"name="costop" id="costop"
                     pattern="[0-9]+([,\.][0-9]+)?"> </label>
                    <label class="codnom1">Porcentaje de Venta: <input type="text" class="campof" name="Porcentajev" id="Porcentajev"
                     maxlength="3"size="4"> </label>
                   </div>
                   <div id="prefecha">
                    <label class="codnom1">Precio de ventas: <input type="text" class="campof" name="pVenta" id="pVenta" readonly> </label>
                    <label class="codnom1">Fecha: <input type="date" class="campof" name="fecha_creacion"
                    id="fecha_creacion"> </label>
                   </div>
                   <div id="csimagen">
                    <img src="" width="200px" alt="Imagen del Producto...">
                   </div>
                   <div id="botonimg">
                    <input type="file" class="campof" name="simagen" id="simagen">
                    </div>
                    <input type="submit" value="Guardar">
                    </form>
                   </selection>
                   <footer class="fcolor-d5">
                      <p>Derechos Reservados &copy; 2024-2023 </p>
                   </footer>  
  <body>
                
