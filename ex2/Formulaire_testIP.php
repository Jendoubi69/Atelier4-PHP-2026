<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "Fonctions.php";
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <fieldset>
            <legend>Vérification d'adresse IPv4</legend>
            <input type="text" name="o1" size="3" maxlength="3"> .
            <input type="text" name="o2" size="3" maxlength="3"> .
            <input type="text" name="o3" size="3" maxlength="3"> .
            <input type="text" name="o4" size="3" maxlength="3"><br><br>
            <input type="submit" name="b1" value="Vérifier">
        </fieldset>
    </form>
    <?php
    if (isset($_POST['b1'])){
        $o1 = $_POST['o1'];
        $o2 = $_POST['o2'];
        $o3 = $_POST['o3'];
        $o4 = $_POST['o4'];
        $ip = $o1 . "." . $o2 . "." . $o3 . "." . $o4;
        if (valideIP($ip)){
            echo "<p>$ip est une adresse IPv4 valide.</p>";
        }else{
            echo "<p>$ip n'est pas une adresse IPv4 valide !</p>";
        }
    }
    ?>
</body>
</html>