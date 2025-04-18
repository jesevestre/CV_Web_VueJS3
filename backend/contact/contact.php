<?php
declare(strict_types=1);

require_once __DIR__ . '/../recaptcha/autoload.php';

// Configuration des en-têtes
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: text/plain; charset=utf-8");

// Vérification des données POST
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$recaptchaResponse = $_POST['recaptcha_response'] ?? '';

// Vérification de la méthode
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Méthode non autorisée']);
    exit;
}

// Vérification des données POST
if ($name === '' || $email === '' || $subject === '' || $message === '') {
    echo 'errorMessage1'; // Champs manquants
    exit;
}

// Sécurisation des entrées
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Validation de l'email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "errorMessage2"; // Email invalide
    exit;
}

// Validation du Recaptcha
if(!empty($_POST["recaptcha-response"])) {
    $recaptcha = new \ReCaptcha\ReCaptcha("6Lfp3RkrAAAAAHyCORnP0e0AYd59QeRjl3kpYaGk");
    $resp = $recaptcha->verify($recaptchaResponse);
    if(!$resp->isSuccess()) {
        echo "errorMessage3"; // Recaptcha invalide
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
if (mail($to, "Message depuis le formulaire jbsevestre.fr", $fullMessage, implode("\r\n", $headers))) {
    echo "successMessage";
} else {
    echo "errorMessage4"; // Erreur serveur
}
?>