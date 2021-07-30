<?php
$pdo = new PDO('mysql:host=localhost;dbname=php_2_db', "web", "M6qRBxhawj2Cm7x");

$sql = "SELECT * FROM users";
foreach ($pdo->query($sql) as $row) {
echo $row['email']."<br />";
echo $row['vorname']."<br />";
echo $row['nachname']."<br /><br />";
}

$statement = $pdo->prepare("SELECT * FROM users WHERE vorname = :vorname AND nachname = :nachname");
$statement->execute(array(':vorname' => 'Max', ':nachname' => 'Mustermann'));
while($row = $statement->fetch()) {
echo $row['vorname']." ".$row['nachname']."<br />";
echo "E-Mail: ".$row['email']."<br /><br />";
}

$neuer_user = array();
$neuer_user['id'] = '5';
$neuer_user['email'] = 'info@php-einfach.de';
$neuer_user['password'] = '123456789';
$neuer_user['vorname'] = 'Klaus';
$neuer_user['nachname'] = 'Neumann';
$statement = $pdo->prepare("INSERT INTO users VALUES (:id, :email, :password, :vorname, :nachname)");
$statement->execute($neuer_user);

$statement = $pdo->prepare("UPDATE users SET vorname = :vorname_neu WHERE id = :id");
$statement->execute(array('id' => 5, 'vorname_neu' => 'Max'));

$statement = $pdo->prepare("SELECT * FROM users WHERE vorname = ?");
$statement->execute(array('Max'));
$anzahl_user = $statement->rowCount();
echo "Es wurden $anzahl_user gefunden";

$statement = $pdo->prepare("DELETE FROM users WHERE vorname = ?");
$statement->execute(array('Ich'));

?>