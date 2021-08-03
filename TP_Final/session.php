<?php

$email = $_POST['email'];
$password = $_POST['password'];

login($email, $password);


function login($email, $password){

    if (validateUser($email, $password)){
        
        //Validar más adelante metodo Session

        session_start();
        $_SESSION['usuario'] = $email;
        require_once 'main.php';
    }
    else{
        // alertify
        require_once 'register_view.php';
        echo "<script>
            alertify.error('su mail y/o password no son correcto o no existe, en caso de no estar registardo dese de alta.');
            </script>";
            
    }

}



function validateUser($email, $password){

    if(!empty($email) && !empty($password)){

        require_once "common.php";
        
        if(getMailAndPass($email, $password)){       
            return TRUE;
        }
       
    }
    else{

        echo "<script>
            alertify.error('su mail y/o password no son correcto o no existe, en caso de no estar registardo dese de alta.');
            </script>";

    //     echo "<div class='alert alert-danger' role='alert'>
    //     su mail y/o password no son correcto o no existe, en caso de no estar registardo dese de alta.
    //   </div>";
       
    }   

    return FALSE;
}


?>
