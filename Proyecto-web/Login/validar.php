<?php
$Usuario = $_POST['usuario'];
$Clave = $_POST['clave'];

//conectar a la base de datos
$conexion = mysqli_connect("localhost","root","","bdprueba");
$consulta = "SELECT * FROM usuarios WHERE usuarios='$Usuario' and clave='$Clave'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);

if($filas>0){
    //Redireccionar a otra pagina
    header("location:Formulario.html");
}
else{
    echo "Error en la autenticacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
