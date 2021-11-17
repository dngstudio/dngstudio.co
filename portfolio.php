<?php 
$title = 'Portfolio';
require './modules/header.php'; ?>

<div class="container text-center mt-4 ecom-header">
    <h2 class="px-lg-5">Dela, ne reči.</h2>
    <p class="px-lg-5 my-3">Najbolji način da pokažemo šta sve možemo da uradimo je da te provedemo kroz neke od naših projekata.</p>
    <h2><i class="bi bi-chevron-compact-down"></i></h2>
</div>

<div class="container mt-3">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Web development</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">E-commerce</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dizajn</button>
        </li>
    </ul>
    <div class="row gx-lg-3 mt-4">
        <div class="col">
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
                        <small>Web development</small>
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
                        <small>E-commerce</small>
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
                        <small>E-commerce</small>
                    </div>
                    <button type="button" class="btn btn-link mt-1" data-bs-toggle="modal" data-bs-target="#dungnModal">
                        Saznaj više
                    </button>
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

<div class="modal fade" id="cvetalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="digitalprintModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="otvorifirmuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="kipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="cfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="zpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="emModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="bsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="mnModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal fade" id="dungnModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<?php include './modules/footer.php' ?>
