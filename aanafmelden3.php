<?php
session_start();
  $group = $_SESSION['group'];

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
  }


if($group == "beversochtend"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_b6ccf5347f986b7";
  $username = "b73badccc28509";
  $wachtwoord = "46e7ba9f";
}
if($group == "beversmiddag"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_f9c9ff2287354ae";
  $username = "b8a6ec5dd4f831";
  $wachtwoord = "26d0c1e2";
}
if($group == "sionihorde"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_6ddc7ca4fb6c487";
  $username = "bd261e04c4f7ac";
  $wachtwoord = "2646f655";
}
if($group == "mowglihorde"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_043cac3778e37ef";
  $username = "b53a91493bfae6";
  $wachtwoord = "b0c77f1c";
}
if($group == "shantihorde"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_3e38dc503c384ed";
  $username = "bcf0fc9752adca";
  $wachtwoord = "4433dfb8";
}


if($group == "gaaientroep"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_72bce5d900dc0c4";
  $username = "b20d36b9e64e9a";
  $wachtwoord = "592a9017";
}
if($group == "pmt"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_936cbdf524a261e";
  $username = "bbb1086e05f46c";
  $wachtwoord = "305a5102";
}
if($group == "ekerstroep"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_b6ccf5347f986b7";
  $username = "b73badccc28509";
  $wachtwoord = "46e7ba9f";
}
if($group == "ea757"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_1cb03cce5ef2216";
  $username = "b9af828f2f4586";
  $wachtwoord = "64cb70a1";
}
if($group == "ea595"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_4f770db4c2019e5";
  $username = "bfbf8c292bd780";
  $wachtwoord = "408b12a0";
}


if($group == "stam1"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_4e519908e65abd9";
  $username = "b4e6692218c8bb";
  $wachtwoord = "55c5369c";
}
if($group == "stam2"){
  $server = "eu-cdbr-west-03.cleardb.net";
  $database = "heroku_1112b001d39794d";
  $username = "be0d90306e78fd";
  $wachtwoord = "dd2610aa";
}




if(!$connectie = mysqli_connect($server,$username,$wachtwoord,$database) ) {
$boodschap = "Verbinding is mislukt, omdat:".mysqli_connect_error($connectie).
"met foutnummer:".mysqli_connect_errno($connectie);
} else{
$boodschap = "Verbinding is gelukt<br>";
}


session_start();
$getal1 = $_SESSION['email'] ;
$getal2 = $_SESSION['password'];
$a[] = $getal1;
$a[] = $getal2;

$query = "SELECT * FROM {$group}";

if(!$resultaat = mysqli_query($connectie, $query) ) {
$boodschap .=  "query\" $query\" mislukt!"; 
} else{
$boodschap .= "query gelukt";
}


while($rij = mysqli_fetch_array($resultaat)){
#echo "Naam = ".$getal1." ww = ".$getal2;
if ($getal1 == $rij[1]){
  if ($getal2 == $rij[2]) {
    $gevonden = "Gevonden";
    debug_to_console($gevonden);
    break;
  }else{
    $gevonden = "Niet Gevonden";
    debug_to_console($gevonden);
  }
}else{
  $gevonden = "Niet Gevonden";
  debug_to_console($gevonden);
}

}

if ($gevonden != "Gevonden") {
ob_start(); // ensures anything dumped out will be caught

// do stuff here
$url = 'http://bramt.veluwscollege.net/scouting/index.html'; 

// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}

// no redirect
header( "Location: $url" );
}


mysqli_close($connectie);
?>
<?php
  header("Location: http://bramt.veluwscollege.net/scouting/aanafmelden4.php");
  if($group == "beversochtend"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_b6ccf5347f986b7";
    $username = "b73badccc28509";
    $wachtwoord = "46e7ba9f";
  }
  if($group == "beversmiddag"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_f9c9ff2287354ae";
    $username = "b8a6ec5dd4f831";
    $wachtwoord = "26d0c1e2";
  }
  if($group == "sionihorde"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_6ddc7ca4fb6c487";
    $username = "bd261e04c4f7ac";
    $wachtwoord = "2646f655";
  }
  if($group == "mowglihorde"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_043cac3778e37ef";
    $username = "b53a91493bfae6";
    $wachtwoord = "b0c77f1c";
  }
  if($group == "shantihorde"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_3e38dc503c384ed";
    $username = "bcf0fc9752adca";
    $wachtwoord = "4433dfb8";
  }


  if($group == "gaaientroep"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_72bce5d900dc0c4";
    $username = "b20d36b9e64e9a";
    $wachtwoord = "592a9017";
  }
  if($group == "pmt"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_936cbdf524a261e";
    $username = "bbb1086e05f46c";
    $wachtwoord = "305a5102";
  }
  if($group == "ekerstroep"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_b6ccf5347f986b7";
    $username = "b73badccc28509";
    $wachtwoord = "46e7ba9f";
  }
  if($group == "ea757"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_1cb03cce5ef2216";
    $username = "b9af828f2f4586";
    $wachtwoord = "64cb70a1";
  }
  if($group == "ea595"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_4f770db4c2019e5";
    $username = "bfbf8c292bd780";
    $wachtwoord = "408b12a0";
  }


  if($group == "stam1"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_4e519908e65abd9";
    $username = "b4e6692218c8bb";
    $wachtwoord = "55c5369c";
  }
  if($group == "stam2"){
    $server = "eu-cdbr-west-03.cleardb.net";
    $database = "heroku_1112b001d39794d";
    $username = "be0d90306e78fd";
    $wachtwoord = "dd2610aa";
  }
  

  if(!$connectie = mysqli_connect($server,$username,$wachtwoord,$database) ) {
    $boodschap = "Verbinding is mislukt, omdat:".mysqli_connect_error($connectie).
    "met foutnummer:".mysqli_connect_errno($connectie);
  } else{
    $boodschap = "Verbinding is gelukt<br>";
  }

  $dag = $_POST["dag"];
  $tijd = $_POST["tijd"];
  $organisatoren = $_POST["organisatoren"];
  $activiteit = $_POST["activiteit"];
  $opmerking = $_POST["opmerking"];
  if(isset($_GET["week"]))
  {
      $week = $_GET["week"];
      echo "Week is: ".$week;
  }
  if(isset($_REQUEST['uitleg'])){
    $uitleg2 = nl2br($_POST["uitleg"]);
    $sql = "UPDATE {$group}_opkomst SET opkomstuitleg='{$uitleg2}' WHERE regel='{$week}'";
    if ($connectie->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $connectie->error;
    }
    $sql2 = "UPDATE {$group}_opkomst SET opkomstbechrijving='Hallo allemaal, <br />Deze week hebben we opkomst op {$dag}. <br />De opkomst duurt van ({$tijd}).<br />Tijdens deze opkomst gaan we {$activiteit}.<br />Zorg er voor dat je je op tijd hebt afgemeld,<br />zodat {$organisatoren} weten wie er aanwezig / afwezig zijn.{$opmerking}<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />' WHERE regel='{$week}'";
    
    if ($connectie->query($sql2) === TRUE) {
      echo "Record2 updated successfully";
    } else {
      echo "Error updating record2: " . $connectie->error;
    }
    $sql2 = "UPDATE {$group}_opkomst SET dag='{$dag}' WHERE regel='{$week}'";
    $sql3 = "UPDATE {$group}_opkomst SET tijd='{$tijd}' WHERE regel='{$week}'";
    $sql4 = "UPDATE {$group}_opkomst SET activiteit='{$activiteit}' WHERE regel='{$week}'";
    $sql5 = "UPDATE {$group}_opkomst SET organisatoren='{$organisatoren}' WHERE regel='{$week}'";
    $sql6 = "UPDATE {$group}_opkomst SET Opmerking='{$opmerking}' WHERE regel='{$week}'";
    if ($connectie->query($sql2) === TRUE && $connectie->query($sql3) === TRUE && $connectie->query($sql4) && $connectie->query($sql5) && $connectie->query($sql6)) {
      echo "Record2 updated successfully";
    } else {
      echo "Error updating record2: " . $connectie->error;
    }
    $line1 = strpos($uitleg2, "\n");
    $line8 = str_replace('<br />', PHP_EOL, $uitleg2);
    $course_description = nl2br($_POST["uitleg"]);
    $line9 = trim($course_description);
    if($line1 !== false){
    	for ($i=0; $i < 10; $i++) { 
    		if ($i == 0) {
    			$lines = substr($uitleg2, $i, $line1);
    			$lines2 = $lines.";";
    		}else{
          $line1 = 0;
    			$lines3 = $lines2.substr($uitleg2, $i, $line1).";";
    		}
    		
    	}
      
      echo "Line 1: ".$line1."<br>";
      echo "Line 8: ".$line8."<br>";
      $course_description2 = str_replace('\n', PHP_EOL, $course_description);
      echo "Course discription: <br>".$course_description2."<br>";
      echo "Line 9: ".$line9."<br>";

        
    } else {
        echo "Line 9: ".$line9."<br>";
        echo $uitleg2."raar"."<br>";
    }
    exit;
  }

  $uitleg3 = $lines2[0].";".$lines2[1].";".$lines2[2].";".$lines2[3].";";
  
  mysqli_close($connectie);
  
?>