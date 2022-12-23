<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier2</title>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact</title>
</head>
<body>

    <?PHP
    //php -S 127.0.0.1:8080
    $lines = file(
        'http://bienvu.net/misc/customers.csv',
        FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES
    );
    
    
    if ($lines) {
        foreach ($lines as $line) {
            echo htmlspecialchars($line) . PHP_EOL;
        }
    }
    ?>
</body>
</html>