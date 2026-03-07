<?php
function addVisiteur($pdo, $ip_hash) {
    $sql = "SELECT id_visiteur
            FROM Visiteurs
            WHERE ip_visiteur_hash = ? AND DATE(date_visite) = CURDATE()
            LIMIT 1";
    $req = $pdo->prepare($sql);
    $req->execute([$ip_hash]);
	$result = $req->fetch(PDO::FETCH_OBJ);

    // Si l'utilisateur n'est pas encore venu aujourd'hui
    // Clé d'unicité présente dans la base de données
    if (!$result) {
        $sql = "INSERT IGNORE Visiteurs (
                    ip_visiteur_hash, 
                    date_visite
                ) VALUES (?, CURDATE())";
        $req = $pdo->prepare($sql);
        $req->execute([$ip_hash]);
    }
}
?>