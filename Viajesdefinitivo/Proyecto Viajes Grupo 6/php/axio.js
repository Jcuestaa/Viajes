window.onload = function () {

    let datos = [];

    function pedirDatosServidor() {
        let valor = document.getElementById("categoria").value;
        console.log(valor)
        axios.get('http://labs.iam.cat/~a19alvsildur/Viajesdefinitivo/Proyecto%20Viajes%20Grupo%206/experiencias.php', {
                params: {
                    cat: valor
                }
            })
            .then(function (response) {
                //ACTUALIZO LOS DATOS
                datos = response.data;
                console.log(datos);
                renderDatos();
            })
            .catch(function (error) {
                console.log(error);
            })
            .then(function () {
                // always executed
            });
    }


    function renderDatos() {
        console.log("PINTO LOS DATOS")
        console.log(datos)
        let htmlStr = "";
        for (let index = 0; index < datos.length; index++) {
            const element = datos[index];
            htmlStr += `<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box" data-aos="fade-up">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <img src="assets/img/${datos[index].img}" alt="">
                            <h4>${datos[index].titol}</h4>
                            <p>
                            ${datos[index].descrip}
                            </br>
                            <button class="like" id="${datos[index].id}"><img id="flike" src="./assets/img/like.jpg" height="30px" weight="30px">${datos[index].cont_positiu}</img></button> 
                            <button class="like" id="${datos[index].id}"><img id="fdislike" src="./assets/img/dislike.jpg" height="30px" weight="30px" >${datos[index].cont_negatiu}</img></button>
                            </p>
                            </div>
                            </div>`;
        }

        document.getElementById("experiencias").innerHTML = htmlStr;
    }



    //CUANDO APRETO EL BOTON HAGO UNA LLAMADA A PHP
    document.getElementById("consulta").addEventListener("click", function () {
        pedirDatosServidor();
    });


    let btnAbrirPopup = document.getElementById("login");
    let overlay = document.getElementById("overlay");
    let popup = document.getElementById("popup");
    let btncerrarPopup = document.getElementById("btn-cerrar-popup");

    let btnAbrirPopup2 = document.getElementById("registrar");
    let overlay2 = document.getElementById("overlay2");
    let popup2 = document.getElementById("popup2");
    let btncerrarPopup2 = document.getElementById("btn-cerrar-popup2");

    let btnAbrirPopup3 = document.getElementById("experiencia");
    let overlay3 = document.getElementById("overlay3");
    let popup3 = document.getElementById("popup3");
    let btncerrarPopup3 = document.getElementById("btn-cerrar-popup3");

    btnAbrirPopup3.addEventListener('click', function () {
        overlay3.classList.add('active');
        popup3.classList.add('active');
    });
    btncerrarPopup3.addEventListener('click', function () {
        overlay3.classList.remove('active');
        popup3.classList.remove('active');
    });

    btnAbrirPopup2.addEventListener('click', function () {
        overlay2.classList.add('active');
        popup2.classList.add('active');
    });
    btncerrarPopup2.addEventListener('click', function () {
        overlay2.classList.remove('active');
        popup2.classList.remove('active');
    });

    btnAbrirPopup.addEventListener('click', function () {
        overlay.classList.add('active');
        popup.classList.add('active');
    });
    btncerrarPopup.addEventListener('click', function () {
        overlay.classList.remove('active');
        popup.classList.remove('active');
    });



    var boton = document.getElementsByClassName('submitregistro');
    boton[0].addEventListener('click', function () {

        axios.get('http://labs.iam.cat/~a19alvsildur/Viajesdefinitivo/Proyecto%20Viajes%20Grupo%206/php/crearusuarios.php', {
                params: {
                    nombre: document.getElementById('nomregistro').value,
                    contra: document.getElementById('contraregistro').value
                }
            })
            .then(function (res) {
                if (res.status == 201) {

                }
            })
            .catch(function (err) {
                console.log(err);
            })
            .then(function () {

            })

    });


    var boton = document.getElementsByClassName('submitsubex');
    boton[0].addEventListener('click', function () {

        axios.get('http://labs.iam.cat/~a19alvsildur/Viajesdefinitivo/Proyecto%20Viajes%20Grupo%206/php/subirexp.php', {
                params: {
                    titulo: document.getElementById('titol').value,
                    imagen: document.getElementById('titol').value,
                    descripcion: document.getElementById('descripcion').value,
                    like_positivo: 0,
                    like_negativo: 0,
                    id_categoria: document.getElementById('categorias').value
                }
            })
            .then(function (res) {
                if (res.status == 201) {

                }
            })
            .catch(function (err) {
                console.log(err);
            })
            .then(function () {

            })

    });

    var boton = document.getElementsByClassName('submitlogin');
    boton[0].addEventListener('click', function () {
        axios.get('http://labs.iam.cat/~a19alvsildur/Viajesdefinitivo/Proyecto%20Viajes%20Grupo%206/php/login.php', {
                params: {
                    nombre: document.getElementById('nomlogin').value,
                    contra: document.getElementById('contralogin').value
                }
            })
            .then(function (res) {
                if (res.status == 201) {

                }
            })
            .catch(function (err) {
                console.log(err);
            })
            .then(function () {

            })
    });


}
