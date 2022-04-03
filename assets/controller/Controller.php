<?php

    require "./assets/modele/UserModele.php";

    function countMembers(){
        require "./assets/view/page/home.php";
    }
    

    function gotoFormGiven(){
        require "./assets/view/page/form_given.php";
    }


    function gotoContactPage(){
        require "./assets/view/page/contact.php";
    }


    function gotoAssoPage(){
        require "./assets/view/page/the_association.php";
    }


    function gotoOrganisationPage(){
        require "./assets/view/page/our_organisation.php";
    }


    function gotoSubscribeForm(){
        require "./assets/view/page/subscribe.php";
    }

    
    function gotoProjectPage(){
        require "./assets/view/page/nos_projets.php";
    }


    function gotoActualitePage(){
        require "./assets/view/page/actualite.php";
    }


    function gotoToAcountPage(){
        require "./assets/view/page/acount.php";
    }


    function gotoBenevolSubsForm(){
        require "./assets/view/page/benevol_subs.php";
    }


    function gotoFormSubsCollaborateur(){
        require "./assets/view/page/collab_subs.php";
    }


    function sendError($message){
        $message=$message;
        require "./assets/view/page/error_page.php";
    }




    function gotoSuccessSubscribe(){
        require "./assets/view/page/successSubscribe.php";
    }






    function addMember($fName, $lName, $sex, $email, $tel, $adr, $prof, $regl_int){
        if (!isEmailExist($email)) {
            insertMember($fName, $lName, $sex, $email, $tel, $adr, $prof, $regl_int);

            $to=$email;
            $subject="Confirmation de votre inscription";
            $message="Bonjour $sex $lName,"
                    ."<br/>"
                    ."L'Association Douvanjou a le plaisir de vous confirmer que votre inscription a bien été enregistrée et vous souhaite la bienvenue parmi nous.<br/><br/>"
                    ."L'accès à votre espace personnel et bien d'autres fonctionnalités seront bientôt disponibles car notre site en cours de création.<br/><br/>"
                    ."L'équipe de Douvanjou";

            sendContactMail($to, $subject, $message);
            header("Location: ../../index.php?action=success_sub");
            // require "./assets/view/page/successSubscribe.php";
        } else {
            $messErrSubs="Attestion une inscription est déjà enregistrée avec cette adresse e-mail.";
            require "./assets/view/page/subscribe.php";
        }
        
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










    
