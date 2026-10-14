<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inscription a la visite guidée</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        Votre nom : <input type="text" name="nom"><br>
        Votre prenom : <input type="text" name="prenom"><br>
        Votre age : <input type="number" name="age"><br>
        Votre adresse mail : <input type="text" name="email"><br>
        <input type="submit" name="b1" value="Inscription"><br>
        <input type="submit" name="b2" value="Afficher">
    </form>
    <?php
    function nettoyer($v) {
        return htmlspecialchars(strip_tags(trim($v)));
    }
    if (isset($_POST['nom'])){
        $nom = nettoyer($_POST['nom']);
        $prenom = nettoyer($_POST['prenom']);
        $age = nettoyer($_POST['age']);
        $email = nettoyer($_POST['email']);
        if (isset($_POST['b1'])){
            if ($nom != '' && $prenom != '' && $age != '' && $email != '' && str_contains($email,'@')){
                echo "<script>alert(\"L'inscription pour : $nom $prenom a été prise en compte.\")</script>";
            }else{
                echo "<script>alert(\"L'inscription impossible\")</script>";
            }
        }
        if (isset($_POST['b2'])){
            if (!($nom != '' && $prenom != '' && $age != '' && $email != '' && str_contains($email,'@'))){
                die("<script>alert(\"L'inscription impossible\")</script>");           
            }else{
        ?>
        <table border="1">
            <tr><th>cle</th><th>contenu</th></tr>
            <?php
            foreach ($_POST as $key => $value) {
                ?>
                <tr><td><?=nettoyer($key)?></td><td><?=nettoyer($value)?></td></tr>
                <?php
            }
            ?>
        </table>
        <h3>var_dump</h3>
        <pre>
        <?php
        var_dump($_POST);
        ?>
        </pre>
        <h3>print_r</h3>
        <pre>
        <?php
        print_r($_POST);
        ?>
        </pre>
        <?php
    }}}
    ?>
</body>
</html>