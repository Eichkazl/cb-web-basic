<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>

    <h1><?php      
        print "willkommen"
    ?></h1>

    <p><?php      
    // als String
        print "255"
    ?></p>

    <p><?php    
    // als int  
        print 255
    ?></p>

    <p><?php 
    // als berechneter int     
        print 15*17 
    ?></p>

<?php
    $number1 = 11;
    $number2 = 3;

    print "<p>$number1</p>";
    print "<p>$number2</p>";
    $sum = $number1 + $number2; 
    print "<p>$sum</p>";
?> 

<?php
$line1 = "Die Donau ist ins Wasser g'falln,";
$line2 = "der Rheinstrom ist verbrannt,";
$line3 = "In Frankfurt ist ein SpaI passiert,";
$line4 = "der Geisbock hats erzählt";

print "<p>" . $line1 . "<br>" . $line2 . "<br>" . $line3 . "<br>" . $line4 . "<br>" . "</p>";

?> 

<?php 

$kunden = array();
$kunden[0]["KundenNR"] = 123;
$kunden[0]["Vorname"] = "Dominik";
$kunden[0]["Nachname"] = "Luger";
$kunden[1]["KundenNR"] = 895;
$kunden[1]["Vorname"] = "Manuel";
$kunden[1]["Nachname"] = "Foster";
$kunden[2]["KundenNR"] = 378;
$kunden[2]["Vorname"] = "Thomas";
$kunden[2]["Nachname"] = "Plasser";

foreach($kunden as $array) {
    print "<p>";
    foreach($array as $li => $entry) {
        print $li . ": " . $entry. 
        "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    }
    print "</p>";
}
?>

<?php 



?>


</body>

</html>