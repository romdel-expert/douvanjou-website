
        <div class="before-page">
            <?php


                $messErrSubs="";

                foreach ($_POST as $cle => $val) {
                    $_POST[$cle]=stripslashes($val);
                }
                if (isset($_POST['fName']) && !empty($_POST['fName']) 
                    && isset($_POST['lName']) && !empty($_POST['lName'])
                    && isset($_POST['email']) && !empty($_POST['email'])
                    && isset($_POST['regl_int'])) {

                    $fName=htmlspecialchars(addslashes($_POST['fName']), ENT_QUOTES);
                    $fName=iconv('UTF-8', 'UTF-8//TRANSLIT', $_POST['fName']);
                    $fName=str_replace("'", "\'", $_POST['fName']);

                    $lName=htmlspecialchars(addslashes($_POST['lName']), ENT_QUOTES);
                    $lName=iconv('UTF-8', 'UTF-8//TRANSLIT', $_POST['lName']);
                    $lName=str_replace("'", "\'", $_POST['lName']);

                    $sex=$_POST['sex'];

                    $email=addslashes($_POST['email']);

                    $phone=addslashes($_POST['phone']);

                    $adrU=htmlspecialchars(addslashes($_POST['adr_u']), ENT_QUOTES);
                    $adrU=iconv('UTF-8', 'UTF-8//TRANSLIT', $_POST['adr_u']);
                    $adrU=str_replace("'", "\'", $_POST['adr_u']);

                    $prof=htmlspecialchars(addslashes($_POST['prof']), ENT_QUOTES);
                    $prof=iconv('UTF-8', 'UTF-8//TRANSLIT', $_POST['prof']);
                    $prof=str_replace("'", "\'", $_POST['prof']);

                    $regl_int=$_POST['regl_int'];
                    if ($regl_int==true) {
                        addMember($fName, $lName, $sex, $email, $phone, $adrU, $prof, $regl_int);
                        // cleanFields();
                    } else {
                        
                        $messErrSubs="Il faut obligatoirement accepter le règlement intérieur avant de vous enregistrer";
                    }
                }else{

                    $messErrSubs="Il faut remplir tous les champs obligatoires et accepter le règlemennt intérieur";
                } 



                // function cleanFields(){
                //     $fName="";

                //     $lName="";

                //     $sex="";

                //     $email="";

                //     $phone="";

                //     $adrU="";

                //     $prof="";

                //     $regl_int=false;
                // }
            ?>
        </div>



        <?php $title="Formulaire d'adhésion à l'association Douvanjou"; ?>

        <?php ob_start(); ?>

        <div class="content-page before-page">
            <h2>Formulaire d'adhésion</h2>
            <form action="" method="POST" class="form-subs">

                <div class="mb-3">
                    <label for="fName" class="form-label">Nom*</label>
                    <input type="text" class="form-control" id="fName" name="fName" placeholder="Votre nom" required
                    onKeydown="cleanMessEmail()">
                </div>

                <div class="mb-3">
                    <label for="lName" class="form-label">Prénom*</label>
                    <input type="text" class="form-control" id="lName" name="lName" placeholder="Votre prénom" required
                    onKeydown="cleanMessEmail()">
                </div>

                <div class="mb-3">
                    <label for="sex" class="form-label">Genre*</label>
                    <select class="form-control" id="sex" name="sex" required
                    onKeydown="cleanMessEmail()">
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                        <option value="Mademoiselle">Mademoiselle</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Addresse e-mail*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nom@example.com" required
                    onKeydown="cleanMessEmail()">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" pattern="[0-9]{8,16}" id="phone" name="phone" placeholder="Téléphone"
                    onKeydown="cleanMessEmail()">
                    <span>Ex: 0033000000000</span>
                </div>

                <div class="mb-3">
                    <label for="adr_u" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adr_u" name="adr_u" placeholder="Entrer votre votre adresse postale"
                    onKeydown="cleanMessEmail()">
                </div>

                <div class="mb-3">
                    <label for="prof" class="form-label">Votre profession</label>
                    <input type="text" class="form-control" id="prof" name="prof" placeholder="Précisez votre profession"
                    onKeydown="cleanMessEmail()">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="regl_int" id="regl_int"
                    onchange="cleanMessEmail()" value=true>
                    <label class="form-check-label" for="regl_int">
                        J'accepte Règlement Intérieur d'Association Douvanjou
                    </label>
                </div>

                <div class="mb-3">
                    <p style="color: red;" id="errEmail">
                        <?= $messErrSubs; ?>
                    </p>
                </div>


                <p>
                    <button class="btn btn-show-rgl-int" type="button" onclick="showRegInt()">
                        Consulter le Règlement intérieur
                    </button>
                </p>

                <div class="modal-gl" id="regl_int" hidden>
                    <?php require "reglement_interieur.php"; ?>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-gnl" style="width: 80%; margin-top: 40px;">
                        Valider
                    </button>
                </div>
            </form>
        </div>


        <?php $content=ob_get_clean(); ?>

        <?php require "./assets/view/gabarit.php"; ?>


        <script>
            var input = document.getElementById('adr_u');
            var autocomplete = new google.maps.places.Autocomplete(input);
        </script>