
    <?php $title="Formulaire pour devenir collaborateur ou partenaire de l'association Douvanjou"; ?>

    <?php ob_start(); ?>

        <div class="content-page before-page">
            <h2>Devenir collaborateur de Douvanjou</h2>
            <form action="" method="POST" class="form-subs">


                <h3>Personne morale</h3>


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="cName" class="form-label">Raison sociale*</label>
                                <input type="text" class="form-control" id="cName" name="cName" placeholder="Nom de l'entreprise / association">
                            </div>

                            <div class="mb-3">
                                <label for="cAdr" class="form-label">Adresse*</label>
                                <input type="text" class="form-control" id="cAdr" name="cAdr" placeholder="Adresse de l'entreprise / association">
                            </div>

                            <div class="mb-3">
                                <label for="cPhone" class="form-label">Téléphone*</label>
                                <input type="tel" class="form-control" id="cPhone" name="cPhone" placeholder="Adresse de l'entreprise / association">
                            </div>
                        </div>



                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="siret" class="form-label">Numéro d'immatriculation*</label>
                                <input type="text" class="form-control" id="siret" name="siret" placeholder="Numéro d'immatriculation">
                            </div>

                            <div class="mb-3">
                                <label for="cEmail" class="form-label">Adresse e-mail*</label>
                                <input type="email" class="form-control" id="cEmail" name="cEmail" placeholder="E-mail">
                            </div>


                            <div class="mb-3">
                                <label for="act" class="form-label">Domaine d'activité*</label>
                                <input type="text" class="form-control" id="act" name="act" placeholder="Domaine d'activité">
                            </div>
                        </div>
                    </div>
                </div>



                <h3>Représentant</h3>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6">
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
                        </div>


                        <div class="col-xl-6">

                            <div class="mb-3">
                                <label for="adr-u" class="form-label">Adresse</label>
                                <input type="text" class="form-control" id="adr-u" name="adr-u" placeholder="Entrer votre votre adresse postale">
                            </div>

                            <div class="mb-3">
                                <label for="adr-u" class="form-label">Adresse</label>
                                <input type="text" class="form-control" id="adr-u" name="adr-u" placeholder="Entrer votre votre adresse postale">
                            </div>


                            <div class="mb-3">
                                <label for="prof-r" class="form-label">Profession</label>
                                <input type="text" class="form-control" id="prof-r" name="prof-r" placeholder="Votre profession">
                            </div>
                        </div>
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