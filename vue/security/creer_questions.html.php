
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/creer_questions.css">
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
         <a href="<?= ROUTE_DIR."?controller=securityController&view=liste_question"?> ">liste Question </a>
         <a href="<?= ROUTE_DIR."?controller=securityController&view=creer_admin"?> "> Creer Admin  </a>
         <a href="<?= ROUTE_DIR."?controller=securityController&view=liste_joueur" ?>"> Liste Joueur </a>
         <a href="<?= ROUTE_DIR."?controller=securityController&view=creer_questions" ?> ">Creer Question  </a>
        
         </ul>
        </div>
        <div class="section2">
<form action="<?WEB_ROUTE?>" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="controller" value="AdminController">
  <input type="hidden" name="action" value="CREER">
  <div class="cadree"
      <div class="saisirdesquestions">
         Question: <textarea name="question" id="" cols="20" rows="10"></textarea>
         <!.. <span><?php echo isset($arrayError['question']) ? $arrayError['question'] : '' ?></span> ..>
      </div><br>
      Nombre de point: <input type="number" name="numero" class="TAILLE"><br><br>
      Type de reponses:
      <select name="typeQuestion" id="typeQuestion" class="TAILLE1">
        <option value="">Donnez le type de reponse</option>
        <option value="simple">Reponse simple</option>
        <option value="unique">Reponse unique</option>
        <option value="multiple">Reponse a choix multiple</option>
      </select>
      <span id="plus">
        <i class="fa-solid fa-plus"></i><br><br>
      </span>
      <label id="error"></label>
      <div id="rep">

      </div>
      <button type="submit" class="buttonQuestion">Enregistrer</button>
</div>    
      
</form>  
        </div>
    </div>
</form> 
</body>
</html>