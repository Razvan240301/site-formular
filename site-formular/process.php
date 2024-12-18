<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    echo "<h1>Datele au fost primite cu succes!</h1>";
    echo "<p><strong>Nume:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefon:</strong> $phone</p>";
} else {
    echo "Acces interzis.";
}
?>
