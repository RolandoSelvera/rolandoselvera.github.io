<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Reportes</title>
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
   
   <!-- Módulos de REPORTES: -->
   <div class="modulos">
      
       <div class="modulo rep-categoria">
           <div class="mod-icono">
               <i class="fa-file-text"></i>
           </div>
           <h3 class="mod-titulo">Por Categoría
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo rep-tipo">
           <div class="mod-icono">
               <i class="fa-file-text"></i>
           </div>
           <h3 class="mod-titulo">Por Tipo de Activo
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo rep-fecha">
           <div class="mod-icono">
               <i class="fa-file-text"></i>
           </div>
           <h3 class="mod-titulo">Por Fecha
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo rep-estatus">
           <div class="mod-icono">
               <i class="fa-file-text"></i>
           </div>
           <h3 class="mod-titulo">Por Estatus
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo rep-traspasos">
           <div class="mod-icono">
               <i class="fa-file-text"></i>
           </div>
           <h3 class="mod-titulo">Traspasos
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
   </div>
    
   <!-- Llamamos al archivo de funciones.js -->
   <script type="text/javascript" src="../js/funciones.js"></script>
    
</body>
</html>