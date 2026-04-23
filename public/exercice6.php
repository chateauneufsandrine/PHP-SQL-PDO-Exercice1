<?php 

// Exercice 6
// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. 
// Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à query(requête sans variable)
$request =  $db->query('SELECT shows.title, shows.performer, shows.date, shows.startTime
FROM shows
ORDER BY shows.title ASC;');

// on récupère la réponse à la requète grâce à fetchAll(), car j'ai pls livres en BDD
$shows = $request->fetchAll(PDO::FETCH_ASSOC);
// var_dump($clients);


?>

<h1>Liste des spectacles</h1>

<?php foreach ($shows as $show) { ?>
    <p>
        <?= $show["title"] ?> par 
        <?= $show["performer"] ?>, 
        le <?= $show["date"] ?> 
        à <?= $show["startTime"] ?>
    </p>
<?php } ?>