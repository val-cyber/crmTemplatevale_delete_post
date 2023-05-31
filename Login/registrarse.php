<?php

if(isset($_POST['registrarse'])){
    require_once("RegistroUser.php");

    $registrar= new RegistroUser();

    $registrar-> setIdCamper(4);
    $registrar-> setEmail($_POST['email']);
    $registrar->setUsername($_POST['userName']);
    $registrar->setPassword($_POST['password']);
    

    /* $registrar-> insertData();

    echo "<script> alert('El usuario fue guardado satisfactoriamente'); document.location='loginRegister.php'</script>"; */

    if($registrar->checkUser($_POST['email'])){
        echo "<script> alert('El usuario ya existe por favor logueate'); document.location='loginRegister.php'</script>"; 

    }else{
        $registrar-> insertData();
        echo "<script> alert('usuario registrado Bienvenido!'); document.location='../Home/home.php'</script>"; 

    }
}







?>