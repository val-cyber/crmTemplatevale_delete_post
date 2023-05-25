<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
require_once("config.php");
$record = new Config();

if(isset($_GET['id']) && isset($_GET['req'])){
    if ($_GET['req'] == "delete"){
        $record -> setId($_GET['id']);
        $record -> delete();
        echo "<script> alert('dato borrado satisfactoriamente');document.location='estudiantes.php'</script>";
    }
}

?>