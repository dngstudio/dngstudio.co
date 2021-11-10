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
            <p class="card-text">Za jednostavne sajtove. Neophodan paket za sve koji žele ispravan sajt.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Redovno obilaženje sajta</li>
            <li class="list-group-item">Popravka bagova</li>
            <li class="list-group-item">Ažuriranje zastarelog kôda</li>
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
          <p class="card-text">Za sajtove srednje kompleksnosti, kojima je potrebna veća briga i pažnja.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Obilaženje sajta dva puta nedeljno</li>
          <li class="list-group-item">Popravka bagova</li>
          <li class="list-group-item">Ažuriranje zastarelog kôda</li>
          <li class="list-group-item">Izmene na sajtu radi poboljšanja funkcionalnosti</li>
          <li class="list-group-item">Uvek dostupna podrška</li>
          <li class="list-group-item">Podešavanja responsivnosti</li>
          <li class="list-group-item">Bezbedonosna verifikacija</li>
          <li class="list-group-item">Mesečni testing</li>
          <li class="list-group-item">Ažuriranje SEO-a jednom mesečno</li>
          <li class="list-group-item">Do 3 izmene na sajtu mesečno</li>
          <li class="list-group-item">Mesečni backup</li>
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
            <p class="card-text">Za kompleksnije sajtove i Internet prodavnice. Sajtovi koji u sebi imaju dinamički sadržaj zahtevaju svakodnevno obilaženje.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Svakodnevno obilaženje sajta</li>
            <li class="list-group-item">Popravke bagova</li>
            <li class="list-group-item">Rešavanje problema u roku od 24 sata</li>
            <li class="list-group-item">Ažuriranje i izmena zastarelog kôda</li>
            <li class="list-group-item">Nedeljno ažuriranje SEO-a</li>
            <li class="list-group-item">Održavanje baza podataka</li>
            <li class="list-group-item">Do 2 sata besplatih konsultacija mesečno</li>
            <li class="list-group-item">Dodavanje do 2 statične stranice mesečno</li>
            <li class="list-group-item">Podržano održavanje dvojezičnog sajta</li>
            <li class="list-group-item">Bezbedonosna verifikacija</li>
            <li class="list-group-item">Nedeljni testing</li>
            <li class="list-group-item">Uvek dostupna korisnička podrška</li>
            <li class="list-group-item">Do 30 izmena/produkata mesečno</li>
            <li class="list-group-item">Nedeljni backup</li>
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
            <p class="card-text">Za ozbiljne veb prodavnice i platforme koje imaju više stotina ili hiljada posetioca dnevno. Ovakav sajt zahteva konstantan rad na njemu.</p>
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item">Svakodnevno obilaženje sajta</li>
            <li class="list-group-item">Popravke bagova</li>
            <li class="list-group-item">Rešavanje problema u roku od 12 sati</li>
            <li class="list-group-item">Ažuriranje i izmena zastarelog kôda</li>
            <li class="list-group-item">Ažuriranje SEO-a dva puta nedeljno</li>
            <li class="list-group-item">Održavanje baza podataka</li>
            <li class="list-group-item">Do 4 sata besplatih konsultacija mesečno</li>
            <li class="list-group-item">Dodavanje do 4 statične stranice mesečno</li>
            <li class="list-group-item">Podržano održavanje trojezičnog sajta</li>
            <li class="list-group-item">Bezbedonosna verifikacija</li>
            <li class="list-group-item">Testing dva puta nedeljno</li>
            <li class="list-group-item">Uvek dostupna korisnička podrška</li>
            <li class="list-group-item">Do 50 izmena/produkata mesečno</li>
            <li class="list-group-item">Briga o sajtu bez uključenosti klijenta</li>
            <li class="list-group-item">Kreiranje mesečnog izveštaja o aktivnosti sajta</li>
            <li class="list-group-item">Kvartalni izveštaji sa preporukama za dalji rad</li>
            <li class="list-group-item">Svakodnevni backup</li>
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

<?php include './modules/contact.php' ?>


<?php include './modules/footer.php' ?>
