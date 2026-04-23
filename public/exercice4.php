<?php 

// Exercice 4
// N'afficher que les clients possédant une carte de fidélité.

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à query(requête sans variable)
$request =  $db->query('SELECT clients.firstName, clients.lastName
FROM clients
WHERE clients.card = 1');

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
    <h1>Liste des clients possédant une carte de crédit</h1>
    <ul><?php foreach ($clients as $client){ ?><li><?= $client["lastName"] .", ". $client["firstName"] ?></li><?php } ?></ul>

</body>
</html>