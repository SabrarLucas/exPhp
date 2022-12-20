<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo</title>
</head>
<body>
    <?PHP
    //php -S 127.0.0.1:8080
        //------- 1 ------
        $a = 1;
        while($a < 150){
            echo $a . " ";
            $a = $a + 2;
        }
    echo "<br>";

        //------- 2 --------
        $b = " Je dois faire des sauvegardes régulières de mes fichiers <br>";
        $c = 0;
        while($c < 500){
            echo $c ." ". $b;
            $c++;
        }


        //------- 3 -------
        // $NbrCol : le nombre de colonnes
        // $NbrLigne : le nombre de lignes
        $NbrCol = 12;
        $NbrLigne = 12;
        // --------------------------------------------------------
        // on affiche en plus sur les 1ere ligne et 1ere colonne 
        // les valeurs a multiplier (dans des cases en couleur)
        // --------------------------------------------------------
        echo '<table border="1" width="400">';
        // 1ere ligne (ligne 0)
        echo '<tr>';
        echo '<td></td>';
        for ($j=1; $j<=$NbrCol; $j++) {
            echo '<td>'.$j.'</td>';
        }
        echo '</tr>';
        // -------------------------------------------------------
        // lignes suivantes
        for ($i=1; $i<=$NbrLigne; $i++) {
        echo '<tr>';
        for ($j=1; $j<=$NbrCol; $j++) {
            // 1ere colonne (colonne 0)
            if ($j==1) {
                echo '<td>'.$i.'</td>';
            }
            // colonnes suivantes
                if ($i==$j) {
                    echo '<td>';
                } else {
                    echo '<td>';
                }
            // ------------------------------------------
            // AFFICHAGE ligne $i, colonne $j
            echo $i*$j;
            // ------------------------------------------
            echo '</td>';
        }
        echo '</tr>';
        $j=1;
    }
    echo '</table>';
?>
</body>
</html>