<?php 
$title = 'Početna';
require './modules/header.php'; ?>

<div class="container header">
  <div class="row align-items-center">
    <div class="col">
      <h1 class="h1">DNG Studio firmu čuva</h1>
      <p>Pomažemo firmama i pojedincima da se istaknu uz upečatljiv digitalni identitet.</p>
      <button class="fill">Pošaljite upit</button>
      <button class="btn btn-outline-dark ms-2" style="padding: 10px 20px 10px; position:relative;top:7px">Saznajte više</button>
    </div>
    <div class="col">
      <div id="home-anim"></div>
    </div>
  </div>
</div>



<div class="pt-5 pb-5 container">
  <div class="row">
    <div class="col d-flex justify-content-center">
      <div class="card text-center shadow services" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">E-commerce</h5>
          <p class="card-text">Izrada Internet prodavnica, od onih za jedan proizvoda, do velikih radnji.</p>
          <a href="#" class="card-link">Saznajte više</a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
    <div class="card text-center shadow services" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Web dizajn</h5>
          <p class="card-text">Dizajniramo sajtove svih nivoa kompleksnosti. Neka Vaš sajt bude poseban!</p>
          <a href="#" class="card-link">Saznajte više</a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
    <div class="card text-center shadow services" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Web development</h5>
          <p class="card-text">Razvijanje dinamičkih sistema i aplikacija za web pregledače, Android i iOS.</p>
          <a href="#" class="card-link">Saznajte više</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col d-flex justify-content-center">
      <div class="card text-center shadow services" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Grafički dizajn</h5>
          <p class="card-text">Dizajn logoa, promotivnog materijala i kompletnog vizuelnog identiteta.</p>
          <a href="#" class="card-link">Saznajte više</a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
    <div class="card text-center shadow services" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">SEO</h5>
          <p class="card-text">Uz adekvatno odrađen SEO, Vaš sajt može da se nađe na prvoj strani Gugla bez reklama.</p>
          <a href="#" class="card-link">Saznajte više</a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
    <div class="card text-center shadow services" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Digitalni marketing</h5>
          <p class="card-text">Postavljanje kampanja na društvenim mrežama i vođenje profila.</p>
          <a href="#" class="card-link">Saznajte više</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 text-center d-flex flex-column justify-content-center align-items-center">
  <h3>Ukazali su nam poverenje</h3>
  <div class="row mt-4 gx-4 align-items-center">
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
    <div class="row mt-4 gx-4 align-items-center">
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

<div class="container d-flex flex-column h-100 justify-content-center align-items-center">
  <div class="row">
    <div class="col">
      <h2 class="h2">DNG Studio firmu čuva</h2>
      <p>Pomažemo firmama i pojedincima da se istaknu uz upečatljiv digitalni identitet.</p>
      <button class="fill">Saznajte više</button>
    </div>
    <div class="col">
        <div class="card text-center shadow" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">E-commerce</h5>
            <p class="card-text">Izrada Internet prodavnica, od onih za jedan proizvoda, do velikih radnji.</p>
            <a href="#" class="card-link">Saznajte više</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid h-100" id="panelcontainer">
  <div id="panel" class="h-100">
    <div class="module panel1 h-100">
        <div class="container d-flex justify-content-center align-items-center">
          <div class="row">
            <div class="col">
              <img src="media\pics\DNG Studio FAQ.jpg" alt="">
            </div>
            <div class="col">
              
            </div>
          </div>
        </div>
    </div>
    <div class="module panel2 h-100"></div>
    <div class="module panel3 h-100"></div>
  </div>
</div>



<h3 class="mb-2 mt-5 text-center">Paketi usluga</h2>

<div class="d-flex form-check form-switch justify-content-center mb-3">
    <label id="odjednom">Odjednom</label>
    <input class="form-check-input" id="placanje" type="checkbox" role="switch" id="flexSwitchCheckDefault">
    <label id="rate">Na 3 rate</label>
</div>



<div class="container d-flex min-vh-100 align-items-start justify-content-center">
      <div class="card text-center shadow pricing d-inline-flex mx-2 py-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Šegrt</h5>
          <p class="card-text">Početni sajt, savršen za portfolio firme ili pojedinca.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Do 5 stranica</li>
          <li class="list-group-item">SEO</li>
          <li class="list-group-item">Optimizacija za mobilne uređaje</li>
        </ul>
        <div class="card-body">
          <p class="price pb-1 price1">od 300€</p>
          <p class="price pb-1 price2">od 420€</p>
          <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
        </div>
      </div>
      <div class="card text-center shadow pricing d-inline-flex mx-2 py-3" id="featured" style="width: 18rem;">
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
        </ul>
        <div class="card-body">
          <p class="price pb-1 price1">od 500€</p>
          <p class="price pb-1 price2">od 600€</p>
          <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
        </div>
      </div>
      <div class="card text-center shadow pricing d-inline-flex mx-2 py-3" style="width: 18rem;">
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
        </ul>
        <div class="card-body">
          <p class="price pb-1 price1">od 1500€</p>
          <p class="price pb-1 price2">od 1800€</p>
          <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
        </div>
      </div>
</div>


<div class="container" id="faq">
  <div class="row">
    <h3 class="mb-3">FAQ</h2>
      <div class="col">
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
                <p>Cene su izražene samo za promotivne pakete koje nudimo. Zašto nisu izražene za svaku uslugu? Iz prostog razloga: zato što je svaki posao drugačiji. Izrada sajta nekada podrazumeva jednu jednostavnu stranicu, a nekada platformu na kojoj se radi mesecima.</p>
                <p>Cena sata rada našeg tima je 25 evra po satu, te u skladu sa tim formiramo i ponudu. Najjednostavnije je da nam bez ikakvih obaveza pošaljete zahtev za ponudu putem neke od kontakt formi i mi ćemo da Vam u najkraćem roku odgovorimo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        
        <a class="lightbox" href="media\pics\DNG Studio FAQ.jpg"><img src="media\pics\DNG Studio FAQ.jpg" alt="" class="shadow ms-4"></a>
      </div>
  </div>
</div>


<?php include './modules/footer.php' ?>
