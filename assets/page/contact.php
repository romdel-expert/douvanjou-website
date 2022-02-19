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

    <title>Contact de l'association Douvanjour</title>
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
                    <a href="">Contact</a>
                </li>
                <li>
                    <a href="subscribe.php">Adhésion</a>
                </li>
            </ul>
        </div>
    </header>


    <main>















<!-- a gerder -->

<div class="content-page before-page container-fluid">

    <h2>Contacter Douvanjou</h2>

    <div class="row">


        <div class="col-xl-5 p-5 case-contact" >
            <h3>Téléphone</h3>
            <p>
                +33 6 67 99 55 70
            </p>

            <h3>Adresse e-mail</h3>
            <p>
                douvanjouasso@gmail.com
            </p>

            <h3>Adresse postale, en France</h3>
            <p>
                19, Rue de la Station
                94170,  LE PEUREUX-SUR-MARNE
            </p>


            <div class="content-carte">
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d167718.22473310033!2d2.3032479329899647!3d48.94211225024782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0x47e60d8344041b79%3A0x23b8ad3e9ce747ae!2s19%20Rue%20de%20la%20Station%2C%2094170%20Le%20Perreux-sur-Marne!3m2!1d48.8436865!2d2.5056224!4m3!3m2!1d49.044932499999994!2d2.4847534!5e0!3m2!1sfr!2sfr!4v1644682360223!5m2!1sfr!2sfr" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>



            <h3>Adresse postale, en Haïti</h3>
            <p>
                La Sucrerie Henry
            </p>
        </div>



        <div class="col-xl-7 p-6">
            <h3>Envoyer directement un message</h3>
            <form action="" method="POST" class="form-contact p-6">
                
                <div class="mb-3">
                    <label for="fName" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="fName" name="fName" placeholder="Votre nom">
                </div>

                <div class="mb-3">
                    <label for="lName" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="lName" name="lName" placeholder="Votre prénom">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Addresse e-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="nom@example.com">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Téléphone">
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Sujet</label>
                    <input type="text" class="form-control" id="subject" placeholder="Entre le sujet de votre message">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Contenu de votre message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                    

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-gnl" 
                        style="width: 80%; 
                        margin-top: 40px;">
                        Envoyer
                    </button>
                </div>
            </form>
        </div-col-xl-9>
    </div>
</div>

















<!-- a enlever -->

</main>


    <footer>
        <?php include('footer.php'); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>