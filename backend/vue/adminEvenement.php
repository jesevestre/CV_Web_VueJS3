<?php include("../connexion/BDDIntersection.php"); ?>

<?php
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$endpoint = str_replace('/backend/vue/adminEvenement.php', '', $request_uri);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $endpoint == '/posts') {
    // Requête SQL pour récupérer les posts
    $stmt = $pdo->prepare("SELECT id, titre, sousTitre, point1, point2, point3, point4, point5, date_debut, date_fin FROM Evenement WHERE id = 1");
    $stmt->execute();
    $posts = $stmt->fetch(PDO::FETCH_ASSOC);

    // Retourner les résultats au format JSON
    echo json_encode($posts);
} else {
    http_response_code(404);
    echo json_encode(array('error' => 'Endpoint non trouvé'));
}
?>