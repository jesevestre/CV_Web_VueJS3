<?php
function addCommande($pdo, $user_email, $user_telephone, $prixTotalBarquettes) {
    $sql = "INSERT INTO Commandes (
                user_email, 
                user_telephone,
                prixTotalBarquettes,
                date_commande
    ) VALUES (
        ?, ?, ?, NOW()
    )";
    $req = $pdo->prepare($sql);
    $req->execute(array($user_email, $user_telephone, $prixTotalBarquettes));

    $sql = "SELECT MAX(id_commande) AS id_commande FROM Commandes";
    $req = $pdo->prepare($sql);
    $req->execute();
	$result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result[0]->id_commande;
}

function addCommandeSushis($pdo, $id_commande, $sushiInput1, $sushiInput2, $sushiInput3, $sushiInput4, $sushiInput5, $sushiInput6, $sushiInput7, $sushiInput8, $sushiInput9, $sushiInput10, $sushiInput11, $sushiInput12, $nbrBarquetteSushis, $prixBarquetteSushis) {

    $sql = "INSERT INTO Commande_Sushis (
        id_commande, 
        sushiInput1, 
        sushiInput2,
        sushiInput3,
        sushiInput4,
        sushiInput5,
        sushiInput6,
        sushiInput7,
        sushiInput8,
        sushiInput9,
        sushiInput10,
        sushiInput11,
        sushiInput12,
        nbrBarquetteSushis,
        prixBarquetteSushis
    ) VALUES (
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
    )";
    $req = $pdo->prepare($sql);
    $req->execute(array($id_commande, $sushiInput1, $sushiInput2, $sushiInput3, $sushiInput4, $sushiInput5, $sushiInput6, $sushiInput7, $sushiInput8, $sushiInput9, $sushiInput10, $sushiInput11, $sushiInput12, $nbrBarquetteSushis, $prixBarquetteSushis));
}

function addCommandeFruitsDeMer($pdo, $id_commande, $fruitDeMerInput1, $fruitDeMerInput2, $fruitDeMerInput3, $fruitDeMerInput4, $nbrBarquetteFruitsDeMer, $prixBarquetteFruitsDeMer) {

    $sql = "INSERT INTO Commande_FruitsDeMer (
        id_commande, 
        fruitDeMerInput1, 
        fruitDeMerInput2,
        fruitDeMerInput3,
        fruitDeMerInput4,
        nbrBarquetteFruitsDeMer,
        prixBarquetteFruitsDeMer
    ) VALUES (
        ?, ?, ?, ?, ?, ?, ?
    )";
    $req = $pdo->prepare($sql);
    $req->execute(array($id_commande, $fruitDeMerInput1, $fruitDeMerInput2, $fruitDeMerInput3, $fruitDeMerInput4, $nbrBarquetteFruitsDeMer, $prixBarquetteFruitsDeMer));
}

function addCommandePoissons($pdo, $id_commande, $poissonInput1, $poissonInput2, $poissonInput3, $poissonInput4, $poissonInput5, $poissonInput6, $nbrBarquettePoissons, $prixBarquettePoissons) {

    $sql = "INSERT INTO Commande_Poissons (
        id_commande, 
        poissonInput1, 
        poissonInput2,
        poissonInput3,
        poissonInput4,
        poissonInput5,
        poissonInput6,
        nbrBarquettePoissons,
        prixBarquettePoissons
    ) VALUES (
        ?, ?, ?, ?, ?, ?, ?, ?, ?
    )";
    $req = $pdo->prepare($sql);
    $req->execute(array($id_commande, $poissonInput1, $poissonInput2, $poissonInput3, $poissonInput4, $poissonInput5, $poissonInput6, $nbrBarquettePoissons, $prixBarquettePoissons));
}

function addCommandeViandes($pdo, $id_commande, $viandeInput1, $viandeInput2, $viandeInput3, $viandeInput4, $viandeInput5, $viandeInput6, $viandeInput7, $viandeInput8, $nbrBarquetteViandes, $prixBarquetteViandes) {

    $sql = "INSERT INTO Commande_Viandes (
        id_commande, 
        viandeInput1, 
        viandeInput2,
        viandeInput3,
        viandeInput4,
        viandeInput5,
        viandeInput6,
        viandeInput7,
        viandeInput8,
        nbrBarquetteViandes,
        prixBarquetteViandes
    ) VALUES (
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
    )";
    $req = $pdo->prepare($sql);
    $req->execute(array($id_commande, $viandeInput1, $viandeInput2, $viandeInput3, $viandeInput4, $viandeInput5, $viandeInput6, $viandeInput7, $viandeInput8, $nbrBarquetteViandes, $prixBarquetteViandes));
}

function addCommandeAccompagnements($pdo, $id_commande, $accompagnementInput1, $accompagnementInput2, $accompagnementInput3, $accompagnementInput4, $accompagnementInput5, $accompagnementInput6, $nbrBarquetteAccompagnements, $prixBarquetteAccompagnements) {

    $sql = "INSERT INTO Commande_Accompagnements (
        id_commande, 
        accompagnementInput1, 
        accompagnementInput2,
        accompagnementInput3,
        accompagnementInput4,
        accompagnementInput5,
        accompagnementInput6,
        nbrBarquetteAccompagnements,
        prixBarquetteAccompagnements
    ) VALUES (
        ?, ?, ?, ?, ?, ?, ?, ?, ?
    )";
    $req = $pdo->prepare($sql);
    $req->execute(array($id_commande, $accompagnementInput1, $accompagnementInput2, $accompagnementInput3, $accompagnementInput4, $accompagnementInput5, $accompagnementInput6, $nbrBarquetteAccompagnements, $prixBarquetteAccompagnements));
}

function addCommandePaniersSurprise($pdo, $id_commande, $nbrBarquettePaniersSurprise, $prixBarquettePaniersSurprise) {

    $sql = "INSERT INTO Commande_PaniersSurprise (
        id_commande, 
        nbrBarquettePaniersSurprise, 
        prixBarquettePaniersSurprise
    ) VALUES (
        ?, ?, ?
    )";
    $req = $pdo->prepare($sql);
    $req->execute(array($id_commande, $nbrBarquettePaniersSurprise, $prixBarquettePaniersSurprise));
}
?>