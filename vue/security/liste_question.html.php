<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/listequestions.css">
</head>
<body>
<form class="form" action="<?php echo WEB_ROUTE ?>" method="post">
    <input type="hidden" name="controller" value="securityController">
    <input type="hidden" name="action" value="accueil">
    <div class="container">
        <div class="header">
            <h1>CREER ET PARAMETRER VOS QUIZZ</h1>
            <div class="deconn"><button><a href="<?php echo WEB_ROUTE.'?controller=securityController&view=deconnexion'?>">Deconnexion</a></button></div>
        </div>
        <div class="content">
        <div class="section1">
         <div class="avatar">

         </div>
         <ul>
         <a href=""> <li>liste Question</li>   </a>
         <a href="<?= ROUTE_DIR."?controller=securityController&view=accueil1" ?>"> <li>Creer Admin</li>  </a>
         <a href=""> <li>Liste Joueur</li>  </a>
         <a href=""> <li>Creer Question</li>  </a>
         
        
         </ul>
        </div>
        <div class="section2">
        <label for="">les langages Web</label><br>
        <input type="text"><br>
        <label for="">D'ou vient le Corona</label><br>
        <input type="text"><br>
        <label for="Quel terme definit le langage qui s'adapte sur Android et sur IOS"></label><br>
        <input type="text"><br>
        <label for="">Quel est la premiere ecole de codage gratuite au senegal</label><br>
        <input type="text"><br>
        <label for="">Les precurseurs de la revolution digitale</label><br>
        <input type="text"><br>
        <button>Creer Compte</button>
        <button>choisir un fichier</button>
        </div>
    </div>
</form> 
</body>
</html>