<?php

function execSql($sql){
    $conexion_bd_dd = mysqli_connect("localhost","root","","diaper_deals");
    $result = mysqli_query($conexion_bd_dd, $sql);
    return $result->num_rows;
}

function updSql($sql){
    $conexion_bd_dd = mysqli_connect("localhost","root","","diaper_deals");
    $result = mysqli_query($conexion_bd_dd, $sql);
    return $result;
}


function createUser($name,$last_name,$email, $password, $gender,$birth){
    $insert_user = updSql("INSERT INTO usuario (nom_usuario, apellido_usuario, email_usuario, pass_usuario, genero_usuario, fechaNaci_usuario) VALUE ('".$name."','".$last_name."','".$email."','".$password."','".$gender."','".$birth."')" );
    if($insert_user){
       echo"<script type='text/javascript' src='alertify.js'></script>";
       echo "<script type='text/javascript'>alertify.success('Success message');
       </script>";
        // echo "<div class='alert alert-success' role='alert'>
        // Su registro ha sido completado!
        // </div>";
        return TRUE;
    }
    else{
        echo "<div class='alert alert-danger' role='alert'>
            Su registro no ha sido completado intentelo nuevamente.
            </div>";
        return FALSE;    
    }
    
}

function getUserByName($name, $last_name){
    $result_name = execSql("SELECT * FROM usuario WHERE nom_usuario= '".$name."' AND apellido_usuario= '".$last_name."' LIMIT 1 ");
    if($result_name){
        return TRUE;
    }
    else{
        return FALSE;
    }
}

function getUserByMailBoolean($email){
    $result_email = execSql("SELECT * FROM usuario WHERE email_usuario= '".$email."' LIMIT 1 ");
    if($result_email){
        return TRUE;
    }
    else{
        return FALSE;
    }
}

function getUserByMail($email){
    $result_email = updSql("SELECT * FROM usuario WHERE email_usuario= '".$email."' LIMIT 1 ");       
    return(mysqli_fetch_array($result_email));
}

function getMailAndPass($email, $password){
    $result_user = execSql("SELECT * FROM usuario WHERE email_usuario= '".$email."' AND pass_usuario= '".$password."' LIMIT 1 ");
    if($result_user){
        return TRUE;
    }
    else{
        return FALSE;
    }
}

function updateByUser($name,$last_name,$email,$password,$gender,$birth){
    $update_user = updSql("UPDATE usuario SET nom_usuario='".$name."', apellido_usuario='".$last_name."', email_usuario='".$email."', pass_usuario='".$password."', genero_usuario='".$gender."', fechaNaci_usuario ='".$birth."'LIMIT 1 ");
    if(!empty($update_user)){
        return True;
    }
    else{ 
        echo"hubo un error"; //CRAER UN ALERTIFY
    }
}

function deleteUserByMail($email){
    $delete_user = updSql("DELETE FROM usuario WHERE email_usuario='".$email."' LIMIT 1");
    if(!empty($delete_user)){
        return True;
    }
    else{
        echo"hubo un error"; //CRAER UN ALERTIFY
    }


}


?>