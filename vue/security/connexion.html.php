<?php 
$arrayError = [];

if (isset($_SESSION['arrayError'])) {
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}

 require_once(ROUTE_DIR.'vue/inc/header.html.php');
?>


    

    <div class="form-inscription">
            <form  action="<?php echo WEB_ROUTE ?>" method="POST">
                <input type="hidden" name="controller" value="securityController">
                <input type="hidden" name="action" value="connexion">
                <h1 class="text-center primary-color">
                    Connexion
                </h1>
                <span><?php echo isset($arrayError['error']) ? $arrayError['error'] : '' ?></span>
            

                <div class="myGroup login">
                    <label for="">Login</label>
                    <input type="text" name="email" autofocus>
                </div>
                <span><?php echo isset($arrayError['email']) ? $arrayError['email'] : '' ?></span>
                

                <div class="myGroup login">
                    <label for="">Password</label>
                    <input type="password" name="password" >
                </div>
                <span><?php echo isset($arrayError['password']) ? $arrayError['password'] : '' ?></span>
                

                <div class="btn-registration">
                    <button class="mybtn">Connexion</button>
                </div>
                
                <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=inscription' ?>">S'inscrire</a>
            </form>
    </div>

<?php  require_once(ROUTE_DIR.'vue/inc/footer.html.php'); ?>