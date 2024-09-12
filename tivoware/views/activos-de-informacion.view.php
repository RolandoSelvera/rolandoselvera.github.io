<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Categorías</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../resources/images/logo.png">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <script type="text/javascript" src="../../js/modernizr.js">
    </script>
</head>
<body id="ventana" onResize="tamanoVentana()" >
  <!-- Cabecera: -->
   <header>
      <!-- Logotipo y nombre: -->
       <h1>
           <a href="../home.php">
               <figure>
                    <img src="../../resources/images/logo.png" alt="" >
               </figure>
           </a>
           <a href="../home.php">TivoWare</a>
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
                   <li><a href="../home.php">INICIO</a></li>
                   <li><a href="../reportes.php">REPORTES</a></li>
                   <li><a href="../configuracion.php">CONFIGURACION</a></li>
                   <li><a href="../../index.php">Cerrar Sesión</a></li>
               </ul>
           </div>
           
       </nav>
   </header>
   
   <!-- Categorías: -->
   <div class="contenedor-modulo">
      
       <!-- Título módulo: -->
       <div class="titulo-modulo titulo-activos-info">
           <h3 id="titulo-modulo"><i class="fa-windows"></i><i class="fa-database"></i><i class="fa-folder-open"></i>Activos de Información</h3>
       </div>
       
       <div  class="contenedor-tabla">
          <table>
               <tr class="tabla-activos-info">
                   <th><input class="check" type="checkbox"></th>
                   <th>Artículo</th>
                   <th>Licencia</th>
                   <th>Asignado a</th>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro animi aspernatur veniam itaque vero. Distinctio ratione consequuntur, dignissimos voluptatum aliquam nemo ducimus fugiat explicabo inventore id! Fugit sunt, consequatur distinctio.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum</td>
               </tr>
               <tr>
                   <td class="check"><input type="checkbox"></td>
                   <td>Lorem ipsum</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                   <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, sed. Reiciendis eos, omnis nostrum modi suscipit facere nisi cupiditate dolore commodi, temporibus harum laborum, nulla incidunt placeat aliquam est repudiandae.</td>
               </tr>
           </table>
       </div>
       
       <section class="paginacion">
           <ul>
             <!-- Establecemos cuándo el botón "Anterior" estará deshabilitado: -->
             
             <li class="disabled">&laquo;</li>
             
             <li class="disabled">&laquo;</li>
             
             <li class="disabled">&laquo;</li>
             
<!--
             <?php if($pagina == 1): ?>
                 <li class="disabled">&laquo;</li>
             <?php else: ?>
                 <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
             <?php endif; ?>
-->
             
             <!-- Ejecutamos un ciclo para mostrar las páginas: -->
            <!-- <?php
                 for($i = 1; $i <= $numeroPaginas; $i++){
                     if($pagina == $i){
                         echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                     } else{
                         echo "<li><a href='?pagina=$i'>$i</a></li>";
                     }
                 }
             ?>-->
             
             <!-- Establecemos cuándo el botón de "Siguiente" estará deshabilitado: -->
             
             <li class="disabled">&raquo;</li>
             
           <!--  <?php if($pagina == $numeroPaginas): ?>
                 <li class="disabled">&raquo;</li>
             <?php else: ?>
                 <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
             <?php endif; ?>-->
             
           </ul>
       </section>
       
   </div>
   
   <!-- Herramientas: -->
   <div class="contenedor-herramientas" id="cont-herramientas">
      
       <div class="box-opciones" id="box-opciones" onClick="mostrarHerramientas()">
             <i class="fa-th" id="icon-opciones"></i>
             <i class="fa-close" id="icon-close"></i>
       </div>
   
       <div class="herramientas" id="herramientas">
             <div id="btn-nuevo" class="box box-nuevo" onClick="nuevoForm()">
                 <i class="fa-plus-circle"></i>
                 <p class="texto-herramienta-lateral">Nuevo</p>
             </div>
             <div id="btn-modificar" class="box box-modificar" onClick="modificarForm()">
                 <i class="fa-edit"></i>
                 <p class="texto-herramienta-lateral">Modificar</p>
             </div>
             <div id="btn-info" class="box box-info" onClick="mostrarInformacion()">
                 <i class="fa-info-circle"></i>
                 <p class="texto-herramienta-lateral">Información</p>
             </div>
             <div id="btn-eliminar" class="box box-eliminar" onClick="popUpEliminar()">
                 <i class="fa-trash"></i>
                 <p class="texto-herramienta-lateral">Eliminar</p>
             </div>
             <div class="box box-alfabetico">
                 <i class="fa-sort-alpha-asc"></i>
                 <p class="texto-herramienta-superior">Ordenar</p>
             </div>
             <div class="box box-fecha">
                 <i class="fa-clock-o"></i>
                 <p class="texto-herramienta-superior">Fecha</p>
             </div>
             <div class="box box-buscar" id="box-buscar" onClick="mostrarBuscador()">
                 <i class="fa-search"></i>
                 <p class="texto-herramienta-superior">Buscar</p>
             </div>
             <input type="text" name="buscar" class="buscar" id="buscar" placeholder="Buscar">
         </div>
         
     </div>
   

    <!-- Contenedor Modal: -->
    <div id="contenedor-modal" class="contenedor-modal">
       
        <!-- Contenido de hoja modal: -->
        <div id="hoja-modal" class="hoja-modal">
           
            <!-- Título de hoja modal: -->
            <p id="titulo-modal" class="titulo-modal"></p>
            
            <!-- Formulario Nuevo: -->
            <form action="" id="nuevo-formulario" class="nuevo-formulario">
               
                <div id="contenedor-uno" class="contenedor-uno">
                    <input type="text" class="edit-texto-normal edit-info-activo" placeholder="Nombre del Artículo:">
                
                    <p class="texto-cursiva">Ej.: Software propietario, Base de Datos, Windows 10, etc.</p>
                
                    <input type="text" class="edit-texto-normal edit-num-licencia" placeholder="No. de Licencia:">
                
                    <p class="texto-normal">La licencia vence en:</p>
                    
                    <select name="" id="opcion-vigencia" class="opcion-vigencia">
                        <option value="">Seleccione la vigencia:</option>
                        <option value="">TRAER DE BD:</option>
                        <option value="1">1 año</option>
                        <option value="2">2 años</option>
                        <option value="5">5 años</option>
                        <option value="10">10 años</option>
                        <option value="15">15 años</option>
                        <option value="demo">Periodo de prueba</option>
                        <option value="sv">Sin vigencia</option>
                    </select>
                    
                    <p class="texto-normal">Fecha de Adquisición:</p>
                    
                    <input type="date" class="edit-texto-normal edit-fecha-adquirido">
                
                    <textarea class="edit-texto-grande edit-cat-notas" placeholder="Notas adicionales:"></textarea>
                </div>
                
            </form>
            
            <!-- Formulario Modificar: -->
            <form action="" id="modificar-formulario" class="modificar-formulario">
                <input type="text" class="edit-texto-normal edit-cat-nombre" placeholder="Traer de BD">
                
                <textarea class="edit-texto-grande edit-cat-notas" placeholder="Traer de BD"></textarea>
            </form>
            
            <p id="informacion" class="informacion">
                Traer con BD: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit odio tempore, quis quo id inventore ipsa deserunt labore dolore ratione dignissimos qui, laboriosam obcaecati maiores ad illum temporibus expedita incidunt.
                
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nostrum similique consequuntur numquam amet ipsam ab delectus omnis aliquid! Eum nisi distinctio provident, minima dolorum nam assumenda doloremque tempore. Ea.
                
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut tempore, vitae molestias voluptatum deleniti, illo, alias distinctio voluptate sunt explicabo assumenda doloremque iure praesentium ut dicta! At accusantium dolorem possimus!
            </p>
            
            <!-- Footer Modal: -->
            <div class="footer-modal">
                <div id="btn-cancelar" class="btn-cancelar" onClick="cancelarForm()">Cancelar</div>
                <input type="submit" class="btn-submit" id="btn-submit" name="btn-submit" value="Guardar">
            </div>
            
    </div>
   
    <!-- PopUp Eliminar: -->
    <div id="contenedor-eliminar" class="contenedor-eliminar">
        <p class="msj-eliminar">¿Desea eliminar permanentemente el elemento seleccionado?</p>
        <div class="btn-cancelar" id="btn-cancelar" onClick="cancelarForm()">Cancelar</div>
        <input type="submit" class="btn-submit" id="confirma-eliminar" name="confirma-eliminar" value="Eliminar">
    </div>
   
   
   <!-- Llamamos al archivo de funciones.js -->
   <script type="text/javascript" src="../../js/funciones.js"></script>
  
   
    
</body>
</html>