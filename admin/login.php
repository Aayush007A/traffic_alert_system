<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
 <style>
   body{
     background-image: url('<?php echo validate_image($_settings->info('cover')) ?>');
     background-size:cover;
     background-repeat:no-repeat;
   }
   .black{
	background-color:black;
   }
   .white{
	color:black;
   }
   .login-box{
      border:2px solid green;
	border-radius:2%;
   }
   h1{
	margin-top:-250px;
      font-size:50px;
   }
 </style>
<body class="hold-transition login-page ">
  <script>
    start_loader()
  </script>
  <h1 class="text-center pb-4 mb-4" style="color:#CCCCFF;" id="title"><?php echo $_settings->info('name') ?> - Admin Login</h1>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-primary white">
    <div class="card-body">
      <form id="login-frm" action="" method="post" class="white">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col">
            <a href="<?php echo base_url ?>">Go to Portal</a>
          </div>
          <!-- /.col -->
          <div class="col text-right">
            <button type="submit" class="btn btn-primary btn-flat btn-sm">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>