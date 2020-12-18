window.onload=function(){
  let btnAbrirPopup = document.getElementById("login");
  let overlay = document.getElementById("overlay");
  let popup = document.getElementById("popup");
  let btncerrarPopup = document.getElementById("btn-cerrar-popup");

  btnAbrirPopup.addEventListener('click', function(){
      overlay.classList.add('active');
      popup.classList.add('active');
  });
  btncerrarPopup.addEventListener('click', function(){
      overlay.classList.remove('active');
      popup.classList.remove('active');
  });

};
