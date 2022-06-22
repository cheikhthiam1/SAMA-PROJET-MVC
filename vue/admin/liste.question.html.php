<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/* le div parent */
.container{
 display: flex;
 flex-direction: column;
}
/* la partie header */
.header{
  width: 100%;
 background-color: red;
  height: 50px;
  flex:1;

}
.header h1{
  color: white;
  margin-left: 30%;
}
.deconn{
  margin-left: 87%;
  margin-top: -3.7%;
}
.deconn button{
  border-radius: 10px;
  height: 30px;
  font-size: 20px;
}
/* la partie du contenu */
.content{
  border: solid 2px rgb(0, 81, 255);
  margin-top: 50px;
  height: 70vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
/*   background: white; */

}
.div-content{
  border: solid 2px rgb(187, 21, 9);
 width: 85%;
 margin-left: 30px;
}
.div-nav{
/*   border: solid 2px rgb(36, 165, 19); */
  width: 15%;
  height: 100%;
  display: flex;
  flex-direction: column;
}
/*  .avatar{
  border: solid 2px rgb(36, 165, 19);
  height: 30%;
  display: flex; 
} */
.image{
  border: solid 2px rgb(19, 29, 165);
  height: 50%;
  width: 50%;
  border-radius: 50% 50% ;
  margin-top: 20px;
}
.text{
  border: solid 2px rgb(19, 29, 165);
  width: 50%;
}
nav{
  border: solid 2px rgb(19, 29, 165);
  height: 70%;
}
.section1{
  width: 25%;
  height:400px ;
  background:#ccc;
  margin: 3% auto;
}
  .avatar{
    width: 100%;
    height:150px;
    background: red;
  }

.section2{
  width: 50%;
  height:400px ;
  background:white;
  margin: 3% auto;
  box-shadow: 5px 5px 5px 5px red;
} 
a{
text-decoration: none;
color: white;
font-size: larger;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
a:hover{
    background:red; 
    color: white;    
}
    </style>
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
         <a href="<?= ROUTE_DIR."?controller=securityController&view=liste_question"?> ">liste Question </a><br>
         <a href="<?= ROUTE_DIR."?controller=securityController&view=creer_admin"?> "> Creer Admin  </a><br>
         <a href="<?= ROUTE_DIR."?controller=securityController&view=liste_joueur" ?>"> Liste Joueur </a><br>
         <a href="<?= ROUTE_DIR."?controller=securityController&view=creer_questions" ?> ">Creer Question  </a><br>
        
        
         </ul>
        </div>
        <div class="section2">
     <p>list question</p>
</form> 
</body>
</html>