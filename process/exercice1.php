<?php 

// On vérifie que la méthode utilisé est bien celle qu'on voulait -->
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    header("Location: ../public/exercice1.php");
   exit();
}

// On vérifie qu'on a bien reçu tous les inputs
if (!isset($_GET["clients"])) {
    header("Location: ../public/exercice1.php");
 exit();
}

// On vérifie qu'un des champs n'est pas vide
if (empty($_GET["clients"])) {
    header("Location: ../public/exercice1.php");
    exit();
}

// Input Sanitization
$clients = htmlspecialchars(trim($_GET["clients"]));

?>