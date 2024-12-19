<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    
    // Adresa unde se vor trimite e-mailurile
    $to = "slabestefarasateinfometezi@gmail.com";
    
    // Subiectul e-mailului
    $subject = "Formular nou primit";

    // Conținutul mesajului
    $message = "
        Nume: $name\n
        Email: $email\n
        Telefon: $phone\n
    ";

    // Antet pentru e-mail (inclusiv adresa de la care vine mesajul)
    $headers = "From: $email";

    // Trimiterea e-mailului
    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Datele au fost trimise cu succes pe email!</h1>";
    } else {
        echo "<h1>Eroare la trimiterea e-mailului. Încearcă din nou.</h1>";
    }
} else {
    echo "Acces interzis.";
}
