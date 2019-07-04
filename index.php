<?php

// Test gitpoda
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

    header("Location:portal.php");
    exit();

}

$col_div = '<div class="col-md-offest-2 col-md-8 col-md-offset-2"><p class="red">';
$end_div = '</p></div>';
$col_div_register  = '<div class="col-md-offest-1 col-md-10 col-md-offset-1"><p class="red">';

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

     <div id="container" class="container">
         <div class="row">
             <div class="col-sm-3"></div>


             <!-- Login Form -->
             <div class="col-sm-5">
                 <form action="login.php" method="post">
                    <div class="form-bg">

                    <!-- Logo -->
                    <div class="form-img kontener-img">
                        <img src="img/logo_footer.png" class="atelier-logo" alt="atelier">
                    </div>

                    <!-- Email -->
                    <?php

                     if( isset($_SESSION['email_error']) ) {

                         $error_email = $_SESSION['email_error'];
                         echo $col_div , $error_email , $end_div;
                         unset($_SESSION['email_error']);

                     }

                     ?>
                     <div class="form-group kontener">
                         <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                             <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Email">
                         </div>
                     </div>

                     <!-- Password -->
                     <?php

                     if( isset($_SESSION['password_error']) ) {

                         $error_password = $_SESSION['password_error'];
                         echo $col_div , $error_password , $end_div;
                         unset($_SESSION['password_error']);

                     }

                     ?>
                     <div class="form-group kontener">
                         <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                             <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
                         </div>
                     </div>

                     <!-- Submit Login -->
                     <div class="form-group-button kontener">
                        <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                         <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                         <input type="hidden" name="action" value="login_user">
                        <input type="submit" class="btn btn-primary form-control" value="Zaloguj się">
                        </div>
                      </div>

                      <!-- Register Link -->
                      <div class="form-group kontener ">
                         <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                            <span>Nie masz jeszcze konta? </span>
                            <a href="register_form.php">
                              Zarejestruj się...
                            </a>
                         </div>
                      </div>
                   </div><!-- end <form action="zalogowany.php" method="post"> -->
                 </form> <!-- end <div class="form-bg"> -->

             </div>
             <div class="col-sm-4"></div>
         </div>
     </div>

</body>
</html>