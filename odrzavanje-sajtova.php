<?php 
$title = 'Održavanje sajtova';
require './modules/header.php'; ?>

<div class="container-fluid py-4">
    <div class="container text-center">
        <h1 class="px-5">Bolje sprečiti nego lečiti</h1>
        <p class="px-5 my-3">Zašto da se dovodiš u situaciju da ti sajt padne ili da zastari? Sajt je živ organizam kome treba redovno održavanje i sređivanje. Prepusti to nama.</p>
        <button class="fill">Pogledaj pakete</button>
    </div>
</div>


<h3 class="mb-2 mt-5 text-center">Paketi održavanja</h2>

<div class="d-flex form-check form-switch justify-content-center mb-3">
    <label id="odjednom">Godišnje</label>
    <input class="form-check-input" id="mplacanje" type="checkbox" role="switch" id="flexSwitchCheckDefault">
    <label id="rate">Mesečno</label>
</div>


<div class="container min-vh-100">
  <div class="row gx-lg-2 mt-3">
    <div class="col-lg-3 col-sm-12">
      <div class="card text-center shadow maintenance mx-2 py-3">
          <div class="card-body">
            <h5 class="card-title">Bronze</h5>
            <p class="card-text">Početni sajt, savršen za portfolio firme ili pojedinca.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Do 5 stranica</li>
            <li class="list-group-item">SEO</li>
            <li class="list-group-item">Optimizacija za mobilne uređaje</li>
          </ul>
          <div class="card-body">
            <p class="price price-muted mprice1 text-gray-400 text-muted text-decoration-line-through">600€</p>
            <p class="price pb-1 mprice1">500€</p>
            <p class="price pb-1 mprice2">50€</p>
            <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
          </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-12">
      <div class="card text-center shadow maintenance mx-2 py-3" id="featured">
        <div class="card-body">
          <h5 class="card-title">Silver</h5>
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
            <p class="price price-muted mprice1 text-gray-400 text-muted text-decoration-line-through">1560€</p>
            <p class="price pb-1 mprice1">1390€</p>
            <p class="price pb-1 mprice2">130€</p>
          <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-12">
      <div class="card text-center shadow maintenance mx-2 py-3">
          <div class="card-body">
            <h5 class="card-title">Gold</h5>
            <span class="badge bg-secondary my-2">Najtraženije</span>    
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
            <p class="price price-muted mprice1 text-gray-400 text-muted text-decoration-line-through">3000€</p>
            <p class="price pb-1 mprice1">2600€</p>
            <p class="price pb-1 mprice2">250€</p>
            <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
          </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-12">
      <div class="card text-center shadow maintenance mx-2 py-3">
          <div class="card-body">
            <h5 class="card-title">Platinum</h5>
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
            <p class="price price-muted mprice1 text-gray-400 text-muted text-decoration-line-through">4200€</p>
            <p class="price pb-1 mprice1">3700€</p>
            <p class="price pb-1 mprice2">350€</p>
            <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
          </div>
      </div>
    </div>
  </div>
</div>




<?php include './modules/footer.php' ?>
