<?php
declare(strict_types=1);

require_once __DIR__ . '/../recaptcha/autoload.php';

// Configuration des en-têtes
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Content-Type: text/plain; charset=utf-8");

// Vérification des données POST
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$recaptchaResponse = $_POST['recaptcha_response'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
    return;
}
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
if(!empty($_POST["recaptcha_response"])) {
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
    "MIME-Version: 1.0",
    "Content-Type: text/html; charset=UTF-8"
];
$fullMessage = "
    <html>
    <body style='font-family: Arial, sans-serif;'>
        <h2 style='color:#444;'>📩 Nouveau message depuis le formulaire de contact jbsevestre.fr</h2>
        <p><b>Sujet de l'expéditeur :</b> $subject</p>
        <p><b>Nom de l'expéditeur :</b> $name</p>
        <p><b>Email de l'expéditeur :</b> $email</p>
        <p><b>Message de l'expéditeur :</b><br />" . nl2br($message) . "</p><br />
    </body>
    </html>
";

// Envoi de l'email
if (mail($to, "Message depuis le site web jbsevestre.fr", $fullMessage, implode("\r\n", $headers) . "\r\n")) {
    echo "successMessage";
} else {
    echo "errorMessage4"; // Erreur serveur
}
?>