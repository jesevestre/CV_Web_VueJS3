<?php
require("../connexion/BDDIntersection.php");
include("../modele/modele_majEvenement.php");

$titre = $_POST['titre'];
$sousTitre = $_POST['sousTitre'];
$point1 = $_POST['point1'];
$point2 = $_POST['point2'];
$point3 = $_POST['point3'];
$point4 = $_POST['point4'];
$point5 = $_POST['point5'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];

// Préparation upload image
// $imageEvent = null;
// if (isset($_FILES['imageEvent']) && $_FILES['imageEvent']['error'] === UPLOAD_ERR_OK) {
//     $uploadDir = __DIR__ . '/../../public/photosEvenement/';
//     if (!is_dir($uploadDir)) {
//         mkdir($uploadDir, 0755, true);
//     }

//     $fileName = basename($_FILES['imageEvent']['name']);
//     $targetPath = $uploadDir . $fileName;

//     if (move_uploaded_file($_FILES['imageEvent']['tmp_name'], $targetPath)) {
//         $imageEvent = 'photosEvenement/' . $fileName;
//     }
// }

majEvenement($pdo, $titre);
?>