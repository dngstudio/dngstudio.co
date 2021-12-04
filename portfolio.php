<?php 
$title = 'Portfolio';
$desc = 'DNG Media je firma za pravljenje sajtova i svega što ide uz to.';
require './modules/header.php'; ?>

<div class="container text-center mt-4 ecom-header">
    <h2 class="px-lg-5">Dela, ne reči.</h2>
    <p class="px-lg-5 my-3">Najbolji način da pokažemo šta sve možemo da uradimo je da te provedemo kroz neke od naših projekata.</p>
    <h2><i class="bi bi-chevron-compact-down"></i></h2>
</div>

<div class="container mt-3">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-webdev-tab" data-bs-toggle="pill" data-bs-target="#pills-webdev" type="button" role="tab" aria-controls="pills-webdev" aria-selected="true">Web development</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">E-commerce</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dizajn</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Marketing</button>
        </li>
    </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="row gx-lg-3 mt-4">
        <div class="col tab-pane fade show active" id="pills-webdev" role="tabpanel" aria-labelledby="pills-webdev-tab">
            <div class="card shadow-sm mb-3 ">
                <img class="card-img-top" src="media\portfolio\tvoja majica.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tvoja majica</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>
                    <div class="categories text-muted">
                        <small>E-commerce</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#tvojamajicaModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\Edusaurus.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Edusaurus</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>
                    <div class="categories text-muted">
                        <small>Web development</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#edusaurusModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\cvetal.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cvetal</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>Web development</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#cvetalModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-lg-3 mt-3">
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\digital print.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Digital print</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>
                    
                    <div class="categories text-muted">
                        <small>E-commerce</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#digitalprintModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\otvori firmu.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Otvori firmu</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>Web development</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#otvorifirmuModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\kursinternetprodaje.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Kurs Internet prodaje</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>Web development</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#kipModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-lg-3 mt-3">
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\charlie fashion.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Charlie Fashion</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>E-commerce</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#cfModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\zelena panorama.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Zelena panorama</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>Web development</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#zpModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\Easy Moving.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Easy Moving</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>Web development, UI/UX dizajn</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#emModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-lg-3 mt-3">
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\Best Service.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Best Service</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>Web development</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#bsModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\Moja Nalepnica.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Moja nalepnica</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>E-commerce, Grafički dizajn</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#mnModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="media\portfolio\dungn.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dungn</h5>
                    <p class="card-text text-truncate"><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili. Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu. U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>

                    <div class="categories text-muted">
                        <small>E-commerce, Grafički dizajn, UI/UX dizajn, Marketing</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#dungnModal">
                        Saznaj više
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tvojamajicaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tvoja majica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\tvoja majica.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small>Svi smo bar jednom naručivali štampu na majici za poklon nekome i majica nije ispala onakvo kako smo je zamislili.
                    Kako se to ne bi dešavalo više Tvoja Majica Vam nudi opciju da u interaktivnom online dizajneru sami dizajnirate majicu.
                    U ovaj projekat smo implementirali Fancy Product Designer koji omogućava da
                    Vaši kupci sami određuju poziciju teksta i slika na majicama i da Vi dobijate fajlove spremne za štampu.</small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: E-commerce</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, wizard za otpremanje sopstvenog dizajna</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Gold</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edusaurusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edusaurus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\Edusaurus.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small></small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: E-commerce</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, wizard za otpremanje sopstvenog dizajna</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Gold</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cvetalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cvetal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\cvetal.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small></small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: E-commerce</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, wizard za otpremanje sopstvenog dizajna</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Gold</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="digitalprintModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Digital print</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\digital print.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small></small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: E-commerce</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, wizard za otpremanje sopstvenog dizajna</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Gold</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="otvorifirmuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Otvori firmu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\otvori firmu.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small></small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: Web development</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, wizard za otpremanje sopstvenog dizajna</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Samostalno</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="kipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kurs Internet prodaje</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\kursinternetprodaje.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small>Još jedan od Flagship projekata iza koga ponosno stojimo. Kao tim web developera koji specijalizuje izradu internet prodavnica
                  bilo je potpuno logično da izradimo ovakav jedan sajt koji ima kompletan kurs, sistem za online praćenje kursa,
                  polaganje ispita i online plaćanje.</small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: Web development</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Learnpress, PHP</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online praćenje nastave, ćaskanje sa predavačima, online testovi</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Gold</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Charlie Fashion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\charlie fashion.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small>Cilj ovog projekta je bio da napravimo sajt koji ne izgleda kao da je sajt. Želeli smo da napravimo
                  sajt koji će Vam izazvati osećaj kupovine iz retro kataloga. Koliko god to zvučalo kontradiktorno u današnje
                  vreme je bitno istaći se po svaku cenu.</small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: E-commerce</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce, CSS</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, Instagram integracija, Facebook Pixel, promotivne akcije, prilagođen dizajn</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Silver</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="zpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Zelena panorama</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\zelena panorama.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small></small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: E-commerce</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, wizard za otpremanje sopstvenog dizajna</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Bronze</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="emModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Easy Moving</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\Easy Moving.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small>Želite da se preselite ali ne znate odakle da počnete? Easy Moving je pravo mesto za Vas. Na sajtu možete da
                  se upoznate sa celim procesom selidbe od priprema stana i stvari za selidbu do izračunavanja kompletne cene selidbe
                  preko online kalkulatora cene.</small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: Web development</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, JavaScript, CSS</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 2 meseca</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Kalkulator usluga, dvojezičnost, kondicionalne forme</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Silver</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Best Service 2021</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\Best Service.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small></small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: Web development</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 3 nedelje</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Postavljanje oglasa za posao, forma za aplikante</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Samostalno</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mnModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Moja nalepnica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\Moja Nalepnica.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small></small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: E-commerce, grafički dizajn</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 3 nedelje</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, wizard za otpremanje sopstvenog dizajna</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Silver</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <button type="button" class="btn btn-link">Poseti sajt</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dungnModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dungn Clothing</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
            <div class="col-8 col-lg-8">
                <img class="modal-img" src="media\portfolio\dungn.JPG" alt="">
                <h5 class="mt-2">Opis projekta:</h5>
                <p><small>Dungn Underground je brend pod okriljem DNG Studija koji je nastao kao pokazna vežba naših mogućnosti koja je prerasla
                  u odvojeni entitet koji ima kultno praćenje na domaćoj alternativnoj sceni. DNG Studio ne stoji samo iza Dungn sajta već i
                  iza svakog dizajna koji Dungn ima u svojoj ponudi.</small></p>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><small>Kategorija: E-commerce, digitalni marketing, grafički dizajn</small></li>
                    <li class="list-group-item"><small>Tehnologije korišćene: Wordpress, Woocommerce, Adobe Illustrator, Facebook Ads</small></li>
                    <li class="list-group-item"><small>Vreme izrade: 3 godine, kontinuirana saradnja</small></li>
                    <li class="list-group-item"><small>Posebne funkcionalnosti: Online naručivanje, alternativan dizajn, praćenje invertara</small></li>
                    <li class="list-group-item"><small>Paket održavanja: <a href="odrzavanje-sajtova.php" class="text-primary">Platinum</a></small></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-outline-secondary">Želim ovakav sajt</button>
        <a href="http://www.dungn.rs" class="btn btn-link" role="button">Poseti sajt</a>
      </div>
    </div>
  </div>
</div>

<?php include './modules/footer.php' ?>
