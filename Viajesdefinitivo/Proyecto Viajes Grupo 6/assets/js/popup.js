window.onload=function(){
  let btnAbrirPopup= document.getElementById("login");
  let overlay = document.getElementById("overlay");
  let popup = document.getElementById("popup");
  let btncerrarPopup = document.getElementById("btn-cerrar-popup");

  let btnAbrirPopup2 = document.getElementById("registrar");
  let overlay2 = document.getElementById("overlay2");
  let popup2 = document.getElementById("popup2");
  let btncerrarPopup2 = document.getElementById("btn-cerrar-popup2");

  let btnAbrirPopup3= document.getElementById("experiencia");
  let overlay3 = document.getElementById("overlay3");
  let popup3 = document.getElementById("popup3");
  let btncerrarPopup3 = document.getElementById("btn-cerrar-popup3");

  btnAbrirPopup3.addEventListener('click', function(){
    overlay3.classList.add('active');
    popup3.classList.add('active');
});
btncerrarPopup3.addEventListener('click', function(){
    overlay3.classList.remove('active');
    popup3.classList.remove('active');
});

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
