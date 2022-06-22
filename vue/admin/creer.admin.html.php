<?php
$arrayError = [];


if (isset($_SESSION['arrayError'])) {
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR.'vue/inc/header.html.php');

?>
    <div class="crate-admin"> 
      <div>
        <?php 
          require_once(ROUTE_DIR.'vue/inc/menu.html.php');
        ?>
      </div>
      <div class="form-inscription">
          <form action="<?=WEB_ROUTE?>" method="POST">
             <!--  <h1>S'inscrire</h1> -->
              <input type="hidden" name="controller" value="securityController">
              <input type="hidden" name="action" value="inscription">
  
              <div class="groupForm">
                  <div class="myGroup">
                      <label for="">Nom</label>
                      <input type="text" name="nom">
                      <span><?php echo isset($arrayError['nom']) ? $arrayError['nom'] : '' ?></span>
                  </div>
                  
                  <div class="myGroup">
                      <label for="">Prenom</label>
                      <input type="text" name="prenom">
                      <span><?php echo isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ?></span>
                  </div>
              </div>
  
              <div class="groupForm">
                  <div class="myGroup">
                      <label for="">Email</label>
                      <input type="text" name="email">
                      <span><?php echo isset($arrayError['email']) ? $arrayError['email'] : '' ?></span>
                  </div>
                  
                  <div class="myGroup">
                      <label for="">Password</label>
                      <input type="password" name="password">
                      <span><?php echo isset($arrayError['password']) ? $arrayError['password'] : '' ?></span>
                  </div>
              </div>
              
              <div class="myGroup">
                  <label for="">Confirm password</label>
                  <input type="password" name="confirmPassword">
              </div>
              <span><?php echo isset($arrayError['confirmPassword']) ? $arrayError['confirmPassword'] : '' ?></span>
              
              <div class="btn-registration">
                  <button class="mybtn">Inscription</button>
              </div>
         </form>
      </div>
    </div>

<?php require_once(ROUTE_DIR.'vue/inc/footer.html.php');?>
 