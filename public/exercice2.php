<?php 
// Exercice 2
// Afficher tous les types de spectacles possibles.

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à query(requête sans variable)
$request =  $db->query('SELECT showtypes.type 
FROM showtypes');

// on récupère la réponse à la requète grâce à fetchAll(), car j'ai pls livres en BDD
$showtypes = $request->fetchAll(PDO::FETCH_ASSOC);
// var_dump($showtypes);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste de tous les spectacle de Colyseum</h1>
  <p><?php foreach ($showtypes as $showtype) {?>
        <?= $showtype["type"] . ", " ?>
<?php } ?></p>
</body>
</html>