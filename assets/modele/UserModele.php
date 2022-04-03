
<?php 

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require "./assets/bd/db.php";




    define('TYPE_USER','ADHERENT');




    /**
     * Undocumented function
     *
     * @param [type] $fName
     * @param [type] $lName
     * @param [type] $email
     * @param [type] $tel
     * @param [type] $adr
     * @param [type] $prof
     * @return void
     * Cette fonction consiste à insérer un nouvel utilisateur
     */
    function insertMember($fName, $lName, $sex, $email, $tel, $adr, $prof, $regl_int){
        
        $id=null;

        if ($fName!="" && $fName!="" && $email!="") {
            $db=connecDb();


            $responsability="Simple mmembre";
            $pwd=null;
            $date_add=date('Y-m-d H:i:s');
            $date_edit=date('Y-m-d H:i:s');
            $type_u=intval(getTypeUseryLabel(TYPE_USER));

            $query= "INSERT INTO `user`(`id_user`, `e_mail`, `phone`, `adress`, `level`, `password`, `date_add`, `date_edit`, `acpt_rglt_int`, `type`) VALUES (0, '$email', '$tel', '$adr', '$responsability', '$pwd', '$date_add', '$date_edit', $regl_int, '$type_u')";

            $result=mysqli_query($db, $query) or die(mysqli_error($db).$query);

            if($result){
                $id=mysqli_insert_id($db);
                insertPerson($fName, $lName, $sex, $prof, $id);
            }
            $db->close();
        }

        return $id;
    }







    /**
     * Undocumented function
     *
     * @param [type] $email
     * @return void
     * Cette fonction permet de fixer l'adresse e-mail entrée par l'utilisateur
     */
    function IsEmail($email)
    {
		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(? [decu]? [decu]?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(? [decu]?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
		return (($value === 0) || ($value === false)) ? false : true;
	}







    /**
     * Undocumented function
     *
     * @param [type] $f_name
     * @param [type] $l_name
     * @param [type] $prof
     * @param [type] $idUser
     * @return void
     * Cette fonction permet d'enregister une nouvelle 
     * personne dans la base de données
     */
    function insertPerson($f_name, $l_name, $sex, $prof, $idUser){

        $id=null; 

        if($f_name!="" && $l_name!="" && $idUser!="" && $sex!=""){

            $db=connecDb();

            $query="INSERT INTO `person`(`id_pers`, `f_name`, `l_name`, `sex`, `profession`, `id_user`) VALUES (0,'$f_name','$l_name','$sex','$prof','$idUser')";
            $result=mysqli_query($db, $query) or die(mysqli_error($db).$query);

            if($result){
                $id=mysqli_insert_id($db);
            }
            $db->close();
        }

        return $id;
    }










    /**
     * Undocumented function
     *
     * @param [type] $label
     * @return void
     * Cette fonction permet de récupérer
     */
    function getTypeUseryLabel($label){
        $id=null;

        if ($label!="") {
            $query="SELECT `id_type` FROM `type_user` WHERE `label`='$label'";
            $db=connecDb();

            $result=mysqli_query($db, $query) or die(mysqli_error($db).$query);

            if($result->num_rows>0){
                $id=$result->fetch_assoc()['id_type'];
            }

            $db->close();
        }

        return $id;
    }










    /**
     * Cette fonction sert à vérifier si une adresse e-mail 
     * existe déjà dans la base de données avant d'inserer un 
     * nouvel utilisateur afin d'éviter qu'il y'ait deux utilisateurs 
     * incrits avec la même adresse e-mail
     *
     * @param [type] $email
     * @return boolean
     */
    function isEmailExist($email){
        $isEmail=false;

        if ($email!="") {
            $query="SELECT `e_mail` as email FROM `user` WHERE `e_mail`='$email'";
            $db=connecDb();

            $result=mysqli_query($db, $query) or die(mysqli_error($db).$query);

            if($result->num_rows>0){
                $emailU=$result->fetch_assoc()["email"];
                if ($emailU==$email) {
                    $isEmail=true;
                };
            }

            $db->close();
        }

        return $isEmail;
    }
?>