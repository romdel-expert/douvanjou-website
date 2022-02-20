<!-- partie à anlever -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Candal&family=Kaushan+Script&family=Open+Sans+Condensed:wght@300&family=PT+Sans+Narrow&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Devenir collaborateur</title>
</head>

<body>

    <header>
        <div class="top-header">
            <div class="logo">
                <a href="../../index.php">
                    <img src="../images/logo.png" alt="Le logo de Douvanjour" />
                </a>
            </div>

            <div class="bloc-btn">
                <a href="form_given.php" class="btn btn-top-header">Je fais un don</a>
            </div>
        </div>

        <div class="bottom-header">
            <ul>
                <li>
                    <a href="">L'association</a>
                </li>
                <li>
                    <a href="">Notre organisation</a>
                </li>
                <li>
                    <a href="">Actualité</a>
                </li>
                <li>
                    <a href="">Nos projets</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="">Adhésion</a>
                </li>
            </ul>
        </div>
    </header>


    <main>
















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

















        <!-- a enlever -->

    </main>


    <footer>
        <?php include('footer.php'); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>