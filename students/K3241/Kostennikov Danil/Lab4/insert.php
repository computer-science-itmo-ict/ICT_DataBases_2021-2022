<?php
$dbuser = 'postgres';
$dbpass = 'postgres';
$host = 'localhost';
$dbname='Taxi';
$port=5433;

$pdo = new PDO("pgsql:host=$host dbname=$dbname port=$port", $dbuser, $dbpass);
$sql = 'INSERT INTO public."Client" ("Id", "Name", "Phone_number") VALUES(:Id,:Name,:Phone_number)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':Id', $_POST['id']);
$stmt->bindValue(':Name', $_POST['name']);
$stmt->bindValue(':Phone_number', $_POST['phone_number']);
$stmt->execute();

if (!$sql){
	echo "ERROR: Insert failed!";
} else {
	echo "Data inserted successfully";
}
?>
