window.onload = function () {

var boton = document.getElementsByClassName('submitregistro');
boton[0].addEventListener('click', function () {

axios.get('crearusuarios.php', {
params: {
nombre: "aaaaaa", //document.getElementById('nomregistro'),
contra: "1234" //document.getElementById('contraregistro')
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
