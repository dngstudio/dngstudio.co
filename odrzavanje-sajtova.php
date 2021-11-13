<?php 
$title = 'Održavanje sajtova';
require './modules/header.php'; ?>



<div class="container-fluid py-4">
    <div class="container text-center">
        <h1 class="px-lg-5">Bolje sprečiti nego lečiti</h1>
        <p class="px-lg-5 my-3">Zašto da se dovodiš u situaciju da ti sajt padne ili da zastari? Sajt je živ organizam kome treba redovno održavanje i sređivanje. Prepusti to nama.</p>
        <a href="#paketi">
        <button class="fill">Pogledaj pakete</button>
</a>
      </div>
</div>

<div class="container-fluid skew-secondary bg-secondary mt-5">
  <div class="container mt-3">
    <h2 class="text-white">Zašto održavanje?</h2>
    <p class="text-white">Klijenti često misle da je izrada sajta posao koji se obavi jednom i onda može da bude miran godinama. Međutim, tehnologija je toliko napredovala i menja se iz dana u dan, tako da izgled i funkcionalnosti sajta mogu lako da zastare. U najboljem slučaju posledica je samo estetska, ali nažalost zapušten sajt često odbija posetioce.</p>
      <div class="row gx-lg-4 gy-4 pt-3 pb-4">
      <div class="col-lg-4 col-sm-12 justify-content-center">
        <div class="card text-center shadow services" >
          <div class="card-body">
            <img src="media\icons\Coupe-01.png" alt="" class="services-icons my-2">
            <h5 class="card-title">Sajt je kao auto</h5>
            <p class="card-text">Kako bi te sajt dobro služio, moraš redovno i temeljno da ga "servisiraš". Ne dopusti da te izda na sred puta.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 justify-content-center">
      <div class="card text-center shadow services" >
          <div class="card-body">
            <img src="media\icons\Anti Virus.png" alt="" class="services-icons my-2">
            <h5 class="card-title">Bezbednost</h5>
            <p class="card-text">Napadači prepoznaju ranjive sajtove. Mi se brinemo o redovnom ažuriranju kôda i skeniranju virusa.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12  justify-content-center">
      <div class="card text-center shadow services" >
          <div class="card-body">
            <img src="media\icons\Manager.png" alt="" class="services-icons my-2">
            <h5 class="card-title">Sve prepuštaš nama</h5>
            <p class="card-text">Ne gubi dragoceno vreme na održavanje. Svu brigu prepusti nama, a ti se posveti razvijanju svog posla.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<h3 id="paketi" class="mb-2 mt-5 text-center">Paketi održavanja</h2>

<div class="d-flex form-check form-switch justify-content-center mb-3">
    <label id="odjednom">Godišnje</label>
    <input class="form-check-input" id="mplacanje" type="checkbox" role="switch" id="flexSwitchCheckDefault">
    <label id="rate">Mesečno</label>
</div>


<div class="container min-vh-100" id="maintenance-container">
  <div class="row gx-lg-2 mt-3">
    <div class="col-lg-3 col-sm-12" id="maintenance1">
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
            <a href="#procena">
            <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
</a>
          </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-12" id="maintenance2">
    <div class="vgap"></div>
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
            <a href="#procena">
          <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-12" id="maintenance3">
    <div class="vgap"></div>
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
            <a href="#procena">
            <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
</a>
          </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-12" id="maintenance4">
    <div class="vgap"></div>
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
            <a href="#procena">
            <button class="btn btn-outline-secondary">Zakaži konsultacije</button>
</a>
          </div>
      </div>
    </div>
  </div>
</div>

<?php include './modules/contact.php' ?>



<?php include './modules/footer.php' ?>
