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

$Sortiment = array();
$Sortiment[0]["SortimentNR"] = 123;
$Sortiment[0]["Vorname"] = "Dominik";
$Sortiment[0]["Nachname"] = "Luger";
$Sortiment[1]["SortimentNR"] = 895;
$Sortiment[1]["Vorname"] = "Manuel";
$Sortiment[1]["Nachname"] = "Foster";
$Sortiment[2]["SortimentNR"] = 378;
$Sortiment[2]["Vorname"] = "Thomas";
$Sortiment[2]["Nachname"] = "Plasser";

foreach($Sortiment as $array) {
    print "<p>";
    foreach($array as $li => $entry) {
        print $li . ": " . $entry. 
        "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    }
    print "</p>";
}
?>

<?php 
$i = 0;

do {
    print $i;
    $i++;
} while ($i < 10);
print "<br>";
?>

<?php 
$i = 0;

while ($i < 10) {
    print $i;
    $i++;
};
print "<br>";
?>

<?php 
for ($i = 0; $i < 10; $i++) {
    print $i;
};
print "<br>";
?>

<?php 

$Sortiment = array();
$Sortiment[0]["Produkt"] = "Äpfel";
$Sortiment[0]["Preis"] = 0.33;
$Sortiment[0]["Sonderangebot"] = false;
$Sortiment[1]["Produkt"] = "Birnen";
$Sortiment[1]["Preis"] = 0.39;
$Sortiment[1]["Sonderangebot"] = true;
$Sortiment[2]["Produkt"] = "Tomaten";
$Sortiment[2]["Preis"] = 0.13;
$Sortiment[2]["Sonderangebot"] = false;
$Sortiment[3]["Produkt"] = "Zucchini";
$Sortiment[3]["Preis"] = 0.65;
$Sortiment[3]["Sonderangebot"] = true;

foreach($Sortiment as $array) {
    print "<p>";
    foreach($array as $li => $entry) {
        if ($li == "Sonderangebot") {
             if ($entry == true) {
                print "Achtung Sonderangebot!";
             }
        } else {
        print $li . ": " . $entry. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
        }
    }
    print "</p>";
}
?>

<?php 
include("functions.php");

$potenzen = array();
$zahl = rand(1,100);

$potenzen = potenzenBis10($zahl);

arrayOut($potenzen, $zahl);

$root = sqrt($zahl);
print "<br> Die Quadratwurzel von: "  . $zahl . " = " . $root;


print "<br><br><br><br>";
?>

<form name="form" method="get">
    <input type="number" name="number">
</form>

<?php

$handle = fopen('PHP1.txt', 'r');

$numbers = array();

if($handle) {
    $i = 0;
    while(!feof($handle)) {
        $j = fgets($handle);
        $numbers[$i] = $j;
        $i++;
    }
    fclose($handle);
}

$handle = fopen('PHP!.txt', 'w');

$numberinput = 1;
$numberinput = $_GET['number'];

if($handle) {
    for($i = 0; $i < sizeof($numbers) -1; $i++) {
        fputs($handle, (intval($numbers[$i]) * $numberinput . "\n"));
    }
    fclose($handle);
}

?>

</body>

</html>