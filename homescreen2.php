<a href="index.html"><strong>Uitloggen</strong></a>
<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
</head>
<body>

<?php 
	$server = "eu-cdbr-west-03.cleardb.net";
	$database = "heroku_1a727256584b6e8";
	$username = "ba806095039410";
	$wachtwoord = "f16318f1";
	

	if(!$connectie = mysqli_connect($server,$username,$wachtwoord,$database) ) {
		$boodschap = "Verbinding is mislukt, omdat:".mysqli_connect_error($connectie).
		"met foutnummer:".mysqli_connect_errno($connectie);
	}	else{
		$boodschap = "Verbinding is gelukt<br>";
	}

	$getal1 = $_POST["email"];
	$getal2 = $_POST["pass"];
	$a[] = $getal1;
	$a[] = $getal2;

	echo "Het gemiddelde is: {$getal1} {$getal2}";
	#Lezen van database
	$query = "SELECT * FROM ea757";

	if(!$resultaat = mysqli_query($connectie, $query) ) {
		$boodschap .=  "query\" $query\" mislukt!"; 
	} else{
		$boodschap .= "query gelukt";
	}
	
	
	while($rij = mysqli_fetch_array($resultaat)){
		if ($getal1 == $rij[1]){
			if ($getal2 == $rij[2]) {
				echo "Gebruiker gevonden en wachtwoord juist";
				echo '<table id = "customers">'; 
				echo "<tr> <th>Company</th> <th>Contact</th> <th>Country</th> </tr>";
				while($rij = mysqli_fetch_array($resultaat)){
					echo "<tr><td>".$rij[0]."<td>".$rij[1]."<td>".$rij[2]."<td>".$rij[3]."<td>".$rij[4]."<td>".$rij[5]."</br>";
				}
				echo "</table>";
			}else{
				echo "Gebruiker gevonden en wachtwoord onjuist";
			}
			pass;
		}else{
			echo "Gebruiker niet gevonden";
		}
		
	}

	

	mysqli_close($connectie);

	#Schrijven naar database
	
	
?>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</body>
</html>