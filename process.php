<?php
require_once "db.php";
require_once "Person.php";

$database = new Database();
$db = $database->getConnection();
$person = new Person($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $person->name = $_POST['name'];
    $person->email = $_POST['email'];
    if ($person->create()) {
        echo "Ajout réussi";
    } else {
        echo "Erreur lors de l'ajout";
    }
}
?>