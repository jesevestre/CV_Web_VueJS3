<?php require("../connexion/BDDIntersection.php"); ?>
<?php include("../modele/modele_addCommande.php"); ?>

<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if ($data) {
    $user_email = $data['user_email'];
    $user_telephone = $data['user_telephone'];
    $prixTotalBarquettes = $data['prixTotalBarquettes'];
    $id_commande = addCommande($pdo, $user_email, $user_telephone, $prixTotalBarquettes);

    $nbrBarquetteSushis = $data['nbrBarquetteSushis'];
    $prixBarquetteSushis = $data['prixBarquetteSushis'];
    $sushiInput1 = $data['sushiInput1'];
    $sushiInput2 = $data['sushiInput2'];
    $sushiInput3 = $data['sushiInput3'];
    $sushiInput4 = $data['sushiInput4'];
    $sushiInput5 = $data['sushiInput5'];
    $sushiInput6 = $data['sushiInput6'];
    $sushiInput7 = $data['sushiInput7'];
    $sushiInput8 = $data['sushiInput8'];
    $sushiInput9 = $data['sushiInput9'];
    $sushiInput10 = $data['sushiInput10'];
    $sushiInput11 = $data['sushiInput11'];
    $sushiInput12 = $data['sushiInput12'];
    addCommandeSushis($pdo, $id_commande, $sushiInput1, $sushiInput2, $sushiInput3, $sushiInput4, $sushiInput5, $sushiInput6, $sushiInput7, $sushiInput8, $sushiInput9, $sushiInput10, $sushiInput11, $sushiInput12, $nbrBarquetteSushis, $prixBarquetteSushis);
 
    $nbrBarquetteFruitsDeMer = $data['nbrBarquetteFruitsDeMer'];
    $prixBarquetteFruitsDeMer = $data['prixBarquetteFruitsDeMer'];
    $fruitDeMerInput1 = $data['fruitDeMerInput1'];
    $fruitDeMerInput2 = $data['fruitDeMerInput2'];
    $fruitDeMerInput3 = $data['fruitDeMerInput3'];
    $fruitDeMerInput4 = $data['fruitDeMerInput4'];
    addCommandeFruitsDeMer($pdo, $id_commande, $fruitDeMerInput1, $fruitDeMerInput2, $fruitDeMerInput3, $fruitDeMerInput4, $nbrBarquetteFruitsDeMer, $prixBarquetteFruitsDeMer);

    $nbrBarquettePoissons = $data['nbrBarquettePoissons'];
    $prixBarquettePoissons = $data['prixBarquettePoissons'];
    $poissonInput1 = $data['poissonInput1'];
    $poissonInput2 = $data['poissonInput2'];
    $poissonInput3 = $data['poissonInput3'];
    $poissonInput4 = $data['poissonInput4'];
    $poissonInput5 = $data['poissonInput5'];
    $poissonInput6 = $data['poissonInput6'];
    addCommandePoissons($pdo, $id_commande, $poissonInput1, $poissonInput2, $poissonInput3, $poissonInput4, $poissonInput5, $poissonInput6, $nbrBarquettePoissons, $prixBarquettePoissons);

    $nbrBarquetteViandes = $data['nbrBarquetteViandes'];
    $prixBarquetteViandes = $data['prixBarquetteViandes'];
    $viandeInput1 = $data['viandeInput1'];
    $viandeInput2 = $data['viandeInput2'];
    $viandeInput3 = $data['viandeInput3'];
    $viandeInput4 = $data['viandeInput4'];
    $viandeInput5 = $data['viandeInput5'];
    $viandeInput6 = $data['viandeInput6'];
    $viandeInput7 = $data['viandeInput7'];
    $viandeInput8 = $data['viandeInput8'];
    addCommandeViandes($pdo, $id_commande, $viandeInput1, $viandeInput2, $viandeInput3, $viandeInput4, $viandeInput5, $viandeInput6, $viandeInput7, $viandeInput8, $nbrBarquetteViandes, $prixBarquetteViandes);

    $nbrBarquetteAccompagnements = $data['nbrBarquetteAccompagnements'];
    $prixBarquetteAccompagnements = $data['prixBarquetteAccompagnements'];
    $accompagnementInput1 = $data['accompagnementInput1'];
    $accompagnementInput2 = $data['accompagnementInput2'];
    $accompagnementInput3 = $data['accompagnementInput3'];
    $accompagnementInput4 = $data['accompagnementInput4'];
    $accompagnementInput5 = $data['accompagnementInput5'];
    $accompagnementInput6 = $data['accompagnementInput6'];
    addCommandeAccompagnements($pdo, $id_commande, $accompagnementInput1, $accompagnementInput2, $accompagnementInput3, $accompagnementInput4, $accompagnementInput5, $accompagnementInput6, $nbrBarquetteAccompagnements, $prixBarquetteAccompagnements);

    $nbrBarquettePaniersSurprise = $data['nbrBarquettePaniersSurprise'];
    $prixBarquettePaniersSurprise = $data['prixBarquettePaniersSurprise'];
    addCommandePaniersSurprise($pdo, $id_commande, $nbrBarquettePaniersSurprise, $prixBarquettePaniersSurprise);
}
?>