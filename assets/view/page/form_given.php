<?php $title="Faire un don à l'association Douvanjou"; ?>


<?php ob_start(); ?>


    <div class="content-page before-page">

        <h2>Je fais un don</h2>

        <form action="" method="POST" class="form-subs">

            <div class="mb-3">
                <label for="amount" class="form-label">Montant* (€)</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Entrer le montant" min="10">
            </div>

            <!-- <div class="mb-3">
                <label for="amount" class="form-label">Montant* (€)</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Entrer le montant" min="10">
            </div> -->

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
                <label for="phone" class="form-label">Pour quel projet?*</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="0" selected>Pour Soutenir Douvanjou</option>
                    <option value="1">Reconstruction de l'école de la Sucrerie Henry</option>
                    <option value="2">Santé</option>
                    <option value="2">Éducation</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="adr" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adr" placeholder="Entrer votre adresse postale">
            </div>

            <div class="mb-3">
                <label for="prof" class="form-label">Votre profession</label>
                <input type="text" class="form-control" id="prof" placeholder="Entrer votre adresse postale">
            </div>

            <div class="mb-3">
                <label for="coment_given" class="form-label">Quelques mots pour acompagner votre don</label>
                <textarea class="form-control" id="coment_given" rows="3"></textarea>
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

<?php require "./assets/view/gabarit.php" ?>






