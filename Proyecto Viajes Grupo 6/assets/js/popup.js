window.onload=function(){
  let btnAbrirPopup= document.getElementById("login");
  let overlay = document.getElementById("overlay");
  let popup = document.getElementById("popup");
  let btncerrarPopup = document.getElementById("btn-cerrar-popup");

  let btnAbrirPopup2 = document.getElementById("registrar");
  let overlay2 = document.getElementById("overlay2");
  let popup2 = document.getElementById("popup2");
  let btncerrarPopup2 = document.getElementById("btn-cerrar-popup2");

  btnAbrirPopup2.addEventListener('click', function(){
      overlay2.classList.add('active');
      popup2.classList.add('active');
  });
  btncerrarPopup2.addEventListener('click', function(){
      overlay2.classList.remove('active');
      popup2.classList.remove('active');
  });

  btnAbrirPopup.addEventListener('click', function(){
      overlay.classList.add('active');
      popup.classList.add('active');
  });
  btncerrarPopup.addEventListener('click', function(){
      overlay.classList.remove('active');
      popup.classList.remove('active');
  });

};

