<?php
include 'librerias.php';
session_start();

 if(isset($_SESSION["USR"])){
     header('Location: '.URL);
   exit;  
     
     
 }


?>

<html>
    <head>
        <title></title>
        
    </head>
    <body>
         <?php
        
        if(isset($_SESSION["USR"])){
        ?>
        <div><?php
       $oUsu=$_SESSION["USR"];
       echo $oUsu->nombre;
        ?>
        <a href="<?=URL?>controlador/cierrasession.php">Cerrar sesión</a>
        <?php }?>
        </div>
        
    </body>
    
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

