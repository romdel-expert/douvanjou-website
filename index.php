<?php


  error_reporting(E_ALL);
  ini_set("display_errors", 1);


  require "./assets/controller/Controller.php";

  try {
    if (isset($_GET['action'])) {
      $action=$_GET['action'];
      if ($action=="home") {

        countMembers();

      }elseif($action=="form_given"){

        gotoFormGiven();
        
      }elseif ($action=="contact") {


        gotoContactPage();

      }elseif ($action=="the_asso") {


        gotoAssoPage();

      } elseif ($action=="our_org") {

        gotoOrganisationPage();

      }elseif ($action=="subscribe") {

        gotoSubscribeForm();

      }elseif ($action=="our_projects") {

        gotoProjectPage();

      }elseif ($action=="actualite") {

        gotoActualitePage();

      }elseif ($action=="acount") {

        gotoToAcountPage();

      }elseif ($action=="benevol") {

        gotoBenevolSubsForm();

      }elseif ($action=="collab") {

        gotoFormSubsCollaborateur();
        
      }elseif ($action=="success_sub") {
        gotoSuccessSubscribe();
      } else {

        countMembers();
      }
      
    } else {

      countMembers();

    }
    
  } catch (Exception $e) {

    $message=$e->getMessage();
    sendError($message);

  }

?>