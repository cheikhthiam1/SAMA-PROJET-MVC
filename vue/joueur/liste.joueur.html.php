
   <?php require_once(ROUTE_DIR.'vue/inc/menu.html.php'); ?>
  
   <div class="global">
   <div class="TABLEAU">
  <br>
   <div>
   <?php if(empty($users)):?>
       <h1>Aucun résultat</h1>
   <?php endif;?>
   <?php if(!empty($users)):?>
           <table class="table-style">
           <thead>
           <tr>
               <th>Nom</th>
               <th>Prenom</th>
               <th>Email</th>
               
           </tr>
           </thead>
               <?php foreach ($users as $key => $val):?>
                  
                   <tr>
                       <td><?php echo $val['nom'];?></td>
                       <td><?php echo $val['prenom'];?></td>
                       <td><?php echo $val['email'];?></td>
                       <td>
                           <a href="<?= WEB_ROUTE.'/?controller=securityController&view=supprimer&id='.$val['id']?>">Supprimer</a>
                           <a href="<?= WEB_ROUTE.'/?controller=securityController&view=edit&id='.$val['id']?>">Modifier</a>
                       </td>
                   </tr>
                   
               <?php endforeach;?>
           </table>
   <?php endif;?>
   </div>
  </div>
   </div>
</body>

</html>

