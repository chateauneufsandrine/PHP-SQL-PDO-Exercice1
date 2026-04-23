<?php

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à query(requête sans variable)
$request =  $db->query('SELECT clients.lastName, clients.firstName 
FROM clients');

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

    <h1>Liste de clients du Colyseum</h1>
    <ol><?php foreach ($clients as $client) {  ?>
            <li><?= $client["lastName"] . ", " . $client["firstName"] ?></li>
        <?php } ?>
    </ol>



</body>

</html>