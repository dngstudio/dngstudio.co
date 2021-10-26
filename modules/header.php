<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="media\pics\DNG Studio Logo.png" sizes="192x192" />
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.13/lottie.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <title><?php echo $title; ?></title>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/61741e38f7c0440a591fa6b7/1fimpc3h2';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img id="logo" src="media\pics\DNG Studio Logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a  <?php if($title=='Početna' ){ echo ' id="active" class="nav-link"';}else{echo 'class="nav-link"';}?>  aria-current="page" href="index.php">Početna</a>
        </li>
        <li class="nav-item dropdown">
          <a href="e-commerce.php" <?php if($title=='E-commerce' ){ echo ' id="active" class="nav-link dropdown-toggle"';}else{echo 'class="nav-link dropdown-toggle"';}?>  id="navbarDropdown" role="button"  aria-expanded="false"  >
            E-commerce
          </a> <!-- data-bs-toggle="dropdown"-->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a <?php if($title=='Izrada sajtova' ){ echo ' id="active" class="nav-link dropdown-toggle"';}else{echo 'class="nav-link dropdown-toggle"';}?> href="izrada-sajtova.php" id="navbarDropdown" role="button"  aria-expanded="false">
            Izrada sajtova
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a <?php if($title=='Grafički dizajn' ){ echo ' id="active" class="nav-link dropdown-toggle"';}else{echo 'class="nav-link dropdown-toggle"';}?> href="graficki-dizajn.php" id="navbarDropdown" role="button"  aria-expanded="false">
            Dizajn
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">  <!-- id="navbarDropdown" -->
          <a  href="seo-i-marketing.php" <?php if($title=='Seo & Marketing' ){ echo ' id="active" class="nav-link dropdown-toggle"';}else{echo 'class="nav-link dropdown-toggle"';}?>  role="button"  aria-expanded="false">
            SEO & marketing
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <div class="row">
              <div class="col">dwad</div>
              <div class="col">dwad</div>
              <div class="col">dwad</div>
            </div>
          </ul>
        </li>
        <li class="nav-item">
          <a <?php if($title=='Kontakt' ){ echo ' id="active" class="nav-link"';}else{echo 'class="nav-link"';}?> href="kontakt.php">Kontakt</a>
        </li>
      </ul>

      <form class="d-flex">
        <button class="fill" type="button">Besplatne konsultacije</button>
      </form>
    </div>
  </div>
</nav>