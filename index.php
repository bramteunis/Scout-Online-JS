<?php 
if(isset($_GET["group"]))
    {
        $group = $_GET["group"];
	ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
	ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 7);
	ini_set('session.save_path', 'sessions');	
	session_start();
	$_SESSION['group'] = $group;
    }else{
    	header("Location: selectgroup.php");
    }




?>
<html lang="nl"><head>
	<title>Login scherm</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Streamlineicons-Streamline-Ux-Free-Ecology-globe.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-awesome2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
					<img src="img-01.png" alt="IMG">
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
	<script src="jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<!--<script src="vendor/bootstrap/js/popper.js"></script>-->
	<script src="bootstrap3.min.js"></script>
<!--===============================================================================================-->
	<script src="select3.min.js"></script>
<!--===============================================================================================-->
	<script src="tilt.jquery.min.js"></script>
	<script>
		$(".js-tilt").tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="main.js"></script>

<?php  echo "<script>console.log('Debug Objects: " . $_SESSION['group'] . "' );</script>"; ?>
</body></html>
