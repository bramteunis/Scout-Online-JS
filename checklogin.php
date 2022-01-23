<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$getal1 = $_POST["email"];
$getal2 = $_POST["pass"];
$getal5 = str_replace('ë', 'e', $getal1);
$getal3 = strtolower($getal5);
$getal4 = ucfirst($getal5);

$a[] = $getal1;
$a[] = $getal2;
setcookie("email", $getal5, time() + (86400 * 30), "/");
setcookie("password", $getal2, time() + (86400 * 30), "/");


  $query = "SELECT * FROM {$group}";

  if(!$resultaat = mysqli_query($connectie, $query) ) {
    $boodschap .=  "query\" $query\" mislukt!"; 
  } else{
    $boodschap .= "query gelukt";
  }
  
  
  while($rij = mysqli_fetch_array($resultaat)){
    #echo "Naam = ".$getal1." ww = ".$getal2;
    if ($getal1 == $rij[1] or $getal3 == $rij[1] or $getal4 == $rij[1]){
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
    $url = 'selectgroup.php'; 
    while (ob_get_status()) 
    {
        ob_end_clean();
    }
    echo '<meta http-equiv="refresh" content="0; url=selectgroup.php" />';
   //header( "Location: $url" );    
  }else{
  echo '<meta http-equiv="refresh" content="0; url=homescreen4.php" />';
  }
?>
