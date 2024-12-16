<?php
echo "test";
require("BDDIntersection.php");
echo "test";
verifUtilisateur($pdo);
function verifUtilisateur($pdo) {
    $sql = "SELECT COUNT(*) FROM Evenement";    
    $req = $pdo->prepare($sql);
	$req->execute();
	$result = $req->rowCount();

    if($result == 1) {
        return true;
    } else {
        return false;
    }
}



// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
// header('Access-Control-Allow-Headers: Content-Type, Authorization');
// header('Content-Type: application/json');

// require __DIR__ . '/vendor/autoload.php';

// use Dotenv\Dotenv;

// $dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// try {
//     $conn = new mysqli("xnsmari129.mysql.db", "xnsmari129", "xnsmari129", "Maxjb20011995");

//     if ($conn->connect_error) {
//         throw new Exception("Erreur de connexion : " . $conn->connect_error);
//     }

//     echo json_encode(['visites' => 'Connexion réussie']);
// } catch (Exception $e) {
//     echo json_encode(['erreur' => $e->getMessage()]);
// }

// // if (!$pdo) {
// //     $stmt = $pdo->query('SELECT COUNT(*) AS totalNombreVisites FROM visiteurs');
// //     $visites = $stmt->fetchColumn();
// // } else {
// //     $visites = "NON";
// // }

// echo json_encode([
//     'visites' => $visites
// ]);