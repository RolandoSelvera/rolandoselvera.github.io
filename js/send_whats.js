function enviarMensaje() {
    var numero = document.getElementById('textarea1').value;
    var texto = document.getElementById('textarea2').value;
    window.open("https://wa.me/521" + numero + "?text=" + texto);
}