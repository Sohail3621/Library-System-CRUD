<?php
$emailmsg="";
$pasdmsg="";
$msg="";

$ademailmsg="";
$adpasdmsg="";

if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
}

if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
}

if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
}

if(!empty($_REQUEST['pasmsg'])){
    $pasmsg=$_REQUEST['pasmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container login-container">
     <div class="row"><h3><?php echo $msg?></h3></div>
               <div class="row">
                  <div class="col-md-6 login-form-1">        >
                     <h3>Student Login</h3>
                     <form action="login_server_page.php" method="post">
              <p class="text-muted">Sign In to your account</p>
                         <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="email">
                         </div>
                         <Lable style="color:red">*<?php echo $emailmsg?></Lable>
              <div class="form-group">
                <input type="password" class="form-control" name="login_pasword" placeholder="Password" />
              </div>
              <Lable style="color:red">*<?php echo $pasdmsg?></Lable>
              <div class="form-group">
                <input type="submit" class="btnSubmit" value="Login" />
              </div>
              <div class="form-group">
                <a href="#" class="ForgetPwd">Forget Password?</a>
              </div>
              </form>
              </div>
              <div class="col-md-6 login-form-2">
              <h3>Admin Login</h3>
              <form action="loginadmin_server_page.php" method="post">
              <p class="text-muted">Sign In to your account</p>
              <div class="form-group">
                <input type="text" class="form-control" name="login_email" placeholder="email">
              </div>
              <Lable style="color:red">*<?php echo $ademailmsg?></Lable>
              <div class="form-group">
                <input type="password" class="form-control" name="login_pasword" placeholder="Password" />
              </div>
              <Lable style="color:red">*<?php echo $adpasdmsg?></Lable>
              <div class="form-group">
                <input type="submit" class="btnSubmit" value="Login" />
              </div>
              <div class="form-group">
                <a href="#" class="ForgetPwd">Forget Password?</a>
              </div>
</form>
</div>
</div>
</div>
       
        <script src="" async defer></script>
    </body>
</html>