
 
<?php
 include "layout/header.php";
if(!empty($_POST)) {
$account =$_POST;

}

?>
<?php ?>

<div class="row">
  <aside class="col-12 col-md-4">
    <h2>Créer un compte</h2>
     <form action="" method="post"> 
      <input name="name" class="form-control my-2" type="text">
      <input name="amount" class="form-control my-2" type="number">
      <input name="addAccount" class="form-control btn btn-danger my-2" type="submit" value="Envoyer">
    </fomr> 

  </aside>
  <section class="col-12 col-md-8">
    <h3>Vos infos</h3>
    <?php if(isset($account)): ?>
      <ul class="list-group my-2">
        <li class="list-group-item"><?php echo htmlspecialchars($account["name"]); ?></li>
        <li class="list-group-item"><?php echo htmlspecialchars($account["amount"]); ?></li>
      </ul>
    <?php endif;?>  
  </section>
</div>



 <?php include "layout/footer.php";?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
 <script src="js/vendor/modernizr-3.11.2.min.js"></script>
 <script src="js/plugins.js"></script>
 <script src="js/main.js"></script>
 </body>
</html>