<?php include("../connexion/BDDIntersection.php"); ?>

<?php
$request_uri = $_SERVER['REQUEST_URI'];
$endpoint = str_replace('/backend/vue/accueil.php', '', $request_uri);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $endpoint == '/posts') {
    $stmt = $pdo->prepare("SELECT nom, date_debut, date_fin FROM Evenements");
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($posts);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Endpoint non trouvé']);
}
?>