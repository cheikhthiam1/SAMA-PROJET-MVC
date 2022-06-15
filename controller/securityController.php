<?php 
if($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == "connexion") {

            require_once(ROUTE_DIR.'vue/security/connexion.html.php');
        }elseif ($_GET['view'] == "accueil1") {
            require_once(ROUTE_DIR.'vue/accueil1.html.php');
        } elseif ($_GET['view'] == "deconnexion") {
            destroy_session();
            require_once(ROUTE_DIR.'vue/security/deconnexion.html.php');
        }elseif($_GET['view'] == "inscription") {
            require_once(ROUTE_DIR.'vue/security/inscription.html.php');
        } elseif($_GET['view'] == "accueil") {
            require_once(ROUTE_DIR.'vue/security/accueil1.html.php');
        }
        elseif($_GET['view'] == "deconnexion") {
            require_once(ROUTE_DIR.'vue/security/connexion.html.php');
        } elseif($_GET['view'] == "creer_question") {
            require_once(ROUTE_DIR.'vue/security/creer_question.html.php');
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['action'])) {
       if ($_POST['action'] =="connexion") {
          connexion($_POST);
       }elseif ($_POST['action']=="inscription") {
           inscription($_POST);
       }
    
}
}
function inscription($inscription) {
    $arrayError = [];
    extract($inscription);
    
            valid_champ_user($arrayError, $nom, 'nom');
            valid_champ_user($arrayError, $prenom, 'prenom');
            valid_champ_user($arrayError, $email, 'email');
            valid_champ_user($arrayError, $password, 'password');
            valid_champ_user($arrayError, $confirmPassword, 'confirmPassword');
            if (empty($arrayError)) {
                
                $user = [
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "email" => $email,
                    "password" => $password,
                ];
                
                addUser($user);
                $_SESSION['userConnected'] = $user;
                header("location:".WEB_ROUTE."?controller=securityController&view=connexion");
               
            } else {
                $_SESSION['arrayError'] = $arrayError;
                header("location:".WEB_ROUTE."?controller=securityController&view=inscription");
            }

            
}




function connexion($data) {
    $arrayError = [];
    extract($data);
    
    valid_champ_user($arrayError, $email, 'email');
    valide_password($arrayError, $password, 'password');
    
    
    if (empty($arrayError)) {
        
        $result = login_password_exist($email, $password);
        
        if ($result != null) {
            $_SESSION['userConnected'] = $result;
            header("location:".WEB_ROUTE."?controller=securityController&view=accueil1");
            
        } else {
            $arrayError['error'] = "email ou mot de passe incorrect";
            $_SESSION['arrayError'] = $arrayError;
            header("location:".WEB_ROUTE."?controller=securityController&view=connexion");
        }
    } else {
        $_SESSION['arrayError'] = $arrayError;
        header("location:".WEB_ROUTE."?controller=securityController&view=connexion");
    }
}

  function deconnexion(){
        unset($_SESSION['userConnected']); 
  }
 
    ?>