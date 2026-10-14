<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    if (isset($_GET['prenom']) && isset($_GET['repetition'])){
        $prenom = $_GET['prenom'];
        $rep = $_GET['repetition'];
        if (!ctype_digit($rep)){
            echo "<p>La répétition doit être un entier positif.</p>";
        }else{
            $rep = (int)$rep;
            if ($rep >= 10){
                echo "<p>La répétition doit être inférieure à 10.</p>";
            }else{
                for ($i = 0; $i < $rep; $i++) {
                    echo "<p><b>Bienvenue $prenom</b></p>";
                }
            }
        }
    }else{
        echo "<p>Paramètres inexistants.</p>";
    }
    ?>
</body>
</html>
