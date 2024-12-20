<?php include("BDDIntersection.php"); ?>

<?php
$request_uri = $_SERVER['REQUEST_URI'];
$endpoint = str_replace('/backend/index.php', '', $request_uri);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $endpoint == '/posts') {
    // Requête SQL pour récupérer les posts
    $stmt = $pdo->prepare("SELECT produit_id FROM produit");
    $stmt->execute();

    // Récupérer les résultats
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Retourner les résultats au format JSON
    echo json_encode($posts);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Endpoint non trouvé']);
}
?>