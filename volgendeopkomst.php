<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'header.php';
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>
<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img name= "image" src="Streamlineicons-Streamline-Ux-Free-Ecology-globe.ico" alt="Italian Trulli" width="128" height="128"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="aanafmelden.php">Aan/afmelden</a></li>
                    <li><a href="volgendeopkomst.php" style="color:green;"><b>Organisatie</b></a></li>
                    <li><a href="zoka.php">Zoka</a></li>
                    <li><a href="homescreen5.php">Terug</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    <div class="dropdown">
	    <button name= "mybutton" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">________Weken________
	    <span class="caret"></span></button>
	    <ul class="dropdown-menu">
	    	<?php
	    	
			$ddate = date("Y/m/d");
			$year = date("Y");
			$date = new DateTime($ddate);
			$week = $date->format("W");

			function getStartAndEndDate($week, $year) {
			  $dto = new DateTime();
			  $dto->setISODate($year, $week);
			  $ret['week_start'] = $dto->format('Y-m-d');
			  $dto->modify('+6 days');
			  $ret['week_end'] = $dto->format('Y-m-d');
			  return $ret;
			}
			
			
	    	for ($i=$week; $i < 54; $i++) { 
	    		$j = getStartAndEndDate($i,$year);
			
				$k = array_values($j)[0];
				$l = array_values($j)[1];
				$beginarray1 = explode("-",$k);
				$eindarray1 = explode("-",$l);
				$beginarray2 = array_values($beginarray1)[1];
				$eindarray2 = array_values($eindarray1)[1];
				$beginarray3 = array_values($beginarray1)[2];
				$eindarray3 = array_values($eindarray1)[2];
				
				if ($beginarray2 == "01") { 
					if ($eindarray2 == "02") {$beginarray4 = $beginarray3." Januari"." tot ".$eindarray3." Februari";}
					else{$beginarray4 = $beginarray3." Januari"." tot ".$eindarray3." Januari";}
				}
				elseif ($beginarray2 == "02") { 
					if ($eindarray2 == "03") {$beginarray4 = $beginarray3." Februari"." tot ".$eindarray3." Maart";}
					else{$beginarray4 = $beginarray3." Februari"." tot ".$eindarray3." Februari";}
				}
				elseif ($beginarray2 == "03") {
					if ($eindarray2 == "04") {$beginarray4 = $beginarray3." Maart"." tot ".$eindarray3." April";}
					else{$beginarray4 = $beginarray3." Maart"." tot ".$eindarray3." Maart";}
				}
				elseif ($beginarray2 == "04") { 
					if ($eindarray2 == "05") {$beginarray4 = $beginarray3." April"." tot ".$eindarray3." Mei";}
					else{$beginarray4 = $beginarray3." April"." tot ".$eindarray3." April";}
				}
				elseif ($beginarray2 == "05") { 
					if ($eindarray2 == "06") {$beginarray4 = $beginarray3." Mei"." tot ".$eindarray3." Juni";}
					else{$beginarray4 = $beginarray3." Mei"." tot ".$eindarray3." Mei";}
				}
				elseif ($beginarray2 == "06") { 
					if ($eindarray2 == "07") {$beginarray4 = $beginarray3." Juni"." tot ".$eindarray3." Juli";}
					else{$beginarray4 = $beginarray3." Juni"." tot ".$eindarray3." Juni";}
				}
				elseif ($beginarray2 == "07") { 
					if ($eindarray2 == "08") {$beginarray4 = $beginarray3." Juli"." tot ".$eindarray3." Augustus";}
					else{$beginarray4 = $beginarray3." Juli"." tot ".$eindarray3." Juli";}
				}
				elseif ($beginarray2 == "08") { 
					if ($eindarray2 == "09") {$beginarray4 = $beginarray3." Augustus"." tot ".$eindarray3." September";}
					else{$beginarray4 = $beginarray3." Augustus"." tot ".$eindarray3." Augustus";}
				}
				elseif ($beginarray2 == "09") { 
					if ($eindarray2 == "10") {$beginarray4 = $beginarray3." September"." tot ".$eindarray3." Oktober";}
					else{$beginarray4 = $beginarray3." September"." tot ".$eindarray3." September";}
				}
				elseif ($beginarray2 == "10") { 
					if ($eindarray2 == "11") {$beginarray4 = $beginarray3." Oktober"." tot ".$eindarray3." November";}
					else{$beginarray4 = $beginarray3." Oktober"." tot ".$eindarray3." Oktober";}
				}
				elseif ($beginarray2 == "11") { 
					if ($eindarray2 == "12") {$beginarray4 = $beginarray3." November"." tot ".$eindarray3." December";}
					else{$beginarray4 = $beginarray3." November"." tot ".$eindarray3." November";}
				}
				elseif ($beginarray2 == "12") { 
					if ($eindarray2 == "1") {$beginarray4 = $beginarray3." December"." tot ".$eindarray3." Januari";}
					else{$beginarray4 = $beginarray3." December"." tot ".$eindarray3." December";}
				}
	    		if($week == $i){
	    			session_start();
					  $_SESSION['email'] = $getal1;
					  $_SESSION['password'] = $getal2;
	    			echo "<li class='active'><a href='aanafmelden2.php?week={$i}'>{$beginarray4}</a></li>";
	    		}
	    		
	    		else{
	    			echo "<li><a href='aanafmelden2.php?week={$i}'>{$beginarray4}</a></li>";
	    		}
	    		
	    		if ($week >= 49 and $i == 53 and $value1 == 0) {
	    			for ($z=1; $z < 5; $z++) { 
			    		$year2 = $year + 1;
			    		$j = getStartAndEndDate($z,$year2);

		    			$k = array_values($j)[0];
						$l = array_values($j)[1];
						$beginarray1 = explode("-",$k);
						$eindarray1 = explode("-",$l);
						$beginarray2 = array_values($beginarray1)[1];
						$eindarray2 = array_values($eindarray1)[1];
						$beginarray3 = array_values($beginarray1)[2];
						$eindarray3 = array_values($eindarray1)[2];
						if ($beginarray2 == "01") { 
							if ($eindarray2 == "02") {$beginarray4 = $beginarray3." Januari"." tot ".$eindarray3." Februari";}
							else{$beginarray4 = $beginarray3." Januari"." tot ".$eindarray3." Januari";}
						}
						
			    		echo "<li><a href='aanafmelden2.php?week={$z}'>{$beginarray4}</a></li>";
			    		
					}
	    		}
	    	}
	    	
	    	
	    	?>
	      
	    </ul>
	  </div>
	
    <section class="home">
    </section>
</html>

