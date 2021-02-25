<?php 
if(isset($_GET["group"]))
    {
        $group = $_GET["group"];
    }else{
    	header("Location: http://bramt.veluwscollege.net/scouting/cryptosoon/selectgroup.php");
    }

session_start();
$_SESSION['group'] = $group;


?>
<html lang="nl"><head>
	<title>Login scherm</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Streamlineicons-Streamline-Ux-Free-Ecology-globe.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form method="POST" action="homescreen4.php">
					
						<span class="login100-form-title">
							Leden Login
						</span>

						<div class="wrap-input100 validate-input" data-validate="Er is een grebruikersnaam nodig">
							<input class="input100" type="text" name="email" placeholder="Gebruikersnaam">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Er is een wachtwoord nodig">
							<input class="input100" type="password" name="pass" placeholder="Wachtwoord">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit" name="verstuur">
								Inloggen
							</button>
						</div>

						<div class="text-center p-t-12">
							
							<a class="txt2" href="#">
								Gebruikersnaam / Wachtwoord vergeten?
							</a>
						</div>

						<div class="text-center p-t-136">
							<a class="txt2" href="#">
								
								
							</a>
						</div>
					</form>
				
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<!--<script src="vendor/bootstrap/js/popper.js"></script>-->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$(".js-tilt").tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



</body></html>