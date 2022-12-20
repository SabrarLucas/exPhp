<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau3</title>
</head>
<body>
    <?PHP
    //php -S 127.0.0.1:8080
    $departements = array(
        "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );
    asort($departements);

    foreach($departements as $cle => $valeur) {
        echo $cle. ' : ';
        foreach ($valeur as $val) {
            echo $val.' ';
        }
        echo '<br>';
    }

    echo '<br> <br>';
    
    foreach ($departements as $cle => $valeur) {
        echo $cle . ' : '. count($valeur) . ' <br>';
    }
    ?>
</body>
</html>