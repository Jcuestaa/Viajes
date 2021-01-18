window.onload= function(){
    var boton = document.getElementsByClassName('like');
    boton[0].addEventListener('click', function () {

        axios.get('./php/like.php', {
                params: {
                    id: document.getElementById('1').value

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


