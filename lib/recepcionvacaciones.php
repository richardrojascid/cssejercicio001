<?php

include 'constantes.php';
include 'vacaciones';
if(isset ($_SESSION[$aVacaciones])){
    
}

echo"<pre>";
var _dump($_POST);
echo "</pre>";

if(isset($_SESSION["aVacaciones"])){
    $arrVacaciones=$_SESSION["aVacaciones"];
    
}

$arrVacaciones[]=$oVacaciones;