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
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>Christina Berglund</td>
                <td>Sweden</td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>Roland Mendel</td>
                <td>Austria</td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>Helen Bennett</td>
                <td>UK</td>
            </tr>
            
            <tr>
                <td>Paris spécialités</td>
                <td>Marie Bertrand</td>
                <td>France</td>
            </tr>
        </table>
      </div>
    </div>



<?php require_once(ROUTE_DIR.'vue/inc/footer.html.php');?>
