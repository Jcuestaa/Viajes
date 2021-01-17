window.onload = function () {

    let btnAbrirPopup = document.getElementById("btn-abrir-popup2");
    let overlay = document.getElementById("overlay2");
    let popup = document.getElementById("popup2");
    let btncerrarPopup = document.getElementById("btn-cerrar-popup2");

    btnAbrirPopup.addEventListener('click', function () {
        overlay.style.display = "block";
    });

    btncerrarPopup.addEventListener('click', function () {
        overlay.style.display = "none";
    });
}
