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
          <form action="<?=WEB_ROUTE ?>" method="POST">
              <!-- <h2>S'inscrire</h2> -->
              <input type="hidden" name="controller" value="adminController">
              <input type="hidden" name="action" value="addQuestion">
  
              <div class="groupForm">
                  <div class="myGroup">
                      <label for="">Libelle</label>
                      <textarea type="text" name="libelle" cols="70" rows="10" class="mytextarea"></textarea>
                      <span><?php echo isset($arrayError['libelle']) ? $arrayError['libelle'] : '' ?></span>
                  </div>

              </div>
  
                <div class="myGroup">
                  <label for="">Nombre de point</label>
                  <input type="number" name="nombredepoint">
                  <span><?php echo isset($arrayError['nombredepoint']) ? $arrayError['nombredepoint'] : '' ?></span>

                </div>
                
            
            <div class="groupForm">
                <div class="myGroup">
                    <label for="">Type de reponse</label>
                    <select class="myselect" name="typedereponse">
                      <option value="simple">simple</option>
                      <option value="multiple">multiple</option>
                      <option value="unique">unique</option>
                    </select>

                </div>
                <div class="myGroup" >
                  <span class="mybtn plus" id="mybtn" >+</span>
                  <span><?php echo isset($arrayError['reponse']) ? $arrayError['reponse'] : '' ?></span>
                </div>

            </div>
              
              <div class="myGroup" id="myGroupreponse"></div>
              
              <div class="btn-registration">
                  <button class="mybtn">Valider</button>
              </div>
         </form>
      </div>
    </div>

<?php require_once(ROUTE_DIR.'vue/inc/footer.html.php');?>
<script>
    const mybtn = document.getElementById('mybtn')
    const reponse = document.getElementById ("myGroupreponse")
    let i = 0
    mybtn.addEventListener("click", () =>{
        i++
        const div = document.createElement("div")
        div.innerHTML = 
        `
            <label for="">Reponse ${i} </label>
            <input type="text" name="reponse[]">
            <input type="checkbox" name="reponseExact[]" >
            <input type="radio" name="reponseExact" >
        `
        reponse.appendChild(div)
    })
</script>