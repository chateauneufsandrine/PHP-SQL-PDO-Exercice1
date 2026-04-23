<?php 
// Exercice 5
// Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :

// Nom : Nom du client

// Prénom : Prénom du client

// Trier les noms par ordre alphabétique.

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à query(requête sans variable)
$request =  $db->query('SELECT clients.lastName, clients.firstName
FROM clients
WHERE clients.lastName LIKE "m%"
ORDER BY clients.lastName ASC');

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
    <h1>Liste des clients</h1>

<?php foreach ($clients as $client) { ?>
    <p>Nom : <?= $client["lastName"] ?></p>
    <p>Prénom : <?= $client["firstName"] ?></p>
<?php } ?>
</body>
</html>