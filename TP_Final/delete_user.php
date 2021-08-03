<?php 
$email = $_POST['email'];

//require_once "header_shtml.php";
require_once "common.php";

deleteUser($email);

function deleteUser($email){
    
    deleteUserByMail($email);

    header("Location: http://localhost/php_codoacodo/TP_Final/main.php");
    die();
    
    echo "<script>
        alertify.success('su usuario se ha eliminado correctamente');
        </script>"; 

    

    //require_once "main.php";

    


    //if(!empty(deleteUserByMail($email))){

        //require_once "main.php";

        // echo "<script>
        // alertify.success('su usuario se ha eliminado correctamente');
        // </script>"; 

    //}

}

?>