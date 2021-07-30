<?php 

function potenzenBis10($wert) {
    $potenzen = array();
    for ($i = 0; $i <= 10; $i++) {
        $potenzen[$i] = $wert ** $i;
    }
    return $potenzen;
}

function arrayOut($array, $zahl) {
    foreach($array as $result => $entry) {
   
        print $zahl . "^" . $result . " = " . $entry. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
        
    }
    print "</p>";
}

?>