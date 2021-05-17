 <?php 
/* include("layout/header.php");
echo " test";
include "layout/footer.php"; */
?>
 
<?php
 require "model/accounts.php";
 include "layout/header.php";
 $accounts =  get_accounts();
?>

<h2>Vos comptes </h2>
<div class="row">
<?php foreach($accounts as $account): ?><!--    pour chaque compte (account) de $accounts  OU  foreach($accounts as $key=>$account) $key = clef numérique des tableau*/  -->
 
   <div class='col-l col-md-4'>
     <ul class="list-group my-5">
       <?php foreach($account as $key=>$value):?>
         <li class="list-group-item"><?php echo "$key : $value"; ?></li>
       <?php endforeach ?>
         <li class="list-group-item text-center"><a class="btn btn-dark text-white px-4" href="singleAccount.php"><?php echo $account['name']; ?></a>
        </li>
     </ul>
   </div>      
        
 <?php endforeach; ?>
</div>



<?php
 include "layout/footer.php";
?>