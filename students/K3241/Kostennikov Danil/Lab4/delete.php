<?php
$dbuser = 'postgres';
$dbpass = 'postgres';
$host = 'localhost';
$dbname='Taxi';
$port=5433;

$pdo = new PDO("pgsql:host=$host dbname=$dbname port=$port", $dbuser, $dbpass);
$sql = 'DELETE FROM public."Client" WHERE "Client"."Id"='.$_POST['id'];
$stmt = $pdo->prepare($sql);
$stmt->execute();

if (!$sql){
	echo "ERROR: Insert failed!";
} else {
	echo "Data inserted successfully";
}
?>
