<?php 
session_start();
if($_GET['langID'] === "en_US") {
  $title = "Homepage";
  $desc = "Web development, graphic design, SEO and digital marketing";
} else {
  $title = "Početna";
  $desc = "Izrada sajtova, grafički dizajn, SEO i digitalni marketing";
};
require './modules/header.php'; 
?>

<?php

$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/79.175.98.187?fields=country"));
echo $details->country;


?>


<div class="container header vh-100">
  <div class="row align-items-center">
  <?php if($_SESSION['kontakt']=='popunjeno' ){ $_SESSION['kontakt'] = 'nije';; echo '<h1>Uspešno popunjena forma!</h1>';}else{echo '';}?>
    <div class="col-lg-6 col-sm-12 order-2 order-sm-1" data-aos="fade-right">
      <h1><?php echo indexheading; ?></h1>
      <p><?php echo indexparagraph; ?></p>
      <a href="#procena">
        <button class="fill"><?php echo requestqoute; ?></button>
      </a>
      <a href="#vise">
      <button class="btn btn-outline-dark ms-2" style="padding: 10px 20px 10px; position:relative;top:7px"><?php echo findoutmore; ?></button>
      </a>  
    </div>
    <div class="col-lg-6 col-sm-12 order-1 order-sm-2 h-100">
      <div id="home-anim"></div>
    </div>
  </div>
</div>



<div id="vise" class="mt-5 mb-5 container">
  <div class="row gy-4 gx-lg-4">
    <div class="col-lg-4 col-sm-12 justify-content-center">
      <div class="card text-center shadow services" >
        <div class="card-body">
          <img src="media\icons\Ecommerce.png" alt="" class="services-icons my-2">
          <h5 class="card-title">E-commerce</h5>
          <p class="card-text"><?php echo ecomdesc; ?></p>
          <a href="e-commerce.php" class="card-link"><?php echo findoutmore; ?></a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 justify-content-center">
    <div class="card text-center shadow services" >
        <div class="card-body">
          <img src="media\icons\Website.png" alt="" class="services-icons my-2">
          <h5 class="card-title">Web dizajn</h5>
          <p class="card-text"><?php echo webdesigndesc; ?></p>
          <a href="izrada-sajtova.php" class="card-link"><?php echo findoutmore; ?></a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12  justify-content-center">
    <div class="card text-center shadow services" >
        <div class="card-body">
          <img src="media\icons\Development.png" alt="" class="services-icons my-2">
          <h5 class="card-title"><?php echo webdev; ?></h5>
          <p class="card-text"><?php echo webdevdesc; ?></p>
          <a href="besplatne-konsultacije.php" class="card-link"><?php echo findoutmore; ?></a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-2 gy-4 gx-lg-4">
    <div class="col-lg-4 col-sm-12  justify-content-center">
      <div class="card text-center shadow services" >
        <div class="card-body">
          <img src="media\icons\Digital Marketing.png" alt="" class="services-icons my-2">
          <h5 class="card-title"><?php echo design; ?></h5>
          <p class="card-text"><?php echo designdesc; ?></p>
          <a href="graficki-dizajn.php" class="card-link"><?php echo findoutmore; ?></a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12  justify-content-center">
    <div class="card text-center shadow services" >
        <div class="card-body">
          <img src="media\icons\SEO.png" alt="" class="services-icons my-2">
          <h5 class="card-title">SEO</h5>
          <p class="card-text"><?php echo seodesc; ?></p>
          <a href="seo-i-marketing.php" class="card-link"><?php echo findoutmore; ?></a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 justify-content-center">
    <div class="card text-center shadow services" >
        <div class="card-body">
          <img src="media\icons\Feedback Audience.png" alt="" class="services-icons my-2">
          <h5 class="card-title">Digitalni marketing</h5>
          <p class="card-text"><?php echo marketingdesc; ?></p>
          <a href="seo-i-marketing.php" class="card-link"><?php echo findoutmore; ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div  data-aos="fade-up" class="container my-5 text-center ">
  <h3><?php echo ourclients; ?></h3>
  <div class="row gy-4 row-cols-2 row-cols-sm-2 row-cols-lg-4 mt-4 align-items-center">
    <div class="col">
        <img src="media\pics\Tvoja Majica Logo.png" alt="" class="partners">
    </div>
    <div class="col">
      <img src="media\pics\Easy Moving Logo.png" alt="" class="partners">
    </div>
    <div class="col">
      <img src="media\pics\Dungn Underground Logo.png" alt="" class="partners">
    </div>
    <div class="col">
      <img src="media\pics\Digital Print Logo.png" alt="" class="partners">
    </div>
    </div>
    <div class="row gy-4 row-cols-2 row-cols-sm-2 row-cols-lg-4 mt-4 mt-sm-4 mt-lg-3 align-items-center">
    <div class="col">
        <img src="media\pics\Charlie Fashion Logo.png" alt="" class="partners">
    </div>
    <div class="col">
      <img src="media\pics\Zelena Panorama Logo.png" alt="" class="partners">
    </div>
    <div class="col">
      <img src="media\pics\Moja nalepnica Logo.png" alt="" class="partners">
    </div>
    <div class="col">
      <img src="media\pics\Edusaurus Logo.png" alt="" class="partners">
    </div>
    </div>
  </div>
</div>

<div class="container-fluid overflow-hidden">
  <div class="row">
    <div class="col-lg-6 col-sm-12 my-auto ps-lg-5">
      <h2 class="h2"><?php echo $howdowedoit["title"]; ?></h2>
      <p><?php echo $howdowedoit["desc"]; ?></p>
      <ul>
        <li><?php echo $howdowedoit["bullet1"]; ?></li>
        <li><?php echo $howdowedoit["bullet2"]; ?></li>
        <li><?php echo $howdowedoit["bullet3"]; ?></li>
        <li><?php echo $howdowedoit["bullet4"]; ?></li>
        <li><?php echo $howdowedoit["bullet5"]; ?></li>
        <li><?php echo $howdowedoit["bullet6"]; ?></li>
        <li><?php echo $howdowedoit["bullet7"]; ?></li>
      </ul>
      <a href="#procena">
      <button class="fill"><?php echo letsgetstarted; ?></button>
      </a>
    </div>
    <div class="col-lg-6 col-sm-12 pmockup-container">
        <img src="media\pics\DNG Studio - Phone Mockup.png" alt="" id="pmockup">
      </div>
    </div>
  </div>
</div>


<div class="container-fluid hcontainer min-vh-100 mt-5 overflow-hidden">
  <div id="container">
    <div class="module module1 align-items-center">
      <div class="container">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 col-sm-12">
            <h2 class="text-primary"><?php echo $whyus["title"]; ?></h2>
            <p class="text-white"><?php echo $whyus["desc"]; ?></p>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="card bg-dark">
              <div class="card-body">
                <img src="" alt="">
                <h5 class="card-title text-white"><?php echo $whyus["bullet1title"]; ?></h5>
                <p class="card-text text-white"><?php echo $whyus["bullet1desc"]; ?></p>
              </div>
            </div>
            <div class="card bg-dark mt-3">
              <div class="card-body">
                <img src="" alt="">
                <h5 class="card-title text-white"><?php echo $whyus["bullet2title"]; ?></h5>
                <p class="card-text text-white"><?php echo $whyus["bullet2desc"]; ?></p>
              </div>
            </div>
            <div class="card bg-dark mt-3">
              <div class="card-body">
                <img src="" alt="">
                <h5 class="card-title text-white"><?php echo $whyus["bullet3title"]; ?></h5>
                <p class="card-text text-white"><?php echo $whyus["bullet3desc"]; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="module module2 ">
      <div class="container my-auto">
        <h2 class="text-center mb-4"><?php echo $ourecosystem["title"]; ?></h2>
        <div class="row gx-4">
          <div class="col-lg-4 col-sm-12 text-center">
            <div class="vgap"></div>
            <h3>DNG Shop</h3>
            <p><?php echo $ourecosystem["bullet1desc"]; ?></p>
          </div>
          <div class="col-lg-4 col-sm-12 text-center">
            <div class="vgap"></div>
            <h3>DNG Lite</h3>
            <p><?php echo $ourecosystem["bullet2desc"]; ?></p>
          </div>
          <div class="col-lg-4 col-sm-12 text-center">
            <div class="vgap"></div>
            <h3>DNG Express</h3>
            <p><?php echo $ourecosystem["bullet3desc"]; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="module module3">
      <div class="container my-auto">
        <h2 class="text-center mb-4 text-white"><?php echo ourteam; ?></h2>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-5 row-cols-lg-5">
          <div class="col text-center">
            <img src="media\pics\DNG Team\Jelena Janić.jpg" alt="" class="team-img">
            <h4 class="text-white mt-3">Jelena Janić</h4>
            <p class="text-white" style="font-family:'Anonymous Pro'">Frontend Developer</p>
          </div>
          <div class="col text-center">
            <img src="media\pics\DNG Team\Ivan Đukić.jpg" alt="" class="team-img">
            <h4 class="text-white mt-3">Ivan Đukić</h4>
            <p class="text-white" style="font-family:'Anonymous Pro'">Backend Developer</p>
          </div>
          <div class="col text-center">
            <img src="media\pics\DNG Team\Milica Perić.jpg" alt="" class="team-img">
            <h4 class="text-white mt-3">Milica Perić</h4>
            <p class="text-white" style="font-family:'Anonymous Pro'">Social Media Manager</p>
          </div>
          <div class="col text-center">
            <img src="media\pics\DNG Team\Luka Đukić.jpg" alt="" class="team-img">
            <h4 class="text-white mt-3">Luka Đukić</h4>
            <p class="text-white" style="font-family:'Anonymous Pro'">Wordpress Specialist</p>
          </div>
          <div class="col text-center">
            <img src="media\pics\DNG Team\Mr. Willy.jpg" alt="" class="team-img">
            <h4 class="text-white mt-3">Mr. Willy</h4>
            <p class="text-white" style="font-family:'Anonymous Pro'"><?php echo janitor; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--
<h3 class="mb-2 mt-5 text-center">Paketi usluga</h2>

<div class="d-flex form-check form-switch justify-content-center mb-3">
    <label id="odjednom">Odjednom</label>
    <input class="form-check-input" id="placanje" type="checkbox" role="switch" id="flexSwitchCheckDefault">
    <label id="rate">Na 3 rate</label>
</div>


<div class="container min-vh-100">
  <div class="row gx-lg-2 mt-3">
    <div class="col-lg-4 col-sm-12" id="plan1">
      <div class="vgap"></div>
      <div class="card text-center shadow pricing mx-2 py-3">
          <div class="card-body">
            <h5 class="card-title">Šegrt</h5>
            <p class="card-text">Početni sajt, savršen za portfolio firme ili pojedinca.</p>
          </div>
          <ul class="list-group list-group-flush ">
            <li class="list-group-item">Do 5 stranica</li>
            <li class="list-group-item">SEO</li>
            <li class="list-group-item">Optimizacija za mobilne uređaje</li>
            <li class="list-group-item">Moderan UI dizajn</li>
            <li class="list-group-item">Bonus održavanje mesec dana</li>
            <li class="list-group-item">3 poslovna e-mail naloga</li>
          </ul>
          <div class="card-body">
            <p class="price pb-1 price1">od 300€</p>
            <p class="price pb-1 price2">od 420€</p>
            <a href="#procena">
            <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
            </a>
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12" id="plan2">
      <div class="vgap"></div>
      <div class="card text-center shadow pricing mx-2 py-3" id="featured">
        <div class="card-body">
          <h5 class="card-title">Majstor</h5>   
          <span class="badge bg-secondary my-2">Najtraženije</span>     
          <p class="card-text">Za naprednije projekte, poput interaktivnih platformi ili online prodavnica.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Kompleksniji veb sajt</li>
          <li class="list-group-item">SEO</li>
          <li class="list-group-item">Određivanje palete boja</li>
          <li class="list-group-item">10 e-mail naloga</li>
          <li class="list-group-item">SSL verifikacija</li>
          <li class="list-group-item">Optimizacija za mobilne uređaje</li>
          <li class="list-group-item">Google Analitika i Console</li>
          <li class="list-group-item">Logo dizajn</li>
          <li class="list-group-item">Besplatna obuka za korišćenje</li>
          <li class="list-group-item">Opcija za e-commerce</li>
          <li class="list-group-item">Bonus održavanje 3 meseca</li>
        </ul>
        <div class="card-body">
          <p class="price pb-1 price1">od 500€</p>
          <p class="price pb-1 price2">od 600€</p>
          <a href="#procena">
          <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12" id="plan3">
      <div class="vgap"></div>
      <div class="card text-center shadow pricing mx-2 py-3">
          <div class="card-body">
            <h5 class="card-title">Ekspert</h5>
            <p class="card-text">Za najhrabrije! Ovaj paket obuhvata izradu kompletnog veb sajta sa uključenim brendingom.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Neograničeno stranica</li>
            <li class="list-group-item">Napredni SEO</li>
            <li class="list-group-item">Napredno kodiranje</li>
            <li class="list-group-item">Izrada kompletnog vizuelnog identiteta</li>
            <li class="list-group-item">Povezivanje sa Guglom i Instagramom</li>
            <li class="list-group-item">Pravljenje kompleksnih baza podataka</li>
            <li class="list-group-item">Bonus održavanje 6 meseci</li>
          </ul>
          <div class="card-body">
            <p class="price pb-1 price1">od 1500€</p>
            <p class="price pb-1 price2">od 1800€</p>
            <a href="#procena">
            <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
</a>
          </div>
      </div>
    </div>
  </div>
</div>

-->


<?php include './modules/contact.php' ?>



<div class="container mt-5" id="faq">
  <div class="row">
    <h3 class="mb-3">FAQ</h2>
      <div class="col-lg-6 col-sm-12">
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Šta se dešava nakon što popunim zahtev?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
              To je sve sa Vaše strane! Mi ćemo da Vas provedemo kroz sve ostale korake i da Vam kažemo koje su nam informacije neophodne.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Kako se odvijaju konsultacije?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
              Živimo u 21. veku, a DNG studio se bavi digitalom, stoga je najefikasnije da pričamo online. Možemo da zakažemo razgovor putem Skajpa, Diskorda, Google Hangouts-a ili jednostavno putem telefona. Javite nam se sa svojim predlogom i mi ćemo da Vam izađemo u susret.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Da li imate cenovnik?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                <p>Izrada sajta nekada podrazumeva jednu jednostavnu stranicu, a nekada platformu na kojoj se radi mesecima. Stoga nije moguće napraviti precizan cenovnik.</p>
                <p>Cena sata rada našeg tima je 25 evra po satu, te u skladu sa tim formiramo i ponudu. Najjednostavnije je da nam bez ikakvih obaveza pošaljete zahtev za ponudu putem neke od kontakt formi i mi ćemo da Vam u najkraćem roku odgovorimo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 text-center">
        
        <a class="lightbox shadow mt-sm-3" href="media\pics\DNG Studio FAQ.jpg"><img src="media\pics\DNG Studio FAQ.jpg" alt="" ></a>
      </div>
  </div>
</div>


<?php include './modules/footer.php' ?>
