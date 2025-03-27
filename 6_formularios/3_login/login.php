<?php
//var_dump($_POST);

// comprobar si los valores recibidos del formulario coinciden con los siguientes:
$user = 'admin';
$password = '$uper$ecr3t';
$user_index=$_POST["user"];
$pass_index=$_POST["password"];
var_dump($user_index,$pass_index);

if($user_index==$user && $pass_index==$password){
    header("Location:bienvenida.php?user=$_POST[user]");
}else{
    header("Location:error.html");
}

// si coinciden, redirigir a la página de bienvenida
// sino, redirigir a la página de error
// pista: la función header('Location: nombre_del_fichero.extension') sirve para redirigir
if ($user ===  $_POST['user'] && $password ===  $_POST['password']) {
    header("Location: bienvenida.php?user=" . $_POST['user']);
} else {
    header('Location: error.html');
}
