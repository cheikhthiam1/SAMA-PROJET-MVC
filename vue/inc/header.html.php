<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleforminscrip.css">
    <link rel="stylesheet" href="css/creer_admin.css">
    <title>Document</title>

</head>
<body>
<div class="topnav" id="myTopnav">
        <img src="images/image6.jpg" id="logo">
        <h2 class="title">Le plaisir de jouer</h2>
        <?php if (est_connect()) : ?>
            <div class="btn-registration">
                <a href="<?= ROUTE_DIR."?controller=securityController&view=deconnexion"?> " class="mybtn deconnect">Deconnexion</a>
            </div>
        <?php endif ?>
</div>