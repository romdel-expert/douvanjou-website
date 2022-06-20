<?php



    function connecDb(){
        // $host="localhost";
        // $dbName="douvanjou";
        // $user="root";
        // $password="root";


        $host="db5006770252.hosting-data.io";
        $dbName="dbs5600935";
        $user="dbu581436";
        $password="Douvanjou2021*";


        // try {

        //     $db=new PDO("mysql:host=$host;dbname:$dbName;charset=utf8", $user, $password);

        // } catch (Exception $e) {

        //     die("Erreur : ".$e->getMessage());
            
        // }


        $db = new mysqli(
            $host,
            $user,
            $password,
            $dbName
          );
      
          if ($db->connect_error) {
            echo 'Errno: '.$db->connect_errno;
            echo '<br>';
            echo 'Error: '.$db->connect_error;
            exit();
          }

        return $db;
    }