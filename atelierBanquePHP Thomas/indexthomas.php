<?php
    // On doit toujours activer manuellement la session
    session_start();
    if(!isset($_SESSION["user"])) {
        header("Location:login.php");
        exit;
    }
    // Je charge d'abord les fichiers dont j'ai besoin
    // Require car le ne peut pas fonctionner sans données
    require "model/accounts.php";
    // Include car le header est optionnel
    include "layout/header.php";
    // Récupération de la liste des comptes via la fonction
    $accounts = get_accounts();
?>

<h2>Vos comptes en banque</h2>
<div class="row">
    <!-- On parcours le tableau de compte à l'aide d'une foreach à syntaxe simplifiée -->
    <?php foreach($accounts as $index => $account): ?>
            <div class='col-6 col-md-4'>
                <ul class="list-group my-5">
                    <?php foreach($account as $key=>$value): ?>
                        <li class="list-group-item"><?php echo "$key : $value"; ?></li>
                    <?php endforeach ?>
                        <li class="list-group-item text-center">
                            <!-- On passe dans l'url la position du compte à afficher sur la page single -->
                            <a class="btn btn-dark text-white px-5" href="singleAccount.php?index=<?php echo $index;?>">Voir</a>
                        </li>
                </ul>
            </div>
    <!-- On ferme la foreach (équivalent de l'accolade fermante) -->
    <?php endforeach; ?>
</div>

<?php
    include "layout/footer.php";
?>