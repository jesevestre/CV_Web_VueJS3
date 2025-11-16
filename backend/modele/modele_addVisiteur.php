<?php
function addVisiteur($pdo, $ip) {
    $sql = "SELECT id
            FROM Visiteurs
            WHERE ip_visiteur = ? AND date_visite = CURDATE()
            LIMIT 1";
    $req = $pdo->prepare($sql);
    $req->execute([$ip]);
	$result = $req->fetch(PDO::FETCH_OBJ);

    // Si l'utilisateur n'est pas encore venu aujourd'hui
    if (!$result) {
        $sql = "INSERT INTO Visiteurs (
                    ip_visiteur, 
                    date_visite
                ) VALUES (
                    ?, NOW()
                )";
        $req = $pdo->prepare($sql);
        $req->execute(array($ip));
    }
}
?>