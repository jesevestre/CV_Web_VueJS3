<?php 
require("../connexion/BDDIntersection.php");
include("../modele/modeleAddVisiteur.php");
header("Content-Type: application/json");

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        http_response_code(405);
        echo json_encode([
            "status" => "error",
            "message" => "Méthode non autorisée"
        ]);
        exit;
    }

    if (!isset($_COOKIE["cookie_stat_jb_cv"]) || $_COOKIE["cookie_stat_jb_cv"] !== "true") {
        http_response_code(403);
        echo json_encode([
            "status" => "error",
            "message" => "Consentement requis"
        ]);
        exit;
    }

    $ip_visiteur =
    $_SERVER["HTTP_CF_CONNECTING_IP"]
    ?? (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) 
        ? explode(",", $_SERVER["HTTP_X_FORWARDED_FOR"])[0] 
        : null)
    ?? $_SERVER["REMOTE_ADDR"]
    ?? null;

    if (!$ip_visiteur) {
        throw new Exception("IP introuvable");
    }

    $ip_hash = hash_hmac(
        "sha256",
        $ip_visiteur,
        "une_clef_ultra_secrete_32_chars_min"
    );

    addVisiteur($pdo, $ip_hash);

    echo json_encode([
        "status" => "success"
    ]);

} catch (Throwable $e) {
    http_response_code(500);

    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}
?>