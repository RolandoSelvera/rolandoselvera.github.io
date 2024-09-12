function guardarAcuse(){   

    // Obtiene el valor del campo de texto y lo almacena en una variable:
    var codigoXml = document.getElementById("textarea1").value;

    //  Crea un objeto de tipo Blob, lo almacena en una variable:
    var textoABlob = new Blob([codigoXml], {type:'text/plain'});

    // Obtiene del campo el nombre del archivo con extensión XML y lo asigna a una variable:
    var nombreArchivo = document.getElementById("last_name").value.concat(".xml");
     
    // Crea un enlace de descarga (a):
    var enlaceDescarga = document.createElement("a");
    enlaceDescarga.download = nombreArchivo;

    // Enlace interno para descarga de archivo:
    enlaceDescarga.innerHTML = "Mi enlace interno";
        
    // Compatibilidad con ciertos navegadores:
    window.URL = window.URL || window.webkitURL;
              
    // Crea un enlace de descarga del objeto Blob:
    enlaceDescarga.href = window.URL.createObjectURL(textoABlob);

    // Llamada a evento si se desea descargar otro archivo:
    enlaceDescarga.onclick = destroyClickedElement;

    // Enlace oculto:
    enlaceDescarga.style.display = "none";

    // "Agrega" el enlace al DOM
    document.body.appendChild(enlaceDescarga);
        
    // Evento "click" para nuevo enlace:
    enlaceDescarga.click();
}
     
// Función para remover elemento al dar clic:
function destroyClickedElement(event){
    // remove the link from the DOM
    document.body.removeChild(event.target);
}