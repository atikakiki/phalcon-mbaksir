<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="../assets/image/ban1.png">
    <title>MbakSir | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="../assets/image/mbaksir_logo.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../assets/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../assets/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body style="background-color: #666666;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            <div class="login100-more" style="background-image: url(../assets/image/mbaksir_logo.png)">
            </div>
               <div class="login-form">
<form action="/dashboard/postlogin" method="post">
		<h2><center>Login</center></h2>
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>  
        <div class="form-group">
            <p>Pilih Role</p>
             <select id="role" name="role">
                <option value="Login Sebagai" selected disabled></option>>
              <option value="pegawai">Pegawai</option>
              <option value="pemilik">Pemilik</option>
            </select> 
        </div>       
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <div class="clearfix">
			<p class="text-center">Belum punya akun? <a href="/signup">Daftar disini</a></p>
        </div>  
    </form>
</div>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="../assets/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../assets/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="../assets/bootstrap/js/popper.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../assets/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../assets/daterangepicker/moment.min.js"></script>
    <script src="../assets/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="../assets/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../assets/js/main.js"></script>

</body>
</html>