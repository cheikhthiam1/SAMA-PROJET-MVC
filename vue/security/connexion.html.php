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

</head>
<body>

    <div class="topnav" id="myTopnav">
        <img src="images/image6.jpg" id="logo">
        <h2 class="title">Le plaisir de jouer</h2>
    </div>

  
    <div class="add-user">
    <form class="form" action="<?php echo WEB_ROUTE ?>" method="POST">
    <input type="hidden" name="controller" value="securityController">
    <input type="hidden" name="action" value="connexion">
        <h1 class="text-center primary-color">
            Connexion
        </h1>
        <span><?php echo isset($arrayError['error']) ? $arrayError['error'] : '' ?></span>
        <div class="form-container">
        
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
            <div class="btn-container">
                <button type="submit" class="btn">
                    Connexion
                </button>
            </div>
            <div class="btn-container" style="margin-top: 5%;">
                <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=inscription' ?>">
               S’inscrire pour jouer

                </a>
            </div>
            
            
        </div>
    </form>
    </div>
</body>
</html>