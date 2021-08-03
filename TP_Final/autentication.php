<!DOCTYPE html>
<html lang="en">
<!-- <script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/prompt.js"></script>
<script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/runScript.js"></script> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DD login</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/alertify.min.css">
    <link rel="stylesheet" href="css/themes/default.min.css">

    <link rel="stylesheet" href="css/signin.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

    <script src="js/alertify.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    
</head>
<body class="text-center" style="text-align: center">
      <div class="container login">
        <div class="row">
          <main class="form-signin">
          <div class="alert alert-danger" hidden role="alert" id="mensaje"></div>

            <form action = "session.php" method ="POST">
              <img class="mb-4" src="img/dd.jpg" alt="" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal" >Bienvenido a DD DiperDeals</h1>
          
              <div class="form-floating" >
                <label for="floatingInput">Ingrese su Email</label>
                <input type="email" class="form-control" name="email" id="email" required="required" placeholder="name@example.com">
              </div>
            
              <div class="form-floating">
                <label for="floatingPassword">Ingrese su Password</label>
                <input type="password" class="form-control" name="password" id="password" required="required" placeholder="Password">
              </div>

              <div class="input-group mb-3">
              <label class="radio inline"> <input type="checkbox" id="check-box" onclick="showPassword()" style ="color: #fff;"> Mostrar contraseña</div></label>
              </div>

              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              
                <button class="w-10 btn btn-lg btn-outline-light" type="submit">Sign in</button>          
              <div>
                <br>
                <a href="register_view.php">Registrarse</a>
                <br>
                <a href="">¿Olvidaste tu contraseña?</a>
              </div>
              
              <p class="mt-5 mb-3 text-muted">DD</p>
            </form>
          </main>
        </div>  
      </div>        
 
</body>
</html>
<script>

  function showPassword() {
      var x = document.getElementById("password");
          if (x.type === "password") {
              x.type = "text";
          } 
          else {
              x.type = "password";
              }
          }

</script>