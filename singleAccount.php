 <?php 
/* include("layout/header.php");
echo " test";
include "layout/footer.php"; */
?>
 
<?php
 require "model/accounts.php";
 include "layout/header.php";
 $accounts =  get_accounts();
if(isset($_GET["index"]) && isset($accounts[$_GET["index"]])){
  $account  = $accounts[$_GET["index"]];
}
 else {
   $error = "Une erreur est survenue";
 }

 ?>

 <?php if(isset($account)):?>
    <h2><?php echo $account["name"]; ?></h2>

 <?php else : ?>
    <?php echo $error ;?>
 <?php endif ?>





<?php
 include "layout/footer.php";
?>