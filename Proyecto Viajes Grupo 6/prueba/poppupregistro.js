window.onload = function () {

    let btnAbrirPopup = document.getElementById("btn-abrir-popup");
    let overlay = document.getElementById("overlay");
    let popup = document.getElementById("popup");
    let btncerrarPopup = document.getElementById("btn-cerrar-popup");

    btnAbrirPopup.addEventListener('click', function () {
        overlay.style.display = "block";
    });

    btncerrarPopup.addEventListener('click', function () {
        overlay.style.display = "none";
    });
}
