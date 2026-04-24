<?php
// Exercice 7
// Afficher tous les clients comme ceci :

// Nom : Nom de famille du client

// Prénom : Prénom du client

// Date de naissance : Date de naissance du client

// Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)

// Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à query(requête sans variable)
$request =  $db->query('SELECT clients.lastName, clients.firstName,clients.birthDate, clients.card, clients.cardNumber
FROM clients');

// on récupère la réponse à la requète grâce à fetchAll(), car j'ai pls livres en BDD
$clients = $request->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($clients as $client) { ?>
        <p>Nom : <?= $client["lastName"] ?></p>
        <p>Prénom : <?= $client["firstName"] ?></p>
        <p>Date de naissance : <?= $client["birthDate"] ?></p>
      
   <p>Carte de fidélité :
        <?php if ($client["card"] == 1) { ?>
            Oui
        <?php } else { ?>
            Non
        <?php } ?>
    </p>

        <p>Numéro de carte :
        <?php if ($client["card"] == 1) { ?>
            <?= $client["cardNumber"] ?>
        <?php } else { ?>
            Aucun
        <?php } ?>
    </p>


        <?php } ?>
</body>

</html>