/*** Función para mostrar/ocultar menu (en móviles): ***/
var display;
var cardMenu = document.getElementById("cardMenu");

function displayMenu() {          
    
    display = cardMenu.style.display;
  
    if (display == "block") {
        cardMenu.style.display = "none";
    } else {
        cardMenu.style.display = "block";     
    }
}



/*** Función para mostrar/ocultar herramientas inferiores dentro de módulos (en móviles): ***/

var contHerramientas = document.getElementById("cont-herramientas");
var iconOpcion = document.getElementById("icon-opciones");
var iconClose = document.getElementById("icon-close");
    
function mostrarHerramientas() {
    
    var herramientas = document.getElementById("herramientas");
    
    var alturaContenedor = contHerramientas.style.height;
    
    if(alturaContenedor == "140px"){
        cardMenu.style.display = "none";
        
        disminuyeHerramientas();
    } else { 
        cardMenu.style.display = "none";
        
        contHerramientas.style.height = "140px";
        iconOpcion.style.display = "none";
        iconClose.style.display = "block";
        
        resetEstilosBuscar();
    } 
}



/*** Función para mostrar/ocultar el campo buscador de la herramienta Buscar, dependiendo del Responsive: ***/

var tamano = document.getElementById("ventana");
var botonBuscar = document.getElementById("box-buscar");
var buscador = document.getElementById("buscar");

function mostrarBuscador(){
    tamano = window.innerWidth;
    
    var verBuscador = buscador.style.display;
    
    if(tamano < "950"){
        if(verBuscador == "block"){
            cardMenu.style.display = "none";
            
            disminuyeHerramientas();
            
            resetEstilosBuscar();
        } else {
            buscador.style.display = "block";
            
            botonBuscar.style.width = "37px";
            botonBuscar.style.height = "37px";
            botonBuscar.style.lineHeight = "37px";
            botonBuscar.style.boxShadow = "none";
            botonBuscar.style.marginLeft = "0";
            botonBuscar.style.marginRight = "0";
            botonBuscar.style.position = "absolute";
            botonBuscar.style.top = "-54px";
            botonBuscar.style.left = "94%";
        } 
    }
    
    if(tamano >= "950") {
        if(verBuscador == "block"){
            resetEstilosBuscar();
        } else {
            buscador.style.display = "block";
            buscador.style.width = "24%";
            buscador.style.height = "27px";
            buscador.style.position = "fixed";
            buscador.style.top = "70px";
            buscador.style.left = "60%";
            buscador.style.zIndex = "10";

            botonBuscar.style.width = "10%";
            botonBuscar.style.height = "30px";
            botonBuscar.style.lineHeight = "30px";
            botonBuscar.style.boxShadow = "none";
            botonBuscar.style.marginLeft = "0";
            botonBuscar.style.marginRight = "0";
            botonBuscar.style.position = "fixed";
            botonBuscar.style.top = "60px";
            botonBuscar.style.left = "85%";
        }
    }    
}



/* Cierra campo Buscar y disminuye altura de Herramientas al modificar tamaño de ventana: */

function tamanoVentana(){
    tamano = window.innerWidth;
    
    var verBuscador = buscador.style.display;
    
    if(tamano < "950"){
        disminuyeHerramientas();
    }
    
    if(tamano >= "950"){
        if(verBuscador == "block"){
            resetEstilosBuscar();
        }
    } 
}



/* Función que disminuye la altura de barra de herramientas en móviles: */
function disminuyeHerramientas(){
    contHerramientas.style.height = "70px";
    iconClose.style.display = "none";
    iconOpcion.style.display = "block";
}



/* Función que resetea estilos de Buscador y botón Buscar: */
function resetEstilosBuscar(){
    buscador.style.display = "none";
    buscador.style.width = "";
    buscador.style.height = "";
    buscador.style.position = "";
    buscador.style.top = "";
    buscador.style.left = "";
    buscador.style.zIndex = "";

    botonBuscar.style.width = "";
    botonBuscar.style.height = "";
    botonBuscar.style.lineHeight = "";
    botonBuscar.style.boxShadow = "";
    botonBuscar.style.marginLeft = "";
    botonBuscar.style.marginRight = "";
    botonBuscar.style.position = "";
    botonBuscar.style.top = "";
    botonBuscar.style.left = "";
}



/*** FUNCIONES PARA HOJA MODAL: ***/

var tituloModulo = document.getElementById("titulo-modulo");

var contenedorModal = document.getElementById("contenedor-modal");

var hojaModal = document.getElementById("hoja-modal");

var formNuevo = document.getElementById("nuevo-formulario");

var formModificar = document.getElementById("modificar-formulario");

var contenedorEliminar = document.getElementById("contenedor-eliminar");

var btnNuevo = document.getElementById("btn-nuevo");

var btnModificar = document.getElementById("btn-modificar");

var btnInformacion = document.getElementById("btn-info");

var btnEliminar = document.getElementById("btn-eliminar");

var informacion = document.getElementById("informacion");

var btnCancelar = document.getElementById("btn-cancelar");

var btnSubmit = document.getElementById("btn-submit");


/* Función nuevo formulario: */
function nuevoForm(){
    contenedorModal.style.display = "block";
    
    contenedorEliminar.style.display = "";
    
//    document.getElementById("contenedor-uno").style.display = "block";
    
    hojaModal.style.display = "block";
    
    tituloHojaModal(); 
    
    formModificar.style.display = "";
    
    informacion.style.display = "";
    
    formNuevo.style.display = "block";
    
    btnSubmit.style.display = "";
}

/* Función para título de hoja modal: */
function tituloHojaModal(){
    
    if(tituloModulo.innerHTML.includes("Categorías")){
        document.getElementById("titulo-modal").innerHTML = "Nueva Categoría:";
    } else if(tituloModulo.innerHTML.includes("Activos de Información")){
        document.getElementById("titulo-modal").innerHTML = "Nuevo Activo de Información:";
    }
    
    /*** Falta agregar más títulos ***/

}

/* Función modificar formulario: */
function modificarForm(){
    contenedorModal.style.display = "block";
    
    contenedorEliminar.style.display = "";
    
    hojaModal.style.display = "block";
    
    modificarTituloHoja();
    
    formNuevo.style.display = "none";
    
    informacion.style.display = "";
    
    formModificar.style.display = "block";
    
    btnSubmit.style.display = "";
}

/* Función para modificar título hoja modal: */
function modificarTituloHoja(){
    
    if(tituloModulo.innerHTML.includes("Categorías")){
        document.getElementById("titulo-modal").innerHTML = "Modificar Categoría:";
    } else if(tituloModulo.innerHTML.includes("Activos de Información")){
        document.getElementById("titulo-modal").innerHTML = "Modificar Activo de Información:";
    }
    
    /*** Falta agregar más títulos ***/
    
}

/* Función mostrar información: */
function mostrarInformacion(){
    contenedorModal.style.display = "block";
    
    hojaModal.style.display = "";
    
    contenedorEliminar.style.display = "";
    
    document.getElementById("titulo-modal").innerHTML = "Información:";
    
    formNuevo.style.display = "none";
    
    formModificar.style.display = "";
    
    informacion.style.display = "block";
    
    btnSubmit.style.display = "none";
}

/* Función popup eliminar elemento: */
function popUpEliminar(){
    contenedorModal.style.display = "block";
    
    hojaModal.style.display = "none";
    
    contenedorEliminar.style.display = "block";
}

/* Función para cancelar formulario: */
function cancelarForm(){
    contenedorModal.style.display = "none";
}


/* Función para cerrar modal cuando el usuario hace click fuera de él: */
window.onclick = function(event) {
    if (event.target == contenedorModal) {
        contenedorModal.style.display = "none";
    }
}


