<!doctype html>
<html lang="en">
  <head>
    <title>ACCUEIL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css">
  </head>
  <body>
    

<div class="container-fluid">

    <div class="container-header">
      <h1>BIENVENUE SUR LA PLATEFORME DE GESTION D’ALLOCATION DES CHAMBRES D’UNIVERSITE</h1>
    </div>

    <div class="container-body-menu">
      <div class="menu">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

              <div class="navbar-nav">
                <button class="btn btn-info m-1">
                <a class="nav-item nav-link text-white ml-2" lien="" href="<?=BASE_URL?>/security/enregistrerEtu">ENREGISTRER ETUDIANT</a>
                </button>

                <button class="btn btn-info m-1">
                <a class="nav-item nav-link text-white ml-2" lien="" href="<?=BASE_URL?>/security/enregistrerCH">ENREGISTRER CHAMBRE</a>
                </button>

                <button class="btn btn-info m-1">
                <a class="nav-item nav-link  text-white ml-2" lien="" href="<?=BASE_URL?>/security/gererEtu">LISTER ETUDIANTS</a>
                </button>

                <button class="btn btn-info m-1">
                  <a class="nav-item nav-link text-white ml-2" lien="" href="<?=BASE_URL?>/security/gererCH">LISTER CHAMBRES</a>
                </button>

              </div>
            </div>
        </nav>
    </div>
      <div class="body-action">
        <?php
        if(isset($content_for_layout)){
          echo $content_for_layout;
        }
        ?>
      </div>
  </div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="<?=BASE_URL?>/public/js/script.js"></script>
  </body>
</html>