<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TivoWare | Iniciar Sesión</title>
    <link rel="shortcut icon" type="image/x-icon" href="resources/images/logo.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script type="text/javascript" src="js/modernizr.js"></script>
</head>
<body>
  <!-- Cabecera: -->
   <header>
      <!-- Logotipo y nombre: -->
       <h1>
           <a href="index.php">
               <figure>
                    <img src="resources/images/logo.png" alt="" >
               </figure>
           </a>
           <a href="index.php">TivoWare</a>
       </h1>
           
   </header>
   
   <!-- FORMULARIO -->
   <div class="contenedor">
       <h2 class="titulo">Iniciar Sesión</h2>
       <div class="border"></div>
       
<!--       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">-->
          
     <form class="formulario" name="login" action="includes/home.php">
           <div class="form-group">
               <i class="icono izquierda fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
           </div>
           
           <div class="form-group">
               <i class="icono izquierda fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
           </div>
           
           <input type="submit" name="password-btn" class="password-btn" value="Ingresar">
           
            <!-- Si la variable $errores no está vacía, significa que hay errores, por lo que mostramos el error en pantalla: -->
          <!-- <?php if(!empty($errores)): ?>
               <div class="error">
                       <?php echo $errores; ?>
               </div>
           <?php endif; ?>-->
           
       </form>
      
    </div>
   
   <!--<section id="darkBg">
       <a href="includes/home.php">Iniciar Sesión</a>
   </section>-->
   

   <script>
       
   </script>
    
</body>
</html>