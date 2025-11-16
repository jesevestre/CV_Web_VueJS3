<?php include("../connexion/BDDIntersection.php"); ?>

<?php
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$endpoint = str_replace('/backend/vue/adminVisiteurs.php', '', $request_uri);

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $endpoint == '/posts') {
    // Requête SQL pour récupérer les posts
    $stmt = $pdo->prepare(" SELECT DATE_FORMAT(date_visite, '%Y-%m') AS annee_mois, COUNT(*) AS total
                            FROM Visiteurs
                            GROUP BY annee_mois
                            ORDER BY annee_mois");
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Retourner les résultats au format JSON
    echo json_encode($posts);
} else {
    http_response_code(404);
    echo json_encode(array('error' => 'Endpoint non trouvé'));
}
?>