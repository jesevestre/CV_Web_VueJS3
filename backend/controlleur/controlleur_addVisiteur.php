<?php require("../connexion/BDDIntersection.php"); ?>
<?php include("../modele/modele_addVisiteur.php"); ?>

<?php
// Récupération IP
$ip_visiteur = $_SERVER['REMOTE_ADDR'] ?? null;

if ($ip_visiteur) {
    // Hashage IP
    $ip_hash = password_hash($ip_visiteur, PASSWORD_DEFAULT);

    addVisiteur($pdo, $ip_hash);
    
    http_response_code(200);
    echo json_encode(["status" => "success", "ip_visiteur" => $ip_hash]);
} else {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Impossible de récupérer l'adresse IP du visteur"]);
}
?>