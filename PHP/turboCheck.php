
<?php

$Tricks = array();
$Tricks[0]["Vorname"] = "Fritz";
$Tricks[0]["Nachname"] = "Phantom";
$Tricks[0]["Alter"] = 70;

$Tricks[1]["Vorname"] = "Lilo";
$Tricks[1]["Nachname"] = "Knickerbocker";
$Tricks[1]["Alter"] = 37;

$Tricks[2]["Vorname"] = "Thomas";
$Tricks[2]["Nachname"] = "Breziner";
$Tricks[2]["Alter"] = 58;

$Tricks[3]["Vorname"] = "Tom";
$Tricks[3]["Nachname"] = "Turbo";
$Tricks[3]["Alter"] = 27;

for($i = 0; $i < sizeof($Tricks); $i++) {
    print "<p>";
        print $Tricks[$i]["Vorname"] . " " . 
              $Tricks[$i]["Nachname"] . 
              " (" . $Tricks[$i]["Alter"] . ")<br>";
    print "</p>";
}

echo "\n\n";

$ColorArray = array();
$ColorArray["Fritz"] = "Lila";
$ColorArray["Lilo"] = "Orange";
$ColorArray["Thomas"] = "Gelb";
$ColorArray["Tom"] = "Rot";

print "<p>";
foreach($ColorArray as $li => $entry) {
    print $li . ": " . $entry. "<br>";
}
print "</p>";

echo "\n\n";

$tom_mag= array('Schmieröl', 'DeBreziner' , 'Essiggurkerl'); 
$tricks= array(6, 89, 23, 1, 7, 8, 19); 

asort($tom_mag);
print "<p>";
foreach($tom_mag as $entry) {
    print $entry . "<br>";
}
print "</p>";

echo "\n";

arsort($tricks);
print "<p>";
foreach($tricks as $entry) {
    print $entry . "<br>";
}
print "</p>";

echo "\n";

ksort($ColorArray);
print "<p>";
foreach($ColorArray as $li => $entry) {
    print $li . ": " . $entry. "<br>";
}
print "</p>";

echo "\n";

arsort($ColorArray);
print "<p>";
foreach($ColorArray as $li => $entry) {
    print $li . ": " . $entry. "<br>";
}
print "</p>";

echo "\n\n";

print "<p>";
$S1 = 'Die Knickerbockerbande, das sind wir!';
echo strlen($S1);
print "</p>";
echo "\n";

print "<p>";
$S2 = 'Tom Turbo mag Schmieröl';
echo strpos($S2, 'Schmieröl');
print "</p>";
echo "\n";

print "<p>";
$S3 = 'Turbo Durchblick';
echo strrev($S3);
print "</p>";
echo "\n";

$handle = fopen('tricks.txt', 'w');


$Tricks = array();
$Tricks['  i'] = "Turbo Kleber";
$Tricks[' ii'] = "Turbo Bratpfannentrick";
$Tricks['iii'] = "Knoblauch Stinkbombe";

if($handle) {
    foreach($Tricks as $i => $trick) {
        fputs($handle, ($i . ". " . $trick . "\n"));
    }
    fclose($handle);
}

?>
