<html>

<head>
   <title>Exercice des commandes.</title>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
   <link href="assets/style.CSS" type="text/css" rel="stylesheet" />
<link href="assets/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php

//EXERCICE 1

// On définit les viandes et les cuissons, et on crée un tableau vide pour y mettre les commandes.
$viandes = ["poulet", "boeuf", "mouton"];
$cuissons = ["à point", "saignant", "bleu", "bien cuit"]; 
$commandes = [];

// Pour chaque viande, on crée une commande en fonction de la cuisson qu'on pousse dans le tableau vide.
              
foreach( $viandes as $viande ){
    
    foreach( $cuissons as $cuisson) {
        
        array_push ($commandes, $viande.""." "."".$cuisson."\n");
        
    }
    
}

//On affiche le tableau.

foreach( $commandes as $commande ){
    echo "<div class='resultat'>Le client commande un " .$commande."\n </div>";
}
?>

</body>

</html>
