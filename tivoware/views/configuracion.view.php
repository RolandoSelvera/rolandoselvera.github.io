<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Configuración</title>
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
   
   <!-- Módulos de CONFIGURACION: -->
   <div class="modulos">
      
       <div class="modulo conf-usuarios">
           <div class="mod-icono">
               <i class="fa-group"></i>
           </div>
           <h3 class="mod-titulo">Usuarios
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
       <div class="modulo conf-acerca-de">
           <div class="mod-icono">
               <i class="fa-info-circle"></i>
           </div>
           <h3 class="mod-titulo">Acerca de TivoWare
               <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque magnam obcaecati consequatur pariatur fugiat incidunt cumque, deleniti ullam sit a aliquid, illo odit mollitia. Velit aspernatur veniam nemo ut.</a>
           </h3>
       </div>
       
   </div>
    
   <!-- Llamamos al archivo de funciones.js -->
   <script type="text/javascript" src="../js/funciones.js"></script>
    
</body>
</html>