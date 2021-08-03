<?php
$name =$_POST['name'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST ['gender'];
$birth = $_POST['birth'];

require_once "common.php";

updateUser($name,$last_name,$email,$password,$gender,$birth);

function updateUser($name,$last_name,$email,$password,$gender,$birth){

    
    if(!empty(updateByUser($name,$last_name,$email,$password,$gender,$birth))){
        
        
        require_once "main.php";

        echo "<script>
        alertify.success('Se ha modificado correctamente');
        </script>";        
    }
    else{

        require_once "update_user.php";

        echo "<script>
            alertify.error('Complete los campos');
            </script>";

    }

}


?>