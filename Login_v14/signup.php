
<?php
include("connection.php");

$message="";

$userName=isset($_POST["username"])?$_POST["username"]:"";
$userEmail=isset($_POST["email"])?$_POST["email"]:"";
$userPass=isset($_POST["pass"])?$_POST["pass"]:"";
$userConPass=isset($_POST["Repass"])?$_POST["Repass"]:"";

if(isset($_POST["btn_reg"]))
{
	if(!empty($userEmail) && !empty($userPass))
	{
		$insert=$con->query("INSERT INTO `signup`(`username`, `email`, `password`, `con_pass`) VALUES ('$userName','$userEmail','$userPass','$userConPass')");
		if($insert)
		{
			$message="<b style='color:green'>Data Inserted Successfully</b>";
		}
		else
		{
			//$message="<b style='color:red'>Data Insert Unsuccessfull</b>";
		}
	}
	else
	{
		echo "<script>alert('Sorry !! Field is Empty')</script>";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


<script type="text/javascript">
	
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) 
  {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } 
  else 
  {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not matching';
  }
}
</script>
</head>
<body style="background-image: radial-gradient(circle, #e30047, #e52055, #e53263, #e54070, #e44d7c);background-attachment: fixed">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<?php echo $message;?><br>
					<span class="login100-form-title p-b-32">
						Register
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>


					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>





					<span class="txt1 p-b-11">
						Enter Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" >
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" id="password">
						<span class="focus-input100"></span>
					</div>




					
					<span class="txt1 p-b-11">
						Re-enter Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" >
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="Repass"  id="confirm_password"  onkeyup='check();' >
						 <span id='message'></span>
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">

						
						<button class="login100-form-btn" type="submit" name="btn_reg">
							Register
						</button>

					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>