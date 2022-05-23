// Programm für die Berechnung von Zinsen

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geldanlage</title>
    <style>
        table, td, th {border:1px solid black;}
    </style>
</head>
<body>
    <table>
   <?php
    $grundbetrag = floatval($_POST["grundbetrag"]);
    $laufzeit = floatval($_POST["laufzeit"]);
    $zinsatz = 4;
    echo "Grundbetrag: $grundbetrag € . <br>";
    echo "Laufzeit: $laufzeit Jahre . <br>";
    echo "zinsatz: $zinsatz % . <br>";

   echo "<tr>";
            echo "<th> Nach Jahr</th>";
            echo "<th> Betrag</th>";
   echo "</tr>";
   $y = 0;
    for($i=$laufzeit; $laufzeit>0; $laufzeit--){
        
        echo "<tr>";
        $y=$y+1;
        echo "<td>$y</td>";
        //echo $i;
        $grundbetrag = $grundbetrag *1.04;
        echo "<td> $grundbetrag</td>";
        //echo "</td>";
        echo "</tr>";

    }
    

   ?>
    </table>
</body>
</html>
