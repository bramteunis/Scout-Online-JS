<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'header.php';
if(isset($_GET["week"]))
    {
        $week = $_GET["week"];
    }
debug_to_console("6");
?>
<html>
<head>
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
		
</html>
