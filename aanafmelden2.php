
<?php 
include 'header.php';

if(isset($_GET["week"]))
    {
        $week = $_GET["week"];
    }
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
            <div class="logo" id='logoorganisatie'>
                <a href="#"><img name= "image" src="Streamlineicons-Streamline-Ux-Free-Ecology-globe.ico" alt="Italian Trulli" width="128" height="128"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#">Invalleiding aanvragen</a></li>
                    <li><a href="#">Opkomst ideën</a></li>
                    <?php echo "<li><a href='aanwezigen.php?week={$week}'>Aanwezigen</a></li>" ?>
                    <li><a href="aanafmelden.php">Terug</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php 
    echo "<form method='POST' action='aanafmelden3.php?week={$week}'>";
	function read_data($table,$row,$where1,$where2){
		$query = "SELECT $row FROM $table WHERE $where1 = '{$where2}'";

		  if(!$resultaat = mysqli_query($connectie, $query) ) {
		    $boodschap .=  "query\" $query\" mislukt!"; 
		  } else{
		    $boodschap .= "query gelukt";
		  }
		  
		  while($rij = mysqli_fetch_array($resultaat)){
		  	echo $rij[0];
		  }
	}
    ?>
		<input type="input" class="inputfield field1" placeholder="Dag" name="dag" required />
		<input type="input" class="inputfield field2" placeholder="Tijd" name="tijd" required />
		<input type="input" class="inputfield field3" placeholder="Activiteit" name="activiteit" required />
		<input type="input" class="inputfield field4" placeholder="Organisatoren" name="organisatoren" required />
		<input type="input" class="inputfield field5" placeholder="Opmerking" name="opmerking"/>
		<input type="submit" class="button button4">
		<?php
	    
		  	$query = "SELECT opkomstuitleg FROM ea757_opkomst WHERE regel = '{$week}'";

		  if(!$resultaat = mysqli_query($connectie, $query) ) {
		    $boodschap .=  "query\" $query\" mislukt!"; 
		  } else{
		    $boodschap .= "query gelukt";
		  }
		  
		  while($rij = mysqli_fetch_array($resultaat)){
		  	$course_description3 = nl2br($rij[0]);
		    echo "<textarea id='text1' class='opkomstinformatieinvullen' name='uitleg' rows='4' cols='50'>{$course_description3}</textarea>";
		  }

		  mysqli_close($connectie);

	    ?>           
	</form>
    <section class="home">
    </section>
</html>

