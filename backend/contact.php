<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data["name"], $data["email"], $data["subject"], $data["message"])) {
    $name = htmlspecialchars($data["name"]);
    $email = filter_var($data["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($data["subject"]);
    $message = htmlspecialchars($data["message"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Email invalide"]);
        exit;
    }

    $to = "sevestre.jb@gmail.com"; // Remplace par ton adresse email
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
    $fullMessage = "Nom: $name\n\nMessage:\n$message";

    if (mail($to, "Message du site: $subject", $fullMessage, $headers)) {
        echo json_encode(["success" => true, "message" => "Email envoyé avec succès"]);
    } else {
        echo json_encode(["success" => false, "message" => "Erreur lors de l'envoi du mail"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Données manquantes"]);
}
?>
