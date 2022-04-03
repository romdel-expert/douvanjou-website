
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Candal&family=Kaushan+Script&family=Open+Sans+Condensed:wght@300&family=PT+Sans+Narrow&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title><?= $title; ?></title>
  </head>
  <body>
    
    <header>
        <?php require('./assets/view/page/header.php'); ?>
    </header>


    <main>
        <?= $content; ?>
    </main>


    <footer>
        <?php require('./assets/view/page/footer.php'); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script  src = "https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAMlqyXWE0E5lVC1U9oGpRFY_-tNu14QyU" ></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>