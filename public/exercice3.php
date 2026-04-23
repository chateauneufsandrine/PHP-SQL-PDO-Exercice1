<?php 
// Exercice 3
// Afficher les 20 premiers clients.

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à query(requête sans variable)
$request =  $db->query('SELECT firstName, lastName, id
FROM clients
ORDER BY id ASC
LIMIT 20');

// on récupère la réponse à la requète grâce à fetchAll(), car j'ai pls livres en BDD
$clients = $request->fetchAll(PDO::FETCH_ASSOC);
// var_dump($clients);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des 20 premiers clients</h1>
<?php foreach ($clients as $client){ ?><li><?= $client["id"] ."- ".  $client["lastName"] .", ". $client["firstName"] ?></li><?php } ?>
</body>
</html>