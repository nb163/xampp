<?php
  require_once('./includes/db.php');
  require_once('./includes/common_functions.php');
  if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
      header('location:show_all_users.php');
  }

  pr($_POST);

#anuj@gmail.com' OR '1'='1

if(isset($_POST['sbmt']))
{
  if(isset($_POST['email']) && !empty($_POST['email']) &&
  isset($_POST['password']) && !empty($_POST['password']) ){

    $email = mysql_real_escape_string(trim($_POST['email']));
    $password = md5(trim($_POST['password']));

    $loginQuery = "SELECT * FROM `users` WHERE `email`='$email'
                  AND `password`='$password' AND `status`='1'";
    $loginResult = mysql_query($loginQuery) or die(mysql_error());

    if(mysql_num_rows($loginResult) == 1){
      echo "LOGIN SUCCESS :) ";
      $user = mysql_fetch_assoc($loginResult);
      pr1($user);

      $_SESSION['id'] = $user['id'];
      $_SESSION['name'] =$user['uname'];
      $_SESSION['email'] =$user['email'];
/**************************/
if(isset($_POST['remember'])){
  setcookie('email',$_POST['email'],time()+30);
  setcookie('password',$_POST['password'],time()+30);
} else {
  setcookie('email',$_POST['email'],time()-30);
  setcookie('password',$_POST['password'],time()-30);
}
/**************************/
      header('location:show_all_users.php');

    } else {
      echo "LOGIN FAIL :( ";
    }

    pr($loginQuery);

  } else {
   echo $msg = "Email / Password Required";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="email" value="<?=@$_COOKIE['email']?>" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password" value="<?=@$_COOKIE['password']?>" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" checked name="remember"  value="remember-me"> Remember me
        </label>
        <input class="btn btn-lg btn-primary btn-block" name="sbmt" value="Sign in" type="submit">
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
<?php
  echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
  echo getDebugLog();
  echo '</div>';
?>
