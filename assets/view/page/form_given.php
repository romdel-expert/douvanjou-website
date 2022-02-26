<?php $title="Faire un don à l'association Douvanjou"; ?>


<?php ob_start(); ?>


    <div class="content-page before-page">

        <h2>Je fais un don</h2>


        <div class="form-subs choice-don p-4 mb-5">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="don_choice" id="don_adherent"
                onchange="getChoiceFormDon()" value="ADHERENT">
                <label class="form-check-label" for="don_adherent">
                    Je suis membre adhérent
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="don_choice" id="don_usualy"
                onchange="getChoiceFormDon()" value="USUALY">
                <label class="form-check-label" for="don_usualy">
                    J'ai déjà fait un don à Douvanjou
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="don_choice" id="don_subs"
                onchange="getChoiceFormDon()"  value="SUBSCRIBED">
                <label class="form-check-label" for="don_subs">
                    Je suis déjà inscrit
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="don_choice" id="don_new"
                onchange="getChoiceFormDon()"  value="NEW">
                <label class="form-check-label" for="don_new">
                    C'est ma première visite sur le site
                </label>
            </div>
        </div>

        <div id="form-don-adherent" class="form-subs">

            <h3>Connectez-vous</h3>

            <div class="mb-3">
                <label for="email" class="form-label">Addresse e-mail*</label>
                <input type="email" class="form-control" id="email" placeholder="nom@example.com">
            </div>

            <div class="mb-3">
                <label for="pwd" class="form-label">Mot de passe*</label>
                <input type="password" class="form-control" id="pwd" placeholder="............">
            </div>

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-gnl" style="width: 80%; 
            margin-top: 40px;">
                    Connecter
                </button>
            </div>
        </div> 




        <div id="form-don-usualy" class="form-subs">

            <h3>Entrer votre adresse e-mail ou téléphone</h3>

            <div class="mb-3">
                <label for="email" class="form-label">Addresse e-mail</label>
                <input type="email" class="form-control" id="email" placeholder="nom@example.com">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="phone" placeholder="0000000000">
            </div>

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-gnl" style="width: 80%; 
            margin-top: 40px;">
                    Rechercher
                </button>
            </div>
        </div> 








        <form action="" method="POST" class="form-subs" id="form-don">


            <div id="comon-bloc-form-don">
                <div class="mb-3">
                    <label for="amount" class="form-label">Montant* (€)</label>
                    <select class="form-control" name="amount" id="amount">
                        <option value="10">10 €</option>
                        <option value="20">20 €</option>
                        <option value="30">30 €</option>
                        <option value="40">40 €</option>
                        <option value="50">50 €</option>
                        <option value="60">60 €</option>
                        <option value="70">70 €</option>
                        <option value="80">80 €</option>
                        <option value="90">90 €</option>
                        <option value="100">100 €</option>
                        <option value="150">150 €</option>
                        <option value="200">200 €</option>
                        <option value="250">250 €</option>
                        <option value="300">300 €</option>
                        <option value="350">350 €</option>
                        <option value="400">400 €</option>
                        <option value="450">450 €</option>
                        <option value="500">500 €</option>
                    </select>
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
                    <label for="coment_given" class="form-label">Quelques mots pour acompagner votre don</label>
                    <textarea class="form-control" id="coment_given" rows="3"></textarea>
                </div>
            </div>

            <!-- <div class="mb-3">
                <label for="amount" class="form-label">Montant* (€)</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Entrer le montant" min="10">
            </div> -->



            <div id="form-don-complete">

                <h3 style="margin: 30px 0;">Pour mieux vous remercier</h3>

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
                    <label for="adr" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adr" placeholder="Entrer votre adresse postale">
                </div>

                <div class="mb-3">
                    <label for="prof" class="form-label">Votre profession</label>
                    <input type="text" class="form-control" id="prof" placeholder="Entrer votre adresse postale">
                </div>
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






