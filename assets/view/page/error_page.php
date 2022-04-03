
<?php $title="Association Douvanjou"; ?>

<?php ob_start();?>

<div class="content-page before-page container-fluid"> 
    <div class="error-page">
        <h4>Une erreur est survenue :</h4>
        <p>
            <?= $message ?>
        </p>
    </div>
</div>
<?php $content=ob_get_clean();?>
<?php require "./assets/view/gabarit.php"?>