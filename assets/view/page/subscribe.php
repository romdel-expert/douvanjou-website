
        <?php $title="Formulaire d'adhésion à l'association Douvanjou"; ?>

        <?php ob_start(); ?>

        <div class="content-page before-page">
            <h2>Formulaire d'adhésion</h2>
            <form action="" method="POST" class="form-subs">

                <div class="mb-3">
                    <label for="fName" class="form-label">Nom*</label>
                    <input type="text" class="form-control" id="fName" name="fName" placeholder="Votre nom">
                </div>

                <div class="mb-3">
                    <label for="lName" class="form-label">Prénom*</label>
                    <input type="text" class="form-control" id="lName" name="lName" placeholder="Votre prénom">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Addresse e-mail*</label>
                    <input type="email" class="form-control" id="email" placeholder="nom@example.com">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Téléphone">
                </div>

                <div class="mb-3">
                    <label for="adr-u" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adr-u" name="adr-u" placeholder="Entrer votre votre adresse postale">
                </div>

                <div class="mb-3">
                    <label for="prof" class="form-label">Votre profession</label>
                    <input type="text" class="form-control" id="prof" placeholder="Entrer votre adresse postale">
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-gnl" style="width: 80%; 
                margin-top: 40px;">
                        Valider
                    </button>
                </div>
            </form>
        </div>


        <?php $content=ob_get_clean(); ?>

        <?php require "./assets/view/gabarit.php"; ?>