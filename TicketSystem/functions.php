<?php
function pdo_connect_mysql() {

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'ticketSystem';
    $DATABASE_PASS = 'zUflTK3ZkOPIp4q2';
    $DATABASE_NAME = 'phpticket';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	exit('Failed to connect to database!');
    }
}

function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="Style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Ticketing System</h1>
            <a href="index.php"><i class="fas fa-ticket-alt"></i>Tickets</a>
    	</div>
    </nav>
EOT;
}

function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>