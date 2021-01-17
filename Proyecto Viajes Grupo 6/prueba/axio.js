window.onload = function () {

    var boton = document.getElementsByClassName('submitregistro');
    boton[0].addEventListener('click', function () {

        axios.get('crearusuarios.php', {
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

        axios.get('http://labs.iam.cat/~a19alvsildur/prueba/subirexp.php', {
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
        axios.get('login.php', {
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
