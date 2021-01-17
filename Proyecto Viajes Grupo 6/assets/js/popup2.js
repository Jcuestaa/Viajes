window.onload=function(){
  let btnAbrirPopup2 = document.getElementById("registro");
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

};
