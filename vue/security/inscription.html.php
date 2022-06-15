<?php
$arrayError = [];


if (isset($_SESSION['arrayError'])) {
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleforminscrip.css">
    <title>Document</title>
</head>
<body>
    <div class="cadre">
        <h1>S'inscrire</h1>
       <form action="<?=WEB_ROUTE?>" method="POST">
        <input type="hidden" name="controller" value="securityController">
        <input type="hidden" name="action" value="inscription">
            <div class="labels">
                <label for="">Nom</label><br>
                <input type="text" name="nom"><br>
                <span><?php echo isset($arrayError['nom']) ? $arrayError['nom'] : '' ?></span>
            </div>
            <div class="labels">
                <label for="">Prénom</label><br>
                <input type="text" name="prenom"><br>
                <span><?php echo isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ?></span>
            </div>
            <div class="labels">
                <label for="">E-mail</label><br>
                <input type="text" name="email"><br>
                <span><?php echo isset($arrayError['email']) ? $arrayError['email'] : '' ?></span>
            </div>
            <div class="labels">
                <label for="">Password</label><br>
                <input type="password" name="password"><br>
                <span><?php echo isset($arrayError['password']) ? $arrayError['password'] : '' ?></span>
            </div>
            <div class="labels">
                <label for="">Confirm password</label><br>
                <input type="password" name="confirmPassword"><br>
                <span><?php echo isset($arrayError['confirmPassword']) ? $arrayError['confirmPassword'] : '' ?></span>

            </div>
            <div>
                <button>Enregistrer</button>
            </div>
            <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=connexion' ?>">Se connecter</a>
       </form>
    </div>
</body>
</html>