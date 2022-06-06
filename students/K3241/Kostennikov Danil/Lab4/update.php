<?php
$dbuser = 'postgres';
$dbpass = 'postgres';
$host = 'localhost';
$dbname='Taxi';
$port=5433;

$pdo = new PDO("pgsql:host=$host dbname=$dbname port=$port", $dbuser, $dbpass);
$id = $_POST['id'];
$sql='SELECT * FROM public."Client" WHERE "Client"."Id" =';
$sql .="$id";
$row=$pdo->query($sql)->fetch();
$name=$_POST['name'];
$phone=$_POST['phone_number'];
if($name == null){
    $name=$row['Name'];
};
if($phone==null){
    $phone=$row['Phone_number'];
};
$sql='UPDATE public."Client" SET  "Name"=\''.$name.'\', "Phone_number"=\''.$phone.'\' WHERE "Client"."Id"='.$id.';';
$stmt = $pdo->prepare($sql);
$stmt->execute();

if (!$sql){
	echo "ERROR: Insert failed!";
} else {
	echo "Data inserted successfully";
}
?>
