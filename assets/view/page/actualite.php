<?php $title="Actualité de Douvanjou"; ?>

<?php ob_start(); ?>


<section class="content-page before-page container-fluid">
    <h1 class="text-center bgd-fade p-3 text-blue" style="text-transform: uppercase; font-weight: normal; font-size: 200%;">Actualité de Douvanjou</h1>
</section>

<?php $content=ob_get_clean(); ?>

<?php require "./assets/view/gabarit.php"; ?>