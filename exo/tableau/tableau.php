<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>
    <?PHP
    //php -S 127.0.0.1:8080
        $tab = array(
            "Janvier" => 31,
            "Février" => 28,
            "Mars" => 31,
            "Avril" => 30,
            "Mai" => 31,
            "Juin" => 30,
            "Juillet" => 31,
            "Aout" => 31,
            "Septembre" => 30,
            "Octobre" => 31,
            "Novembre" => 30,
            "Decembre" => 31
        );

        asort($tab);
        foreach($tab as $cle => $valeur) 
        { 
            echo $cle ." : ".$valeur."<br>"; 
        }  
    ?>
</body>
</html>