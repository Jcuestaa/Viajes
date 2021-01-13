let datos = [];

            function pedirDatosServidor(){
                    let valor=document.getElementById("categoria").value;
                    console.log(valor)
                    axios.get('./experiencias.php', {
                    params: {
                    cat: valor
                    }
                })
                .then(function (response) {    
                    //ACTUALIZO LOS DATOS
                    datos=response.data;
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
            let htmlStr="";
            for (let index = 0; index < datos.length; index++) {
                const element = datos[index];
                htmlStr += `<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box" data-aos="fade-up">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <img src="assets/img/${datos[index].img}" alt="">
                            <h4>${datos[index].titol}</h4>
                            <p>
                            ${datos[index].descrip}
                            <button >${datos[index].cont_positiu}</button>
                            ${datos[index].cont_negatiu}
                            </p>
                            </div>
                            </div>`;
            }   

            document.getElementById("experiencias").innerHTML=htmlStr;
        }



        //CUANDO APRETO EL BOTON HAGO UNA LLAMADA A PHP
        document.getElementById("consulta").addEventListener("click", function(){
          pedirDatosServidor();
        });

