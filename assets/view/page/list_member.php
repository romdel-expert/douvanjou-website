<?php

    $listMembreEmpty= '';

    

?>


<?php $title="Liste de tous les utilisateurs"; ?>

<?php ob_start(); ?>

<div class="content-page before-page container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Téléphone</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if ($listUsers != null ) {  

                    for ($i=0; $i < count($listUsers); $i++) { 
                    
                ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $listUsers[$i]['f_name'].' '.$listUsers[$i]['l_name'] ?></td>
                            <td><?= $listUsers[$i]['e_mail'] ?></td>
                            <td><?= $listUsers[$i]['phone'] ?></td>
                        </tr>
            <?php  }
                
                }
            ?>
        </tbody>
    </table>
</div>
<p style="color: red;"> <?= $listMembreEmpty ?></p>
<?php $content=ob_get_clean(); ?>

<?php require "./assets/view/gabarit.php" ?>