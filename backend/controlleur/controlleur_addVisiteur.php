<?php require("../connexion/BDDIntersection.php"); ?>
<?php include("../modele/modele_addVisiteur.php"); ?>

<?php
// Récupération IP
$ip_visiteur = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? null;

if ($ip_visiteur) {
    // Hashage IP
    $ip_hash = hash_hmac('sha256', $ip_visiteur, "une_clef_ultra_secrete_32_chars_min");

    addVisiteur($pdo, $ip_hash);
    
    http_response_code(200);
    echo json_encode(["status" => "success", "ip_visiteur" => $ip_visiteur]);
} else {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Impossible de récupérer l'adresse IP du visteur"]);
}
?>