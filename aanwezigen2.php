<?php 
if(isset($_GET["week"]))
    {
        $week = $_GET["week"];
    }
?>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
</head>
<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img name= "image" src="Streamlineicons-Streamline-Ux-Free-Ecology-globe.ico" alt="Italian Trulli" width="128" height="128"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <?php echo "<li><a href='volgendeopkomst2.php?week={$week}'>Terug</a></li>" ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php 
    	echo "<form method='POST' action='aanafmelden3.php?week={$week}'>";
	for ($j=1; $j < 100; $j++) { 
		$query = "SELECT week{$week} FROM {$group} WHERE gebruiker = 'gebruiker{$j}'";
		  if(!$resultaat = mysqli_query($connectie, $query) ) {
		    $boodschap .=  "query\" $query\" mislukt!"; 
		  } else{
		    $boodschap .= "query gelukt";
		  }
		  $i = $j - 1;
		  $rij2 = mysqli_fetch_array($resultaat);
		  if ($rij2[0] == "0") {
			$rij2[0] = "Aanwezig";
		  }else{
			$rij2[0] = "Afwezig";
		  }
		  $query = "SELECT naam FROM {$group} WHERE gebruiker = 'gebruiker{$j}'";
		  if(!$resultaat = mysqli_query($connectie, $query) ) {
		    $boodschap .=  "query\" $query\" mislukt!"; 
		  } else{
		    $boodschap .= "query gelukt";
		  }
		  $i = $j - 1;
		  $rij = mysqli_fetch_array($resultaat);
		  if($rij[0]==""){
		  	break;
		  }
		  $print3 = $rij[0]." = ".$rij2[0]."\n".$print3;
	}
	    echo "<textarea id='text1' name='uitleg' rows='4' cols='50'>{$print3}</textarea>";
	  mysqli_close($connectie);

	    ?>           
	</form>
	<style type="text/css">
	</style>
    <section class="home">
    	
    </section>
		
	    
		<style type="text/css">
			.button {
			  background-color: #4CAF50; /* Green */
			  border: none;
			  color: white;
			  padding: 16px 32px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 4px 2px;
			  transition-duration: 0.4s;
			  cursor: pointer;
			  right: 0%;
				    bottom: 0%;
				    /* width/2 */
				    position: absolute;
			}

			.button4{
			  background-color: white; 
			  color: black; 
			  border: 2px solid #4CAF50;
			  border-radius: 12px;
			}

			.button4:hover {
			  background-color: #4CAF50;
			  color: white;
			  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			}
			#text1{
					left: 35%;
				    top: 25%;
				    /* width/2 */
				    position: absolute;
				    width: 50%;
				  height: 50%;
				  padding: 12px 20px;
				  box-sizing: border-box;
				  border: 2px solid #ccc;
				  border-radius: 4px;
				  background-color: #f8f8f8;
				  resize: none;
				  opacity: 0.75;
				  font-size: 180%;
			}
			#name{
				position: absolute;
				width: 20%;
				left: 10%;
				top: 25%;
				color: #ffffff;
				border: 3px solid #ccc;
				padding: 12px 20px;
				  margin: 8px 0;
				  box-sizing: border-box;
				  outline: none;
				 background: transparent;
					transition: border-color 0.2s;
			}
			::placeholder {
			  color: white;
			  opacity: 1; /* Firefox */
			}
			#name:focus{
				color:#11998e;
				border: 3px solid #555;
				border-image: linear-gradient(to right, #11998e,#38ef7d);
					border-image-slice: 1;
			}

			#name2{
				position: absolute;
				width: 20%;
				left: 10%;
				top: 35%;
				color: #9b9b9b;
				border: 3px solid #ccc;
				padding: 12px 20px;
				  margin: 8px 0;
				  box-sizing: border-box;
				  outline: none;
				 background: transparent;
					transition: border-color 0.2s;
			}
			#name2:focus{
				color:#11998e;
				border: 3px solid #555;
				border-image: linear-gradient(to right, #11998e,#38ef7d);
					border-image-slice: 1;
			}

			#name3{
				position: absolute;
				width: 20%;
				left: 10%;
				top: 45%;
				color: #9b9b9b;
				border: 3px solid #ccc;
				padding: 12px 20px;
				  margin: 8px 0;
				  box-sizing: border-box;
				  outline: none;
				 background: transparent;
					transition: border-color 0.2s;
			}
			#name3:focus{
				color:#11998e;
				border: 3px solid #555;
				border-image: linear-gradient(to right, #11998e,#38ef7d);
					border-image-slice: 1;
			}

			#name4{
				position: absolute;
				width: 20%;
				left: 10%;
				top: 55%;
				color: #9b9b9b;
				border: 3px solid #ccc;
				padding: 12px 20px;
				  margin: 8px 0;
				  box-sizing: border-box;
				  outline: none;
				 background: transparent;
					transition: border-color 0.2s;
			}
			#name4:focus{
				color:#11998e;
				border: 3px solid #555;
				border-image: linear-gradient(to right, #11998e,#38ef7d);
					border-image-slice: 1;
			}

			#name5{
				position: absolute;
				width: 20%;
				left: 10%;
				top: 65%;
				color: #fff;
				border: 3px solid #ccc;
				padding: 12px 20px;
				  margin: 8px 0;
				  box-sizing: border-box;
				  outline: none;
				 background: transparent;
					transition: border-color 0.2s;
			}
			#name5:focus{
				color:#fff;
				border: 3px solid #555;
				border-image: linear-gradient(to right, #11998e,#38ef7d);
					border-image-slice: 1;
			}
			/* demo */
			body {
			  font-family: 'Poppins', sans-serif; 
			  display: flex;
			  flex-direction: column;
			  justify-content: center;
			  align-items: center;
			  min-height: 100vh;
			  font-size: 1.5rem;
			  background-color:#222222;
			}
		</style>

<!-- Jquery needed -->
    

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
        $('.navTrigger').click(function () {
		    $(this).toggleClass('active');
		    console.log("Clicked menu");
		    $("#mainListDiv").toggleClass("show_list");
		    $("#mainListDiv").fadeIn();

		});
    </script>
    <style type="text/css">
    	@import 
    	url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
		html,
		body {
		    margin: 0;
		    padding: 0;
		    box-sizing: border-box;
		    font-family: "Quicksand", sans-serif;
		    font-size: 62.5%;
		    font-size: 10px;
		}
		/*-- Inspiration taken from abdo steif -->
		/* --> https://codepen.io/abdosteif/pen/bRoyMb?editors=1100*/

		/* Navbar section */

		.nav {
		    width: 100%;
		    height: 65px;
		    position: fixed;
		    line-height: 65px;
		    text-align: center;
		    top:0%;
		}

		.nav div.logo {
		    float: left;
		    width: auto;
		    height: auto;
		    padding-left: 3rem;
		}

		.nav div.logo a {
		    text-decoration: none;
		    color: #fff;
		    font-size: 2.5rem;
		}

		.nav div.logo a:hover {
		    color: #00E676;
		}

		.nav div.main_list {
		    height: 65px;
		    float: right;
		}

		.nav div.main_list ul {
		    width: 100%;
		    height: 65px;
		    display: flex;
		    list-style: none;
		    margin: 0;
		    padding: 0;
		}

		.nav div.main_list ul li {
		    width: auto;
		    height: 65px;
		    padding: 0;
		    padding-right: 3rem;
		}

		.nav div.main_list ul li a {
		    text-decoration: none;
		    color: #fff;
		    line-height: 65px;
		    font-size: 2.4rem;
		}

		.nav div.main_list ul li a:hover {
		    color: #00E676;
		}


		/* Home section */

		.home {
		    width: 100%;
		    height: 100vh;
		    background-image: url(https://images.unsplash.com/photo-1498550744921-75f79806b8a7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b0f6908fa5e81286213c7211276e6b3d&auto=format&fit=crop&w=1500&q=80);
		    background-position: center top;
			background-size:cover;
		}

		.navTrigger {
		    display: none;
		}

		.nav {
		    padding-top: 20px;
		    padding-bottom: 20px;
		    -webkit-transition: all 0.4s ease;
		    transition: all 0.4s ease;
		}


		/* Media qurey section */

		@media screen and (min-width: 768px) and (max-width: 1024px) {
		    .container {
		        margin: 0;
		    }
		}

		@media screen and (max-width:768px) {
		    .navTrigger {
		        display: block;
		    }
		    .nav div.logo {
		        margin-left: 15px;
		    }
		    .nav div.main_list {
		        width: 100%;
		        height: 0;
		        overflow: hidden;
		    }
		    .nav div.show_list {
		        height: auto;
		        display: none;
		    }
		    .nav div.main_list ul {
		        flex-direction: column;
		        width: 100%;
		        height: 100vh;
		        right: 0;
		        left: 0;
		        bottom: 0;
		        background-color: #111;
		        /*same background color of navbar*/
		        background-position: center top;
		    }
		    .nav div.main_list ul li {
		        width: 100%;
		        text-align: right;
		    }
		    .nav div.main_list ul li a {
		        text-align: center;
		        width: 100%;
		        font-size: 3rem;
		        padding: 20px;
		    }
		    .nav div.media_button {
		        display: block;
		    }
		}


		/* Animation */
		/* Inspiration taken from Dicson https://codemyui.com/simple-hamburger-menu-x-mark-animation/ */

		.navTrigger {
		    cursor: pointer;
		    width: 30px;
		    height: 25px;
		    margin: auto;
		    position: absolute;
		    right: 30px;
		    top: 0;
		    bottom: 0;
		}

		.navTrigger i {
		    background-color: #fff;
		    border-radius: 2px;
		    content: '';
		    display: block;
		    width: 100%;
		    height: 4px;
		}

		.navTrigger i:nth-child(1) {
		    -webkit-animation: outT 0.8s backwards;
		    animation: outT 0.8s backwards;
		    -webkit-animation-direction: reverse;
		    animation-direction: reverse;
		}

		.navTrigger i:nth-child(2) {
		    margin: 5px 0;
		    -webkit-animation: outM 0.8s backwards;
		    animation: outM 0.8s backwards;
		    -webkit-animation-direction: reverse;
		    animation-direction: reverse;
		}

		.navTrigger i:nth-child(3) {
		    -webkit-animation: outBtm 0.8s backwards;
		    animation: outBtm 0.8s backwards;
		    -webkit-animation-direction: reverse;
		    animation-direction: reverse;
		}

		.navTrigger.active i:nth-child(1) {
		    -webkit-animation: inT 0.8s forwards;
		    animation: inT 0.8s forwards;
		}

		.navTrigger.active i:nth-child(2) {
		    -webkit-animation: inM 0.8s forwards;
		    animation: inM 0.8s forwards;
		}

		.navTrigger.active i:nth-child(3) {
		    -webkit-animation: inBtm 0.8s forwards;
		    animation: inBtm 0.8s forwards;
		}

		@-webkit-keyframes inM {
		    50% {
		        -webkit-transform: rotate(0deg);
		    }
		    100% {
		        -webkit-transform: rotate(45deg);
		    }
		}

		@keyframes inM {
		    50% {
		        transform: rotate(0deg);
		    }
		    100% {
		        transform: rotate(45deg);
		    }
		}

		@-webkit-keyframes outM {
		    50% {
		        -webkit-transform: rotate(0deg);
		    }
		    100% {
		        -webkit-transform: rotate(45deg);
		    }
		}

		@keyframes outM {
		    50% {
		        transform: rotate(0deg);
		    }
		    100% {
		        transform: rotate(45deg);
		    }
		}

		@-webkit-keyframes inT {
		    0% {
		        -webkit-transform: translateY(0px) rotate(0deg);
		    }
		    50% {
		        -webkit-transform: translateY(9px) rotate(0deg);
		    }
		    100% {
		        -webkit-transform: translateY(9px) rotate(135deg);
		    }
		}

		@keyframes inT {
		    0% {
		        transform: translateY(0px) rotate(0deg);
		    }
		    50% {
		        transform: translateY(9px) rotate(0deg);
		    }
		    100% {
		        transform: translateY(9px) rotate(135deg);
		    }
		}

		@-webkit-keyframes outT {
		    0% {
		        -webkit-transform: translateY(0px) rotate(0deg);
		    }
		    50% {
		        -webkit-transform: translateY(9px) rotate(0deg);
		    }
		    100% {
		        -webkit-transform: translateY(9px) rotate(135deg);
		    }
		}

		@keyframes outT {
		    0% {
		        transform: translateY(0px) rotate(0deg);
		    }
		    50% {
		        transform: translateY(9px) rotate(0deg);
		    }
		    100% {
		        transform: translateY(9px) rotate(135deg);
		    }
		}

		@-webkit-keyframes inBtm {
		    0% {
		        -webkit-transform: translateY(0px) rotate(0deg);
		    }
		    50% {
		        -webkit-transform: translateY(-9px) rotate(0deg);
		    }
		    100% {
		        -webkit-transform: translateY(-9px) rotate(135deg);
		    }
		}

		@keyframes inBtm {
		    0% {
		        transform: translateY(0px) rotate(0deg);
		    }
		    50% {
		        transform: translateY(-9px) rotate(0deg);
		    }
		    100% {
		        transform: translateY(-9px) rotate(135deg);
		    }
		}

		@-webkit-keyframes outBtm {
		    0% {
		        -webkit-transform: translateY(0px) rotate(0deg);
		    }
		    50% {
		        -webkit-transform: translateY(-9px) rotate(0deg);
		    }
		    100% {
		        -webkit-transform: translateY(-9px) rotate(135deg);
		    }
		}

		@keyframes outBtm {
		    0% {
		        transform: translateY(0px) rotate(0deg);
		    }
		    50% {
		        transform: translateY(-9px) rotate(0deg);
		    }
		    100% {
		        transform: translateY(-9px) rotate(135deg);
		    }
		}

		.affix {
		    padding: 0;
		    background-color: #111;
		}






		.myH2 {
			text-align:center;
			font-size: 4rem;
		}
		.myP {
			text-align: justify;
			padding-left:15%;
			padding-right:15%;
			font-size: 20px;
		}
		@media all and (max-width:700px){
			.myP {
				padding:2%;
			}
		}
    </style>

</html>
