console.log("hola");
window.onload = function () {
console.log("hola");
    var boton = document.getElementsByClassName('submitlogin');
    boton[0].addEventListener('click', function () {
        console.log("te como el culo");
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
};
