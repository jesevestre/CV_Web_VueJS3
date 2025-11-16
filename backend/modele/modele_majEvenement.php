<?php
function majEvenement($pdo, $titre/*, $sousTitre, $point1, $point2, $point3, $point4, $point5, $imageEvent, $date_debut, $date_fin*/) {
    $sql = "UPDATE Evenement 
            SET titre = ?
            WHERE id = 1";
    $req = $pdo->prepare($sql);
    $req->execute(array($titre/*, $sousTitre, $point1, $point2, $point3, $point4, $point5, $imageEvent, $date_debut, $date_fin*/));
}
?>