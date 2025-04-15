<?php
require("../recaptcha/autoload.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: text/plain; charset=utf-8");

// Vérification des données POST
if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["subject"]) || empty($_POST["message"])) {
    echo "errorMessage1";
    exit;
}

// Sécurisation des entrées
$name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars(trim($_POST["subject"]), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(trim($_POST["message"]), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

// Validation de l'email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "errorMessage2";
    exit;
}

// Validation du Recaptcha
if(!empty($_POST["recaptcha-response"])) {
    $recaptcha = new \ReCaptcha\ReCaptcha("6Lfp3RkrAAAAAHyCORnP0e0AYd59QeRjl3kpYaGk");
    $resp = $recaptcha->verify($_POST["recaptcha-response"]);
    if(!$resp->isSuccess()) {
        echo "errorMessage3";
        exit;
    }
}

// Préparation de l'email
$to = "sevestre.jb@gmail.com";
$headers = [
    "From: contact@jbsevestre.fr",
    "Reply-To: $email",
    "Content-Type: text/plain; charset=UTF-8"
];
$fullMessage = "Sujet: $subject\n\n\nMessage:\n$message\n\n\nNom de l'expéditeur: $name";

// Envoi de l'e-mail
if (mail($to, "Message depuis jbsevestre.fr", $fullMessage, implode("\r\n", $headers))) {
    echo "successMessage";
} else {
    echo "errorMessage4";
}
?>