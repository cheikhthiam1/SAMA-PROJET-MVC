<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
form class="form" action="<?php echo WEB_ROUTE ?>" method="post">
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
        <label for="">Nom</label><br>
        <input type="text"><br>
        <label for="">Prenom</label><br>
        <input type="text"><br>
        <label for="">Login</label><br>
        <input type="text"><br>
        <label for="">Password</label><br>
        <input type="text"><br>
        <label for="">Confirm password</label><br>
        <input type="text"><br>
        <button>Suivant</button>
        <button>choisir un fichier</button>
        </div>
    </div>
</form> 
    
</body>

</html>