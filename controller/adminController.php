<?php 

if($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == "add.user") {
            require_once(ROUTE_DIR.'vue/add_user.html.php');
        }elseif ($_GET['view'] == "delete") {
            if(isset($_GET['id'])){
                delete($_GET['id']);
                header("location:".WEB_ROUTE."?controller=userController&view=list.user");
            }
        }elseif ($_GET['view'] == "edit") {
            $user=get_user_by_id($_GET['id']);
            require_once(ROUTE_DIR.'vue/add_user.html.php');

        }elseif($_GET['view'] == "creer_question") {
            require_once(ROUTE_DIR.'vue/admin/creer.questions.html.php');

        }elseif($_GET['view'] == "creer_admin") {
            require_once(ROUTE_DIR.'vue/admin/creer.admin.html.php');

        }elseif($_GET['view'] == "liste_question") {
            require_once(ROUTE_DIR.'vue/admin/liste.question.html.php');

        }elseif($_GET['view'] == "liste_joueur") {
            $users = get_list_user();
            require_once(ROUTE_DIR.'vue/admin/liste.joueur.html.php');
        }
        
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == "addQuestion") {
            unset($_POST['action']);
            unset($_POST['controller']);
            new_question($_POST);
        }
    }
}

//FONCTION POUR AJOUTER OU MODIFIER
/* function add(array $data)
    $arrayError = [];
    extract($data);
    valid_champ_user($arrayError, $_POST['nom'], 'nom');
    valid_champ_user($arrayError, $_POST['prenom'], 'prenom');
    valid_champ_user($arrayError, $_POST['telephone'], 'telephone');
    valid_champ_user($arrayError, $_POST['email'], 'email');
    valid_champ_user($arrayError, $_POST['password'], 'password');
    valid_champ_user($arrayError, $_POST['confirmPassword'], 'confirmPassword');
    if (empty($arrayError)) 
        f($data['id'] != ""){

            modification($data);
        }else{
            
            $user = [
                "nom" => $_POST['nom'],
                "prenom" => $_POST['prenom'],
                "telephone" => $_POST['telephone'],
                "email" => $_POST['email'],
                "password" => $_POST['password'],
                "role" => "ROLE_ADMIN",
                "id"=>uniqid()
            ] */
function new_question($data){
    $arrayError = [];
    extract($_POST);

            valid_champ_user($arrayError, $libelle, 'libelle');
            valid_champ_user($arrayError, $nombredepoint, 'nombredepoint');

            if (!isset($reponse)) {
                $arrayError["reponse"] = "Veuillez choisir une reponse";
            }

            if (empty($arrayError)) {                
                    
                    add_question($data);
                    header("location:".WEB_ROUTE."?controller=adminController&view=liste_question");
                
            } else {
                $_SESSION['arrayError'] = $arrayError;
                header("location:".WEB_ROUTE."?controller=adminController&view=creer_question");
            }

}