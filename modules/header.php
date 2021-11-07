<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Sora:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="icon" href="media\pics\DNG Studio Logo.png" sizes="192x192" />
    <link href="https://api.fontshare.com/css?f[]=satoshi@500,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./magnific/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.13/lottie.min.js"></script>
    <title><?php echo $title; ?></title>
    <script src="//code-eu1.jivosite.com/widget/vioHGNClnN" async></script>

    <!--Start of formio Script-->
    <link rel='stylesheet' href='https://cdn.form.io/formiojs/formio.full.min.css'>
    <script src='https://cdn.form.io/formiojs/formio.full.min.js'></script> 
    <!--End of formio Script-->

  </head>

<body>

<nav class="navbar navbar-expand-lg py-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img id="logo" src="media\pics\DNG Studio Logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a  <?php if($title=='Početna' ){ echo 'id="active"';}else{echo 'class="nav-hover"';}?>  aria-current="page" href="index.php">Početna</a>
        </li>
        <li class="nav-item">
          <a href="e-commerce.php" <?php if($title=='E-commerce' ){ echo ' id="active"';}else{echo 'class="nav-hover"';}?>  role="button"  aria-expanded="false"  >
            E-commerce
          </a> <!-- data-bs-toggle="dropdown"-->
        </li>
        <li class="nav-item dropdown">
          <a <?php if($title=='Izrada sajtova' ){ echo ' id="active"';}else{echo 'class="nav-hover dropdown-toggle"';}?> href="izrada-sajtova.php"  role="button"  aria-expanded="false">
            Izrada sajtova
          </a>
          
          <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
            <a class="dropdown-item pt-2" href="odrzavanje-sajtova.php">
              <h6>Održavanje sajtova</h6>
              <p>Ne dopusti da ti sajt propadne</p>
            </a>
            <a class="dropdown-item pt-2" href="redesign-sajtova.php">
              <h6>Redizajn sajtova</h6>
              <p>Ulepšavamo i popravljamo tvoj sajt</p>
=======
            <a class="dropdown-item pt-2" href="#">
              <div class="row">
                <div class="col-3">
                </div>
                <div class="col-9">
                  <h6>Održavanje sajtova</h6>
                  <p>Ne dopusti da ti sajt propadne</p>
                </div>
              </div>
            </a>
            <a class="dropdown-item pt-2" href="#">
              <div class="row">
                <div class="col-3">
                </div>
                <div class="col-9">
                  <h6>Redizajn sajtova</h6>
                  <p>Ulepšavamo i popravljamo tvoj sajt</p>
                </div>
              </div>
>>>>>>> e72f94b681d0ad35cd146b06d46192cc8656835c
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a <?php if($title=='Grafički dizajn' ){ echo ' id="active"';}else{echo 'class="nav-hover "';}?> href="graficki-dizajn.php" role="button"  aria-expanded="false">
            Dizajn
          </a>
        </li>
        <li class="nav-item ">  <!-- id="navbarDropdown" -->
          <a  href="seo-i-marketing.php" <?php if($title=='Seo & Marketing' ){ echo ' id="active"';}else{echo 'class="nav-hover"';}?>  role="button"  aria-expanded="false">
            SEO & marketing
          </a>
          <!-- <li class="nav-item">
          <a  <?php// if($title=='Baza znanja' ){ echo 'id="active"';}else{echo 'class="nav-hover"';}?>  aria-current="page" href="baza-znanja.php">Baza znanja</a>
          </li> -->

        </li>
      </ul>

      <form class="d-flex">
      <a href="besplatne-konsultacije.php">
        <button  class="fill" type="button">Besplatne konsultacije</button>
    </a>
      </form>
    </div>
  </div>
</nav>