<div class="container align-items-start justify-content-center mt-5">
  <div class="card shadow mx-2 py-3 my-auto">
    <div class="card-body p-3">
      <h3 class="card-title">Ne uklapaš se u pakete?</h3>
      <p class="card-text my-2">To je sasvim normalno! Svaki projekat je priča za sebe i ne treba svakom klijentu isti tip usluge. Slobodno nam napiši u formi ispod šta te zanima, a mi ćemo da te provedemo kroz neka najbitnija pitanja. Ovde možeš da odlučiš da li želiš da se prvo konsultujemo ili bi odmah da nas angažuješ.</p>
      <div class="row">
        <div class="col-lg-6 col-sm-12">
        <form id="msform">
                              <!-- progressbar -->
                              <ul id="progressbar">
                                  <li class="active" id="account"><strong>Korak 1</strong></li>
                                  <li id="personal"><strong>Korak 2</strong></li>
                                  <li id="payment"><strong>Korak 3</strong></li>
                                  <li id="confirm"><strong>Pošalji</strong></li>
                              </ul>
                              <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <br>
                              <!-- fieldsets -->
                            <fieldset>
                                  <div class="form-card">
                                    <div class="form-group">
                                      <label for="name">Ime i prezime</label>
                                      <input type="text" class="form-control" id="name" placeholder="Ime i Prezime">
                                    </div>
                                    <div class="form-group">
                                      <label for="email">E-mail addresa</label>
                                      <input type="email" class="form-control" id="email" placeholder="email@email.com">
                                    </div>
                                    <div class="form-group">
                                    <label for="service">Koja te usluga zanima?</label>
                                      <select class="form-control" id="service" name="service">
                                        <option value="website">Izrada sajta/web prodavnice</option>
                                        <option value="design">Grafički dizajn</option>
                                        <option value="marketing">SEO & Marketing</option>
                                      </select>
                                    </div>
                                  </div> <input type="button" name="dalje" class="btn btn-outline-secondary next action-button" value="Dalje" />
                            </fieldset>
                            <fieldset>
                                  <div class="form-card">
                                    <div class="conditional-web" data-condition="#service === 'website'">
                                      <div class="form-group">
                                        <label for="numpages">Koliko okvirno stranica želiš da ima sajt?</label>
                                          <select class="form-control" id="numpages">
                                            <option>1-10</option>
                                            <option>11-100</option>
                                            <option>101-500</option>
                                            <option>501-1000</option>
                                            <option>>1000</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                      <label for="websitetype">Koja bi bila namena sajta?</label>
                                        <select class="form-control" id="websitetype">
                                          <option>E-prodavnica</option>
                                          <option>Platforma sa opcijama za pravljenje profila</option>
                                          <option>Portfolio sajt</option>
                                          <option>Prezentacija firme</option>
                                          <option>Lični blog</option>
                                          <option>Ostalo</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                      <label for="websitebudget">Koliki ti je okviran budžet za projekat?</label>
                                        <select class="form-control" id="websitebudget">
                                          <option>do 500€</option>
                                          <option>500€ - 1000€</option>
                                          <option>2000€ - 3000€</option>
                                          <option>3000€ - 5000€</option>
                                          <option>Preko 5000€</option>
                                        </select>
                                      </div>
                                    </div>
                                    
                                    <div class="conditional-design" data-condition="service === 'design'">
                                      <div class="form-group">
                                        <label for="designtype">Šta želiš da dizajniramo?</label>
                                        <select class="form-control" id="designtype" name="designtype">
                                          <option>Logo</option>
                                          <option>Vizit kartu</option>
                                          <option>Flajer/brošuru</option>
                                          <option>Promotivni materijal</option>
                                          <option>Dizajn za garderobu</option>
                                          <option>Vizuelni identitet</option>
                                          <option>Brending vozila</option>
                                          <option>Reklamu</option>
                                          <option>UI/UX dizajn</option>
                                          <option value="customdesign">Imam poseban zahtev</option>
                                        </select>
                                      </div>
                                      <div class="conditional-customdesign" data-condition="designtype === 'customdesign'">
                                        <div class="form-group">
                                          <label for="designmisc">Ovde napiši šta želiš da dizajniramo</label>
                                          <textarea class="form-control" id="designmisc" placeholder="Npr. Želim da mi dizajnirate post za moju Facebook reklamu"></textarea>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                      <label for="websitebudget">Koliki ti je okviran budžet za projekat?</label>
                                        <select class="form-control" id="websitebudget">
                                          <option>do 500€</option>
                                          <option>500€ - 1000€</option>
                                          <option>2000€ - 3000€</option>
                                          <option>3000€ - 5000€</option>
                                          <option>Preko 5000€</option>
                                        </select>
                                      </div>
                                      
                                    </div>
                                    <div class="conditional-marketing" data-condition="service === 'marketing'">
                                      <div class="form-group">
                                        <label for="marketingtype">Koji tip marketinga te zanima?</label>
                                        <select class="form-control" id="marketingtype">
                                          <option>SEO</option>
                                          <option>Google marketing</option>
                                          <option>Instagram marketing</option>
                                          <option>Facebook marketing</option>
                                          <option>Vođenje profila na društvenim mrežama</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="marketingbudget">Koliki ti je okviran mesečni budžet za projekat?</label>
                                        <select class="form-control" id="marketingbudget">
                                          <option>do 200€</option>
                                          <option>200€ - 500€</option>
                                          <option>5000€ - 1000€</option>
                                          <option>1000€ - 2000€</option>
                                          <option>2000€ - 3000€</option>
                                          <option>Preko 3000€</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="button" name="dalje" class="btn btn-outline-secondary next action-button" value="Dalje" /> <input type="button" name="Nazad" class="previous btn btn-outline-secondary action-button-previous" value="Nazad" />
                            </fieldset>
                              
                              
                            <fieldset>
                                  <div class="form-card">
                                    <div class="conditional-web-2" data-condition="service === 'website'">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="existingsite" value="existingsite">
                                        <label class="form-check-label" for="existingsite1">
                                          Treba mi novi sajt
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="existingsite" value="hassite">
                                        <label class="form-check-label" for="existingsite2">
                                          Imam već svoj sajt i treba mi održavanje/redizajn
                                        </label>
                                      </div>
                                      <div class="basegap"></div>
                                      <div class="conditional-existing-site"  data-condition="existingsite === 'hassite'">
                                        <div class="input-group flex-nowrap">
                                          <span class="input-group-text" id="addon-wrapping">https:\\</span>
                                          <input type="text" class="form-control" placeholder="www.tvojsajt.com" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="specialrequest">Opiši ovde detaljnije projekat, reci nam šta želiš, pošalji neke sajtove koji ti se sviđaju.</label>
                                        <textarea class="form-control" id="specialrequest" placeholder="Npr. Želim da mi napravite sajt za prodaju automobila, da korisnici mogu da prave profile i šalju poruke..."></textarea>
                                      </div>
                                    </div>
                                    
                                    <div class="conditional-marketing-2" data-condition="service === 'marketing'">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="existingprofile" value="existingprofiles">
                                        <label class="form-check-label" for="existingsite1">
                                          Imam već napravljene profile
                                        </label>
                                      </div>
                                      
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="existingprofile" value="newprofiles">
                                        <label class="form-check-label" for="existingsite2">
                                          Treba da se otvore novi profili
                                        </label>
                                      </div>
                                      <div class="conditional-existing-profiles" data-condition="existingprofile === 'existingprofiles'">
                                        <div class="input-group flex-nowrap">
                                          <span class="input-group-text" id="addon-wrapping"><i class="bi bi-facebook"></i></span>
                                          <input type="text" class="form-control" placeholder="Link do Facebook profila" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="input-group flex-nowrap">
                                          <span class="input-group-text" id="addon-wrapping"><i class="bi bi-instagram"></i></span>
                                          <input type="text" class="form-control" placeholder="Link do Instagram profila" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                      </div>
                                      <div class="basegap"></div>
                                      <div class="form-group">
                                          <label for="specialrequest">Opiši ovde detaljnije projekat, reci nam šta želiš, pošalji nam neku marketing kampanju na koju bi da se ugledaš.</label>
                                          <textarea class="form-control" id="specialrequest" placeholder="Npr. Želim da mi napravite kampanju u kojoj bih reklamirao aparate za kafu."></textarea>
                                      </div>
                                      
                                    </div>
                                    
                                    <div class="conditional-design-2"  data-condition="service === 'design'">
                                      <div class="form-group">
                                          <label for="specialrequest">Opiši ovde detaljnije projekat, reci nam šta želiš, pošalji neki dizajn koji ti se sviđa i reci nam koji fajlovi ti trebaju.</label>
                                          <textarea class="form-control" id="specialrequest" placeholder="Želim da mi dizajnirate reklamu za bilbord, treba mi PDF fajl i želim da glavna boja bude žuta."></textarea>
                                      </div>
                                    </div>
                                    
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="nextsteps" value="mailoffer">Pošaljite mi ponudu na mejl
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="nextsteps" value="book">Želim da zakažem online konsultacije
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="nextsteps" value="hire">Želim odmah da vas angažujem
                                    </label>
                                  </div>
                                  
                                  <div class="conditional-book"  data-condition="nextsteps === 'book'">
                                    <label for="date">Odaberite datum: </label>
                                    <input type="date" id="date" name="date">
                                    </div>
                                  </div>
                                    
                                  <input type="button" name="next" id="submit-btn" class="next action-button btn btn-outline-secondary" value="Pošalji" /> <input type="button" name="previous" class="previous action-button-previous btn btn-outline-secondary" value="Nazad" />
                              </fieldset>
                              
                              
                            <fieldset>
                              <div class="form-card">
                                    <h3>Poruka uspešno poslata</h3>
                                    <p>Naš tim će da ti odgovori u najkraćem roku.</p>
                                    <div id="msg-sent"></div>
                              </div>
                            </fieldset>
                          </form>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="card mb-3 bg-light" style="max-width: 18rem;" id="info">
            <div class="card-body">
              <h4 class="card-title"><i class="bi bi-info-circle me-1" aria-label="Info"></i>Nekoliko napomena</h4>
              <ul>
                <li>Od kompleksnosti projekta najviše zavise cena i rok izrade</li>
                <li>Popuni formu što preciznije</li>
                <li>Obavezno ostavi pravu mejl adresu</li>
                <li>Konsultacije se vrše online, a po potrebi se zakazuje sastanak</li>
                <li>Za sve nejasnoće obrati nam se putem četa ili poziva</li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>
