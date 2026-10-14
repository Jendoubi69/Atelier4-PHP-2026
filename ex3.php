<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $TMOTS = [
        "jendoubi" => "jendoubi26",
        "bnhmz" => "saighi<3",
        "ines" => "laseed",
    ];
    ?>
    <h1>Mots de passe des utilisateurs</h1>
    <h3>Choisir un utilisateur</h3>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        Nom :
        <select name="nom">
            <?php
            foreach ($TMOTS as $nom => $mdp) {
                ?>
                <option value="<?=$nom?>"><?=$nom?></option>
                <?php
            }
            ?>
        </select>
        <input type="submit" name="b1" value="Afficher le mot de passe">
    </form>
    <h3>Choisir un mot de passe</h3>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        Mot de passe :
        <select name="mdp">
            <?php
            foreach ($TMOTS as $nom => $mdp) {
                ?>
                <option value="<?=$mdp?>"><?=$mdp?></option>
                <?php
            }
            ?>
        </select>
        <input type="submit" name="b2" value="Afficher le nom">
    </form>

    <?php
    if (isset($_POST['b1'])){
        $nom = $_POST['nom'];
        if (isset($TMOTS[$nom])){
            ?><p>Le mot de passe de <?= $nom ?> est : <?= $TMOTS[$nom] ?></p><?php
        }
    }
    if (isset($_POST['b2'])){
        $mdp = $_POST['mdp'];
        if (in_array($mdp, $TMOTS, true)){
        foreach ($TMOTS as $nom => $valeur) {
            if ($valeur === $mdp){
            ?><p>Le mot de passe <?= $mdp ?> correspond à : <?= $nom  ?></p><?php
        }}}
    }
    ?>
</body>
</html>