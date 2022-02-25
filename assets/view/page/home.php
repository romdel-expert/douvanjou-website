
<?php $title="Association DOUVANJOU"; ?>

<?php ob_start(); ?>


<?php require('./assets/view/page/home/carousel.php'); ?>




<section class="container-fluid content-page">

    
    <?php 
    
        require('./assets/view/page/home/structure.php');


        require('./assets/view/page/home/sector.php');

        
        require('./assets/view/page/home/together.php');

        require('./assets/view/page/home/project_bloc.php');
    
    ?>

    
</section>


<?php $content=ob_get_clean(); ?>

<?php require "./assets/view/gabarit.php"; ?>