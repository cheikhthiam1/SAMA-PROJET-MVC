<?php 
    require_once(ROUTE_DIR.'vue/inc/header.html.php');
?>

    <div class="crate-admin"> 
      <div>
        <?php 
          require_once(ROUTE_DIR.'vue/inc/menu.html.php');
        ?>
      </div>
      <div class="form-inscription">
        <table id="customers">
            <tr>
                <th>Prenoms</th>
                <th>Noms</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>Moustapha</td>
                <td>Thiam</td>
                <td>1009pts</td>
            </tr>
            <tr>
                <td>Baye Ngagne</td>
                <td>Thiam</td>
                <td>978pts</td>
            </tr>
            <tr>
                <td>Papa</td>
                <td>Diouf</td>
                <td>870pts</td>
            </tr>
            <tr>
                <td>Cheikh Ibrahima</td>
                <td>Thiam</td>
                <td>750pts</td>
            </tr>
            <tr>
                <td>Daouda</td>
                <td>Gaye</td>
                <td>660pts</td>
            </tr>
            
            <tr>
                <td>Mansour</td>
                <td>Niang</td>
                <td>620pts</td>
            </tr>
        </table>
      </div>
    </div>



<?php require_once(ROUTE_DIR.'vue/inc/footer.html.php');?>
