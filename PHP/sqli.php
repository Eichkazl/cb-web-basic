<?php
$mysqli = new mysqli("localhost", "web", "M6qRBxhawj2Cm7x", "php_2_db");
if ($mysqli->connect_errno) {
die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

// create table test (
//     id int primary key,
//     name char(20)
// );

$sql = "select * from test";
$result = $mysqli->query($sql);
while( $row = $result->fetch_assoc()) {
    print_r($row);
    print "<br>" . $row["id"] . " " . $row["name"] . "<br><br>" . "\n";
}

// create table "user" (
//     id int primary key,
//     email char(30),
//     password char(20)
//     vorname char(20),
//     nachname char(20),
// );

$sql = "INSERT INTO users VALUES ( 1, 'ein@beispiel.de', 'passwort', 'Max', 'Mustermann')";
$mysqli->query($sql);
$sql = "INSERT INTO users VALUES ( 2, 'zweites@beispiel.de', 'password', 'Maria', 'Musterfrau')";
$mysqli->query($sql);
$sql = "INSERT INTO users VALUES ( 3, 'undNochEin@beispiel.de', '12345', 'Ich', 'Einfach nur ich')";
$mysqli->query($sql);
$sql = "INSERT INTO users VALUES ( 101, 'ich@nicht.at', 'qfwi7u489uc_a<d-!', 'Clever', 'Password')";
$mysqli->query($sql);

$sql = "UPDATE users SET email = ?, password = ? WHERE id = ?";
$statement = $mysqli->prepare($sql);
$statement->bind_param('ssi', $email, $password, $id);

$id= 1; 
$email = "ein@beispiel.de"; 
$password = "neues passwort";

if(!$statement->execute()) {
echo "Query fehlgeschlagen: ".$statement->error;
}

$count = $statement->affected_rows;
echo $count;

// $statement->execute();
// $result = $statement->get_result();
// $count = $result->num_rows;
// echo $count;



$id = 11;
$sql = "SELECT * FROM users WHERE id < ?";
$statement = $mysqli->prepare($sql);
$statement->bind_param('i', $id);
$statement->execute();

$result = $statement->get_result();

while($row = $result->fetch_object()) {
    echo $row->email;
    echo "<br>";
}
?>