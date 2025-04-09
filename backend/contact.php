<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: text/plain; charset=utf-8");

// Vérifie que toutes les données sont là
if (!isset($_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"])) {
    echo "Erreur : données manquantes";
    exit;
}

// Nettoyage et sécurisation
$name = htmlspecialchars($_POST["name"]);
$subject = htmlspecialchars($_POST["subject"]);
$message = htmlspecialchars($_POST["message"]);
$email = trim($_POST["email"]);
$email = strip_tags($email);
$email = htmlspecialchars($email); 

// Validation simple de l'email
if (!preg_match("/^[^@\s]+@[^@\s]+\.[^@\s]+$/", $email)) {
    echo "Erreur : email invalide";
    exit;
}

// Construction de l'email
$to = "sevestre.jb@gmail.com";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";
$fullMessage = "Nom: $name\n\nMessage:\n$message";

if (mail($to, "Message du site: $subject", $fullMessage, $headers)) {
    echo "Email envoyé avec succès";
} else {
    echo "Erreur lors de l'envoi du mail";
}
?>