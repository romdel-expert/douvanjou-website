<?php

    session_start();

    require "./assets/modele/UserModele.php";

    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page d'accueil
     */
    function gotoHomePage(){
        require "./assets/view/page/home.php";
    }
    







    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page de don
     */
    function gotoFormGiven(){
        require "./assets/view/page/form_given.php";
    }









    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page contenant le formulaire de contact
     */
    function gotoContactPage(){
        require "./assets/view/page/contact.php";
    }










    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page qui pésente l'association
     */
    function gotoAssoPage(){
        require "./assets/view/page/the_association.php";
    }









    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page qui presente l'organisation 
     * de l'association, comité, membre etc
     */
    function gotoOrganisationPage(){
        require "./assets/view/page/our_organisation.php";
    }









    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page d'inscription
     */
    function gotoSubscribeForm(){
        require "./assets/view/page/subscribe.php";
    }

    








    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page qui présente les projets de l'association. 
     * Il s'agit des projets passé, en cours et à venir
     */
    function gotoProjectPage(){
        require "./assets/view/page/nos_projets.php";
    }









    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page d'actualité
     */
    function gotoActualitePage(){
        require "./assets/view/page/actualite.php";
    }









    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page de profil et contenant les 
     * activités personnelles d'un membre
     */
    function gotoToAcountPage(){
        require "./assets/view/page/acount.php";
    }










    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page d'inscription des bénévols
     */
    function gotoBenevolSubsForm(){
        require "./assets/view/page/benevol_subs.php";
    }









    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page d'incription des collaborateurs
     */
    function gotoFormSubsCollaborateur(){
        require "./assets/view/page/collab_subs.php";
    }









    /**
     * Undocumented function
     *
     * @param [type] $message
     * @return void
     * Redirection vers la page d'erreur
     */
    function sendError($message){
        $message=$message;
        require "./assets/view/page/error_page.php";
    }








    /**
     * Undocumented function
     *
     * @return void
     * Redirection vers la page de succès après une inscription
     */
    function gotoSuccessSubscribe(){
        require "./assets/view/page/successSubscribe.php";
    }









    function gotoPayPage(){
        require "./assets/view/page/payPage.php";
    }








    /**
     * Undocumented function
     *
     * @param [type] $fName
     * @param [type] $lName
     * @param [type] $sex
     * @param [type] $email
     * @param [type] $tel
     * @param [type] $adr
     * @param [type] $prof
     * @param [type] $regl_int
     * @return void
     * Cette fonction permet de faire appel à la fonction
     *  du modele qui permet d'inserer un noueau membre dans 
     * la base de données
     */
    function addMember($fName, $lName, $sex, $email, $tel, $adr, $prof, $regl_int){
        if ($fName!="" && $lName!="" && $sex!="" &&  $email!="" &&  $tel!="" &&  $adr!="" &&  $prof!="" &&  $regl_int!="") {
            $idNewUser = insertMember($fName, $lName, $sex, $email, $tel, $adr, $prof, $regl_int);

            if ($idNewUser != null) {

                $to=$email;
                $subject="Confirmation de votre inscription";
                $message="Bonjour $sex $lName,"
                        ."<br/><br/>"
                        ."L'Association Douvanjou a le plaisir de vous confirmer que votre inscription a bien été enregistrée et vous souhaite la bienvenue parmi nous.<br/><br/>"
                        ."L'accès à votre espace personnel et bien d'autres fonctionnalités seront bientôt disponibles car notre site en cours de création.<br/><br/>"
                        ."L'équipe de Douvanjou";

                sendContactMail($to, $subject, $message);
                
                // setcookie("idUser", $idNewUser,time()+3600*1, '/', '', true, true);

                
                require_once './assets/view/page/payPage.php';
            } else {
                $messErrSubs = "Votre inscription a échoué";
            }
            
            
        } 
    }












    /**
     * Undocumented function
     *
     * @param [type] $email
     * @return boolean
     * Vérification de l'existance de l'adresse email
     */
    function isEmailExistController($email){
        return isEmailExist($email);
    }









    


    /**
     * Undocumented function
     *
     * @param [type] $to
     * @param [type] $subject
     * @param [type] $message
     * @return void
     * Cette fonction permet l'envoi de mail
     */
    function sendContactMail($to, $subject, $message){
        $send_mail=false;
//        $from = "drivigo@hotmail.com";
        
        $headers = "MIME-Version: 1.0"."\r\n";
        $headers.="Content-Type: text/html; charset=UTF-8"."\r\n";
        $headers .= "From: contact@douvanjou-asso.fr"."\r\n";
//        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        
        if($to!="" && $subject!="" && $message!=""){
            if(mail($to, $subject, $message, $headers)){
                $send_mail=true;
            }else{
                $send_mail=false;
            }
        }  else {
            $send_mail=false;
        }
        return $send_mail;
    }










    function payCommitController($idUser){
        payCommitModele($idUser);
    }





    function getListMemberController(){
        
        $listUsers = getListMemberModel();

        require "./assets/view/page/list_member.php";
    }










    
