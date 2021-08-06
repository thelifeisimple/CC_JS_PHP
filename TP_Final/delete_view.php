<?php
    require_once 'common.php';
    session_start();
    $_SESSION['usuario'];
    (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) ?$_SESSION['usuario']: '';
    $user= $_SESSION['usuario'];
    $user_array= getUserByMail($user);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar usuario</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" >
    <!-- library alertify -->
    <link rel="stylesheet" href="css/alertify.min.css">
    <link rel="stylesheet" href="css/themes/default.min.css">
    <!-- library boostrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
    <link rel="stylesheet" href="css/edit_user.css" />
     <!-- library alertify -->
     <script src="js/alertify.min.js"></script>
    
    <!-- importante mantener las librerias en este orden para que no rompa el js del button -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- data-Picker librerys -->
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    

   
</head>
<body>

    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>DD Eliminar Usuario</h3>
            <p class="blue-text">Darse de baja</p>
            <div class="card">
                <h5 class="text-center mb-4">Datos</h5>
                <form class="form-card" id="form_delete_user" name="form_delete_user" action="delete_user.php" method="POST" >             

                <!-- traer datos de sesion y ponerlos por php en el value -->
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nombre</label> <input type="text" id="fname" name="name" value="<?php echo (!empty($user_array[1]))? $user_array[1]:'';?>"></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Apellido</label> <input type="text" id="lname" name="lastName" value="<?php echo (!empty($user_array[2]))? $user_array[2]:'';?>" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email</label> <input type="text" id="email" name="email" value="<?php echo (!empty($user_array[3]))? $user_array[3]:''; ?>"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Password</label> <input type="password" id="mob" name="password" value="<?php echo (!empty($user_array[4]))? $user_array[4]:'';?>"> 
                        <label class="radio inline"> <input type="checkbox" onclick="showPassword()"> Mostrar contraseña</div></label>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Dia de nacimiento</label> <input type="text" id="datepicker" name="birth" class="form-control" value="<?php echo (!empty($user_array[6]))? $user_array[6]:''; ?>" /></div>
                        <div class="form-group col-sm-6 flex-column d-flex"><label class="form-control-label px-3" id="genero">Genero</label>
                        <div class="form-group">
                                                    <div class="maxl">
                                                        <label class="radio inline"> 
                                                            <input type="radio" name="gender" value="F" <?php echo ($user_array[5]=='F')?"checked":'';?>>
                                                            <span> Femenino </span> 
                                                        </label>
                                                        <label class="radio inline"> 
                                                            <input type="radio" name="gender" value="M" <?php echo ($user_array[5]=='M')?"checked":'';?>>
                                                            <span> Masculino </span> 
                                                        </label>
                                                        <label class="radio inline"> 
                                                            <input type="radio" name="gender" value="NB" <?php echo ($user_array[5]=='NB')?"checked":'';?>>
                                                            <span> No binario </span> 
                                                        </label>
                                                    </div>
                        
                    </div>
                    <!-- <div class="row justify-content-between text-left">
                        
                    </div> -->
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <input type="submit" class="btn-block btn-primary" value="Borrar mi usuario"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>

<!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script> -->
    
<script>
    $(function(){
        $("#datepicker").datepicker();

        $("#form_delete_user").validate(
        {	
            submitHandler : function(form) {
                alertify.confirm('Esta seguro de eliminar el usuario',
                function(){
                    form_delete_user.submit();			
                },
                function(){
                alertify.error('Cancel');
                window.location.href ='main.php';
                });
            }
        });
    });

    
    function showPassword() {
        var x = document.getElementById("mob");
            if (x.type === "password") {
                x.type = "text";
            } 
            else {
                x.type = "password";
               }
            };
    


</script>
