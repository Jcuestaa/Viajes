<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="axio.js"></script>
    <title>Index</title>

</head>

<body>
    <div class="contenedor">

        <h3>REGISTRATE</h3>

        <form>
            <div class="contenedor-inputs">
                <input type="text" placeholder="Nombre" name="nomregistro" id="nomregistro">
                <input type="password" placeholder="Contraseña" name="contraregistro" id="contraregistro">
            </div>

        </form>
        <button type="submit" class="submitregistro" value="Resgistrarse">Registrar</button>
    </div>

    <div class="contenedor">

        <h3>LOGIN</h3>

        <form>
            <div class="contenedor-inputs">
                <input type="text" placeholder="Nombre" name="nomlogin" id="nomlogin">
                <input type="password" placeholder="Contraseña" name="contralogin" id="contralogin">
            </div>

        </form>
        <button type="submit" class="submitlogin" value="Iniciar Sesión">Login</button>
    </div>

    <div class="contenedor">

        <h3>SUBIR EXPERIENCIAS</h3>

        <form>
            <div class="contenedor-inputs">
                <input type="text" placeholder="titol" name="titol" id="titol">
                <input type="image" placeholder="img" name="imagen" id="imagen">
                <input type="text" placeholder="descrip" name="descripcion" id="descripcion">
<!--
                <input type="number" placeholder="cont_positiu" name="positivo" id="positivo">
                <input type="number" placeholder="cont_negatiu" name="negativo" id="negativo">
-->
                <select name="transporte" id="categorias">
                    <option value="1">Coche</option>
                    <option value="2">Avión</option>
                    <option value="3">Tren</option>

                </select>
            </div>

        </form>
        <button type="submit" class="submitsubex" value="Subir Experiencia">Subir experiencias</button>
    </div>

</body>

</html>
