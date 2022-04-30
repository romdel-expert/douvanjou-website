
<?php $title="Devenir membre association Douvannjou"; ?>

<?php ob_start(); ?>

<div class="content-page before-page container-fluid">
    <div class="commit-member-page">
        <h4>La dernière action pour rejoindre la famille DOUVANJOU</h4>

        <p>
            Veuillez régler les frais d'adhésion pour finaliser votre inscription
        </p>

        <h4 style="margin: 40px 0;">20.00 Euros</h4>

        <?php require_once 'form_adhesion.php'?>
        <!-- <a class="btn btn-gnl" href="<?= "../../index.php?action=home"?>">Adhérer</a> -->
    </div>
</div>

<?php $content=ob_get_clean(); ?>

<?php require "./assets/view/gabarit.php" ?>