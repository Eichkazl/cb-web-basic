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

</body>

</html>