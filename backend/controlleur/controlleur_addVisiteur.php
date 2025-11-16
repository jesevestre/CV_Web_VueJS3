<?php require("../connexion/BDDIntersection.php"); ?>
<?php include("../modele/modele_addVisiteur.php"); ?>

<?php
// Récupération IP
$ip_visiteur = $_SERVER['REMOTE_ADDR'] ?? null;

if ($ip_visiteur) {
    addVisiteur($pdo, $ip_visiteur);
    http_response_code(200);
    echo json_encode(["status" => "success", "ip_visiteur" => $ip_visiteur]);
} else {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Impossible de récupérer l'adresse IP du visteur"]);
}
?>