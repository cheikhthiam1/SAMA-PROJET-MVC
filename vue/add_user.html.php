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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        .tu{
            background-image:url(images/inscrip.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }
        </style>
</head>
<body class="tu">
<?php require_once(ROUTE_DIR.'vue/inc/menu.html.php'); ?>
    <div class="add-use">
    <form class="form" action="<?php echo WEB_ROUTE ?>" method="post">
    <input type="hidden" name="controller" value="userController">
    <input type="hidden" name="action" value="<?=isset($user['id']) ? 'edit' : 'add.user' ?>">
    <input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id'] : '' ?>">

        <div class="logo">
            <img src="images/ecole.png" id="img-logo" alt="">
        </div>
        <h1 class="text-center primary-color">
            Ajout utilisateur
        </h1>

        <div class="form-container">
        <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom"
                placeholder="Veuillez saisir votre nom"
                class="form-input">
                <span><?php echo isset($arrayError['nom']) ? $arrayError['nom'] : '' ?></span>
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom"
                placeholder="Veuillez saisir votre prénom"
                class="form-input">
                <span><?php echo isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ?></span>
            </div>
            <div class="form-group">
                <label>Téléphone</label>
                <input type="text" name="telephone"
                placeholder="Veuillez saisir votre numero de téléphone"
                class="form-input">
                <span><?php echo isset($arrayError['telephone']) ? $arrayError['telephone'] : '' ?></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email"
                placeholder="Veuillez saisir votre email"
                class="form-input">
                <span><?php echo isset($arrayError['email']) ? $arrayError['email'] : '' ?></span>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password"
                placeholder="Veuillez saisir un mot de passe" 
                class="form-input">
                <span><?php echo isset($arrayError['password']) ? $arrayError['password'] : '' ?></span>
            </div>

            <div class="form-group">
                <label>Confirmez le mot de passe</label>
                <input type="password" name="confirmPassword"
                placeholder="Veuillez confirmer votre mot de passe" 
                class="form-input">
                <span><?php echo isset($arrayError['confirmPassword']) ? $arrayError['confirmPassword'] : '' ?></span>
            </div>
            
            <div class="btn-container">
                <button type="submit" class="btn">
                    Enregistrer
                </button>
            </div>
            
        </div>
    </form>
    </div>
</body>
</html>