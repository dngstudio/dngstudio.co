<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?php echo $title; ?> - DNG Studio">
    <meta name="description" content="<?php echo $desc; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@700&display=swap" rel="stylesheet"> 
    <link rel="icon" href="media\pics\DNG Studio Logo.png" sizes="192x192" />
    <link href="https://api.fontshare.com/css?f[]=satoshi@500,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <title><?php echo $title; ?> - DNG Studio</title>
    <script src="//code-eu1.jivosite.com/widget/vioHGNClnN" async></script>

</head>

<body>

<nav class="navbar navbar-expand-lg py-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img id="logo" src="media\pics\DNG Studio Logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button> 
    
    <div class="collapse navbar-collapse " id="navbarSupportedContent">

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
          <a class="nav-link dropdown-toggle d-inline-flex d-lg-none d-sm-block d-md-block" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-caret-down-fill chevron"></i>
          </a>
          
          
          <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
            <a class="dropdown-item p-1" href="odrzavanje-sajtova.php">
              <div class="row d-flex align-items-center justify-content-center">
                <div class="col-3 d-flex"><i class="bi bi-code-slash mx-auto" style="font-size:20px"></i></div>
                <div class="col-9">
                  <h6>Održavanje sajtova</h6>
                  <p>Ne dopusti da ti sajt propadne</p>
                </div>
              </div>
            </a>
            <a class="dropdown-item p-1" href="index.php">
              <div class="row d-flex align-items-center justify-content-center">
                <div class="col-3 d-flex"><i class="bi bi-tools mx-auto" style="font-size:20px"></i></div>
                <div class="col-9">
                  <h6>Redizajn sajtova</h6>
                  <p>Ulepšavamo i popravljamo tvoj sajt</p>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a <?php if($title=='Grafički dizajn' ){ echo ' id="active"';}else{echo 'class="nav-hover "';}?> href="graficki-dizajn.php" role="button"  aria-expanded="false">
            Dizajn
          </a>
        </li>
        <li class="nav-item">
          <a  href="seo-i-marketing.php" <?php if($title=='Seo & Marketing' ){ echo ' id="active"';}else{echo 'class="nav-hover"';}?>  role="button"  aria-expanded="false">
            SEO & marketing
          </a>


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