<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'header.php';

if(isset($_GET["week"]))
    {
        $week = $_GET["week"];
    }

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
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <?php echo "<li><a href='aanwezigen2.php?week={$week}'>Aanwezigen</a></li>" ?>
                    <li><a href="aanafmelden.php">Terug</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    <?php 
	function read_data($table,$row,$where1,$where2){
		$query = "SELECT $row FROM $table WHERE $where1 = '{$where2}'";
		if(!$resultaat = mysqli_query($connectie, $query) ) {
		    	$boodschap .=  "query\" $query\" mislukt!"; 
		} else{
			$boodschap .= "query gelukt";
		}
		while($rij = mysqli_fetch_array($resultaat)){
		  	return $rij[0];
		}
	}

	function aanwezig(){
		$sql = "UPDATE {$group} SET week{$week} = '0' WHERE naam='{$input1}'";
		if ($connectie->query($sql) === TRUE) {
		      	header("Refresh:0");
		} else {
		      	echo "Error updating record: " . $connectie->error;
		}
	}
	function afwezig(){
		$sql = "UPDATE {$group} SET week{$week} = '1' WHERE naam='{$input1}'";
		if ($connectie->query($sql) === TRUE) {
		      	header("Refresh:0");
		} else {
		      	echo "Error updating record: " . $connectie->error;
		}
	}
	debug_to_console(read_data($group.'_opkomst', 'opkomstbechrijving','regel',$week));
			
	$query = "SELECT opkomstbechrijving FROM {$group}_opkomst WHERE regel = '{$week}'";
	if(!$resultaat = mysqli_query($connectie, $query) ) {
		$boodschap .=  "query\" $query\" mislukt!"; 
	} else{
		$boodschap .= "query gelukt";
	}
	while($rij = mysqli_fetch_array($resultaat)){
		$course_description3 = nl2br($rij[0]);
		$bodytag = str_replace(";", ".", $course_description3);
		echo "<textarea class='textbox1 informatie' name='uitleg' rows='4' cols='50'>{$bodytag}</textarea>";
	}
	$query = "SELECT week{$week} FROM {$group} WHERE naam = '{$getal1}'";
			
	if(!$resultaat = mysqli_query($connectie, $query) ) {
		$boodschap .=  "query\" $query\" mislukt!"; 
	} else{
		$boodschap .= "query gelukt";
	}
	while($rij = mysqli_fetch_array($resultaat)){
		$course_description3 = nl2br($rij[0]);
		if ($course_description3 == "0") {
			$course_description3 = "Aanwezig";
		}else{
		  	$course_description3 = "Afwezig";
		}
		echo "<textarea class='textbox1 aanwezigheid' name='uitleg' rows='4' cols='50'>{$course_description3}</textarea>";
	}
	mysqli_close($connectie);
	echo "<form method='POST' action='volgendeopkomst3.php?week={$week}'>"; 
	echo "<input type='submit' class='myButton aanwezig' value='Aanwezig'>  ";
	echo "</form>";
	echo "<form method='POST' action='volgendeopkomst4.php?week={$week}'>"; 
	echo "<input type='submit' class='myButton afwezig' value='Afwezig'>  ";
	echo "</form>";
		?>    
	</form>
	<style type="text/css">
	</style>
    <section class="home">
    	
    </section>



</html>

