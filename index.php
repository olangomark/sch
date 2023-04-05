<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - <?php include('dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <div class="login-box" style="background-color: rgba(255, 255, 255, 0.9); border-radius: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
  <div class="login-logo">
    <img src="./dist/img/logo.png" width="100px" height="110px" class="logo"> 
    <h4>EXAMINATION SCHEDULING SYSTEM</h4>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg" style="color: #555555;">Sign in to start your session</p>
    <form action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.8);">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.8);">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6 pull-right">
          <button type="reset" class="btn btn-block btn-flat" style="background-color: #dddddd; border-radius: 10px; color: #555555;">Clear</button>
        </div>
        <!-- /.col -->
        <div class="col-xs-6 pull-right">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" style="background-color: #3c8dbc; border-radius: 10px; color: #ffffff;" default>Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


      
           
   
<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
  <style>
	  body {
		  background: url("./dist/img/book.png") no-repeat center center fixed;
	  }
	  .login-box {
		  background: #fff;
		  opacity: 0.8;
	  }
	</style>
  </head>
</html>

