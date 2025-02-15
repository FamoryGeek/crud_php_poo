<?php
require_once "db.php";
require_once "Person.php";

$database = new Database();
$db = $database->getConnection();
$person = new Person($db);
$stmt = $person->readAll();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Nom: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
}
?>