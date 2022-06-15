<style>
    header {
        width: 100%;
        display: flex;
        justify-content: space-between;
        color: white;
        padding: 5% 0;
        
    }
    nav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;

  
}

a {
  float: left;
}

nav a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


nav a:hover {
  background-color: white;
}

    .logo {
        width: 30%;
        font-weight:bolder;
        font-family:'Times New Roman', Times, serif
    }

    
    nav a:hover{
        color: red;
        border-bottom: 2px solide glob;
    } 
</style>

<header>
   <!--  <div class="logo">
        <img src="images/ecole.png" alt="logo">
    </div> -->
    <nav>
        <a href="<?php echo WEB_ROUTE.'?controller=formController&view=accueil'?>">
            Accueil
        </a>
        <a href="<?php echo WEB_ROUTE.'?controller=userController&view=add.user'?>">
            Ajouter utilisateur
        </a>
        <a href="<?php echo WEB_ROUTE.'?controller=userController&view=list.user'?>">
            affiche utilisateur
        </a>

        <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=deconnexion'?>">
            Déconnexion
        </a>
       
    </nav>
</header>