<?php
       include 'librerias.php';
       session_start();
        ?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <body>
        <?php
        // put your code here
        if(!isset($_SESSION["USR"])){
        ?>
        <form action="<?=URL?>/controlador/valida.php" method="post">
            <div><label>Nombre</label><input id="nomusu" type="text" name="nomusu"></div>
            <div><label>Clave</label><input id="claveusu" type="password" name="claveusu"></div>
            <input id="enviar" type="button" value="Acceder">
            <div id="msjweb" ></div>
            </form>
        <?php
        }
        else{
        ?>
        <a href="<?=URL?>/controlador/cierrasession.php"> Cerrar Sesion</a>
       <?php
        }
        ?>
        
     
    </body>
    <script type="text/javascript" >
      $(document).ready(function(){
          
            $("#enviar").click(function(){
                
                 if ($("#nomusu").val()==""||$("#calveusu").val()=="") {
                       alert("Debe agregar un usuario y clave");
                    }
                    else{
                        $.ajax({url:"<?=URL?>/controlador/valida.php"
                                ,type:"post"
                                ,data:{'nomusu':$("#nomusu").val(),
                                        'claveusu':$("#claveusu").val()}
                                    ,success:function(resweb){
                                        $('#msjweb').html(resweb);
                                        
                                    }
                                    }
                              
                    );//cierre ajax
                        //prueba
                        
                    }
                                
                
            });//clic del boton 
            
            });//Ready del document
      
      </script>
</html>
