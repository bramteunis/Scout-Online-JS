<html lang="nl">
  <body>
    <meta charset="UTF-8" />
  <?php 
	  echo "test";
  function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
  }

session_start();
$group = $_SESSION['group'];
debug_to_console($group);
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
    debug_to_console($boodschap);
  } else{
    $boodschap = "Verbinding is gelukt<br>";
    debug_to_console($boodschap);
  }

 
 $oudgebruiker =  $_SESSION['oudgebruiker'];
 $oudwachtwoord =  $_SESSION['oudwachtwoord'];

  $nieuwgebruiker = $_POST["username"];
  $nieuwwachtwoord = $_POST["pass"];
  $getal5 = str_replace('ë', 'e', $nieuwgebruiker);
  $getal3 = strtolower($getal5);
  $getal4 = ucfirst($getal5);
	  
  $a[] = $nieuwgebruiker;
  $a[] = $nieuwwachtwoord;
  $_SESSION['email'] = $nieuwgebruiker;
  $_SESSION['password'] = $nieuwwachtwoord;
  
 
        
	  $query = "UPDATE {$group} SET naam='{$nieuwgebruiker}' WHERE naam='{$oudgebruiker}'  ";

  if(!$resultaat = mysqli_query($connectie, $query) ) {
    $boodschap .=  "query\" $query\" mislukt!"; 
  } else{
    $boodschap .= "query gelukt";
  }
	  
	    $query = "UPDATE {$group} SET wachtwoord='{$nieuwwachtwoord}' WHERE wachtwoord='{$oudwachtwoord}' ";

  if(!$resultaat = mysqli_query($connectie, $query) ) {
    $boodschap .=  "query\" $query\" mislukt!"; 
  } else{
    $boodschap .= "query gelukt";
  }
	  
  mysqli_close($connectie);

	  
	  
	  
  ob_start(); // ensures anything dumped out will be caught

// do stuff here
$url = 'homescreen4.php'; 

// clear out the output buffer
while (ob_get_status()) 
{
ob_end_clean();
}

// no redirect
header( "Location: $url" );    


  
?>
</body>
</html>
