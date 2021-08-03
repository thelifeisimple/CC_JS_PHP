<?php
$name =$_POST['name'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_ctrl = $_POST['ctrlPassword'];
$gender = $_POST ['gender'];
$birth = $_POST['birth'];

require_once "common.php";
require_once "header_shtml.php";

register($name,$last_name,$email, $password, $password_ctrl, $gender,$birth);

//Esta funcion permite insertar un nuevo usuario despues de haber validado que esten correctos
// los valores ingresados


function register($name,$last_name,$email, $password, $password_ctrl, $gender,$birth){

    if(validateName($name, $last_name) && validatePass($password, $password_ctrl) && validateMail($email)){
       
        if (createUser($name,$last_name,$email, $password, $gender,$birth)){
        
            //mensaje alerta por artify ver porque me salen 2 
            echo "<script>
            alertify.success('Se ha registrado correctamente');
            </script>";
            
            require_once "autentication.php";
        }
        else{
            echo "<script>
            alertify.error('Tuvo un error');
            </script>";
        }
    }
}


function validateName($name, $last_name){
 
    if(!empty($name) && !empty($last_name)){        
        
        if(getUserByName($name, $last_name)){ 

            require_once "autentication.php";
            //validate con artify
            echo "<script>
            alertify.error('Su nombre y/o apellido existen, vuelva al login y en caso de olvidar su password solicitelo nuevamente.');
            </script>";  
            
            return FALSE;
        }   
    }
    else{

        echo "<script>
            alertify.error('Complete los campos');
            </script>";
    }   

    return TRUE;

}

function validatePass($password, $password_ctrl){

    if(!empty($password) && !empty($password_ctrl) && $password==$password_ctrl){
        return TRUE;
    }
    else{
        echo "<script>
            alertify.error('Su password no coincide o no ingreso datos, intentelo nuevamente.');
            </script>";    
        return FALSE;
    }
      
}


function validateMail($email){

    if(!empty($email)){
        
        if(getUserByMailBoolean($email)){  
            echo "<script>
            alertify.error('Su mail ya existe, pruebe nuevamente o vuelva al login y en caso de olvidar su password solicitelo nuevamente.');
            </script>";

            require_once "autentication.php";
            
            //Cambiar redireccionamiento
            //header('refresh: 5; url= http://localhost/php_codoacodo/TP_Final/autentication.php');
            return FALSE;
        }
       
    }
    else{

        echo "<script>
            alertify.error('No ha ingresado su mail');
            </script>";

            require_once "autentication.php";
            
        //header('refresh: 3; url= http://localhost/php_codoacodo/TP_Final/autentication.php');

    }   

    return TRUE;
}

function birthDate($birth){

    if(!empty($birth)){
        $change_format = DateTime::createFromFormat('m/d/Y', $birth);
        $birth = $change_format->format('Y-m-d');
        echo $birth;
        return TRUE;
    }
    else{

        echo "<script>
            alertify.error('No ha ingresado su fecha de nacimiento.'".$birth."'');
            </script>";

        header('refresh: 3; url= http://localhost/php_codoacodo/TP_Final/autentication.php');
        
        return FALSE;
    }

}


?>



