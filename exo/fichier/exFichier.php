<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier</title>
</head>
<body>
    <?PHP
    //php -S 127.0.0.1:8080
        $fp = fopen("src/liens.txt", "r");
        while(!feof($fp)){
        $ligne = fgets($fp, 4096);
        echo "<a href=$ligne>$ligne</a><br>";
        }

        echo "=================================================================<br><br>";

        $fichier = file("src/liens.txt");
        foreach($fichier as $cle) 
        { 
            echo "<a href=$cle>$cle</a><br>"; 
        }  
    ?>
</body>
</html>