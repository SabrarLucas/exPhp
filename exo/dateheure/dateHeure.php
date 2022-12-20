<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?PHP
    //php -S 127.0.0.1:8080
        echo "Point 1<br>";
        $date_test = "2019-07-14";
        $good_format=strtotime ($date_test);
        echo "Semaine n°".date('W',$good_format);

        echo "<br><br>";

        echo "Point 2<br>";
        $firstDate = new DateTime();
        $secondDate = new DateTime("2023-02-04");
        $intvl = $firstDate->diff($secondDate);

        echo "Date du jour : " . $firstDate->format("d-m-Y") . "<br>";
        echo "Date de fin : " . $secondDate->format("d-m-Y") . "<br>";
        echo $intvl->days . " jours avant la fin";

        echo "<br><br>";

        echo "Point 3<br>";
        if (date("L", mktime(0, 0, 0, 1, 1, "2023")) == 1)
        {
            echo "Année bissextile";
        }
        // l'année n'est pas bissextile
        else
        {
            echo "Année non bissextile";
        }

        echo "<br><br>";

        echo "Point 4<br>";
        $oDate =  DateTime::createFromFormat("d/m/Y", "32/17/2019");

        $errors = DateTime::getLastErrors();
        
        if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
            echo "Date non valide";
        }
        else{
        echo "Date valide";
        }

        echo "<br><br>";

        echo "Point 5<br>";
        $heure = new DateTime();
        echo "Il est ".$heure->format("H\hi");

        echo "<br><br>";

        echo "Point 6<br>";
        $ladate = new DateTime();
        echo date('d-m-Y',strtotime('+1 month',strtotime($ladate->format("d-m-Y"))));

        echo "<br><br>";

        echo "Point 7<br>";
        $timstamp = '1000200000';
        $format = "l d M Y à H:i:s";
        echo date($format, $timstamp);
    ?>
</body>
</html>