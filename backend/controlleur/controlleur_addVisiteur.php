<?php require("../connexion/BDDIntersection.php"); ?>
<?php include("../modele/modele_addVisiteur.php"); ?>

<?php
try {
    $ip_visiteur =
        $_SERVER['HTTP_CF_CONNECTING_IP']
        ?? $_SERVER['HTTP_X_FORWARDED_FOR']
        ?? $_SERVER['REMOTE_ADDR']
        ?? null;

    if (!$ip_visiteur) {
        throw new Exception("IP introuvable");
    }

    $ip_hash = hash_hmac(
        'sha256',
        $ip_visiteur,
        "une_clef_ultra_secrete_32_chars_min"
    );

    addVisiteur($pdo, $ip_hash);

    echo json_encode(["status" => "success"]);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}
?>