
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>


<style>
      .saisirdesquestions input {
        border: 1px solid #3792E5;
        width: 40%;
        height: 30px;
        margin-top: 3%;
    }
    
    .TAILLE{
        width: 30px;
        border: 2px  solid #3792E5;
        border-radius: 4px 4px;


    }
    .cadree {
        border:2px solid;
        width:30em;
        margin-left: 10%;
        padding: 10px;
    }
    
    .TAILLE2{
        border: 2px  solid #3792E5;
        width: 50% ;
        height: 20px;
        border-radius: 10px 5px;

    }
    </style>
    </head>
    <body>
    <?php require_once(ROUTE_DIR . 'vue/inc/menu.html.php'); ?>
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
    </body>
    </html>