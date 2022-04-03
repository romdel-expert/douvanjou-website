
<?php $title="Devenir membre association Douvannjou"; ?>

<?php ob_start(); ?>

<div class="content-page before-page container-fluid">
    <div class="success-subs">
        <h4>Votre inscription a été réalisée avec succès</h4>

        <p>
            L'Association Douvanjou vous souhaite la bienvenue et sachez que vous.
        </p>

        <a class="btn btn-gnl" href="<?= "../../index.php?action=home"?>">Retour à l'accueil</a>
    </div>
</div>

<?php $content=ob_get_clean(); ?>

<?php require "./assets/view/gabarit.php" ?>