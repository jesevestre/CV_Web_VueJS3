<?php
declare(strict_types=1);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: text/plain; charset=utf-8");

// Vérification des données POST
if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["subject"]) || empty($_POST["message"])) {
    echo "Erreur : données manquantes";
    exit;
}

// Sécurisation des entrées
$name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars(trim($_POST["subject"]), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(trim($_POST["message"]), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

// Validation email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Erreur : email invalide";
    exit;
}

// Préparation de l'e-mail
$to = "sevestre.jb@gmail.com";
$headers = [
    "From: $email",
    "Reply-To: $email",
    "Content-Type: text/plain; charset=UTF-8"
];
$fullMessage = "Nom: $name\n\nMessage:\n$message";

// Envoi de l'e-mail
if (mail($to, "Message du site: $subject", $fullMessage, implode("\r\n", $headers))) {
    echo "Email envoyé avec succès";
} else {
    echo "Erreur lors de l'envoi du mail";
}
?>