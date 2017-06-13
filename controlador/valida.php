<?php

session_start();
include '../librerias.php';

$oUsuario=new Usuario($_REQUEST["nomusu"],$_REQUEST["claveusu"]);
if ($oUsuario->VerificaAcceso()) {
    echo 'Todo bien';
    $_SESSION["USR"]=$oUsuario;//validando al usuario inicial
}
 else {
    
    echo 'Todo Mal';
     
 }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

