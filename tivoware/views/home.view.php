<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" type="image/x-icon" href="../resources/images/logo.png">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script type="text/javascript" src="../js/modernizr.js"></script>
</head>
<body>
  <!-- Cabecera: -->
   <header>
      <!-- Logotipo y nombre: -->
       <h1>
           <a href="home.php">
               <figure>
                    <img src="../resources/images/logo.png" alt="" >
               </figure>
           </a>
           <a href="home.php">TivoWare</a>
       </h1>
       
       <!-- Menu: -->
       <nav id="inOutMenu">
          
           <div id="verMenu" class="inOutMovil" onClick="displayMenu()" >
               <i class="fa-bars"></i>
           </div>
           
           <div id="cardMenu">
               <div id="ocultaMenu" class="inOutMovil" onClick="displayMenu()" >
                   <i class="fa-close"></i>
               </div>
               
               <ul>
                   <li><a href="home.php">INICIO</a></li>
                   <li><a href="reportes.php">REPORTES</a></li>
                   <li><a href="configuracion.php">CONFIGURACION</a></li>
                   <li><a href="../index.php">Cerrar Sesión</a></li>
               </ul>
           </div>
           
       </nav>
   </header>
   
   <!-- Módulos de INICIO: -->
   <div class="modulos">
      
       <div class="modulo mod-categoria">
            <div class="mod-icono">
                <i class="fa-list"></i>
            </div>
            <h3 class="mod-titulo">Categorías
                <a href="modulos/categorias.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
            </h3>
       </div>
       
       <div class="modulo mod-activos-info">
           <div class="mod-icono">
               <i class="fa-windows"></i>
               <i class="fa-database"></i>
               <i class="fa-folder-open"></i>
           </div>
           <h3 class="mod-titulo">Activos de Información
                <a href="modulos/activos-de-informacion.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo mod-activos-fis">
           <div class="mod-icono">
               <i class="fa-archive"></i>
               <i class="fa-desktop"></i>
               <i class="fa-keyboard-o"></i>
           </div>
           <h3 class="mod-titulo">Activos Físicos
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo mod-movimientos">
           <div class="mod-icono">
               <i class="fa-cube"></i>
               <i class="fa-angle-double-right"></i>
               <i class="fa-cubes"></i>
           </div>
           <h3 class="mod-titulo">Movimiento de Activos
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo mod-personal">
           <div class="mod-icono">
               <i class="fa-id-card"></i>
           </div>
           <h3 class="mod-titulo">Personal de trabajo
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo mod-centros">
           <div class="mod-icono">
               <i class="fa-suitcase"></i>
           </div>
           <h3 class="mod-titulo">Centros de trabajo
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
   </div>
   
    
   <!-- Llamamos al archivo de funciones.js -->
   <script type="text/javascript" src="../js/funciones.js"></script>   

</body>
</html>