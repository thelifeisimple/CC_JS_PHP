<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" >
    <link rel="stylesheet" href="css/alertify.min.css">
    <link rel="stylesheet" href="css/themes/default.min.css">
    <link rel="stylesheet" href="css/register.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

    <!-- importante mantener las librerias en este orden para que no rompa el js del button -->
    <script src="js/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- data-Picker librerys -->
    <!-- Bootstrap Date-Picker Plugin --> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>
<body>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="img/dd.jpg" alt="logo"/>
                        <h3>DD DiperDeals</h3>
                        <p>Un nuevo mundo de la economía para padres</p>
                        <input type="button" onclick="autentica()" name="" value="Login"/><br/>

                    </div>
                    <form action="register.php" method='POST'>
                        <div class="col-md-12 register-right">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Registrtate</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <!-- <span class="text-danger"> *</span> incluir label y esto -->
                                                <input type="text" class="form-control" name="name" required="required" placeholder="Nombre del bebé o Adulto *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="lastName" required="required" placeholder="Apellido*" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password" required="required" placeholder="Password *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="ctrlPassword" required="required" placeholder="Confirma tu Password *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <div class="maxl" >
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="F" checked>
                                                        <span> Femenino </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="M">
                                                        <span> Masculino </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="NB">
                                                        <span> No binario </span> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" required="required" placeholder="Tu Email *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="datepicker" name="birth" class="form-control" placeholder="dd/mm/aaa"  value="" />
                                            </div>
                                            <!-- <div class="form-group">
                                                <select class="form-control">
                                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                    <option>What is your Birthdate?</option>
                                                    <option>What is Your old Phone Number</option>
                                                    <option>What is your Pet Name?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                            </div> -->
                                            <input type="submit" class="btnRegister"  value="Enviar"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>    
                </div>

            </div>                      
                        
</body>
</html>
<script>
    $(function(){
        $("#datepicker").datepicker();
    });
</script>
<script language='javascript'> 
function autentica(){
window.location.href='http://localhost/php_codoacodo/TP_Final/autentication.php';
}
</script>
