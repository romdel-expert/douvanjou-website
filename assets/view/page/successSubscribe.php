<?php

    $err_id_user = '';

    $idUser = $_COOKIE["idUser"];

    if($idUser != '' ){
        payCommitController(intval($idUser));

        $to=$email;
        $subject="Confirmation de votre inscription";
        $message="Bonjour $sex $lName,"
                ."<br/><br/>"
                ."L'Association Douvanjou a le plaisir de vous confirmer que votre inscription a bien été enregistrée et vous souhaite la bienvenue parmi nous.<br/><br/>"
                ."L'accès à votre espace personnel et bien d'autres fonctionnalités seront bientôt disponibles car notre site en cours de création.<br/><br/>"
                ."L'équipe de Douvanjou";

        sendContactMail($to, $subject, $message);
    }else{
        $err_id_user = "Nouveau membre non identifié";
    }

?>


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
<p style="color: red;"> <?= $err_id_user ?></p>
<?php $content=ob_get_clean(); ?>

<?php require "./assets/view/gabarit.php" ?>