<?php

        
        //Recibe los datos del formulario.
$NombreyApellido=$_POST['Nombre y Apellido'];
$NúmerodeCelular=$_POST['Número de Celular'];
$CorreoElectrónico=$_POST['Correo Electrónico'];
$Nacionalidad=$_POST['Nacionalidad'];
$Contraseña=$_POST['Contraseña'];


   echo "Los datos son los siguientes:";
   echo "$NombreyApellido,$NúmerodeCelular,$CorreoElectrónico,$Nacionalidad y $Contraseña";

        $conectar=conn();//ejecuta las conecciones a la base de datos
        $sql="INSERT INTO mundo azul (Nombre y Apellido,Número de Celular,Correo Electrónico,Nacionalidad,Contraseña)
        VALUES ('$NombreyApellido','$NúmerodeCelular','$CorreoElectrónico','$Nacionalidad','$Contraseña')";
        $resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL- Error:".mysqli_error($conectar));

        echo "$sql";



?>