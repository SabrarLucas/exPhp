<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>
<body>
    <?PHP
    //php -S 127.0.0.1:8080
    function gen_lien($lien, $txt){
        echo "<a href=$lien>$txt</a>";
    };
    gen_lien("https://www.reddit.com/", "Reddit Hug");

    echo '<br>';
    echo '<br>';

    $tab = array(4, 3, 8, 2);
    function somme($tab){
        echo array_sum($tab);
    }
    somme($tab);

    echo '<br>';
    echo '<br>';

    function complex_password($motpasse){
        echo preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/', $motpasse);
    }
    complex_password("TopSecret42");
    ?>
</body>
</html>