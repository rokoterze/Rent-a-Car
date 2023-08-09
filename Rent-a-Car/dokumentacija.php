<?php if ($_SERVER['SERVER_PROTOCOL'] = 'http') {header('../../login.php');}?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="shortcut icon" type="x-icon" href="./resources/icons/website-icon.png">

    <link rel="stylesheet" href="./css/dokumentacija.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<title>Documentation</title>
</head>

<body>
    <div id="gridContainer">
        <div id="header" class="header">
            <a href="./login.php" class="contact">Log In</a>
            <a href="./contact.php" class="contact">Contact Us</a>
            <a href="./rokoterze.php" class="contact">About Me</a>
            <a href="./dokumentacija.php" class="contact">Documentation</a>
        </div>
            
        <div id = "main_doc">
            <div id = "main_doc_left">
                
            <h2>Dokumentacija</h2>
                <hr>
                <h3>Opis projektnog zadatka i rješenja</h3>
                <p>U ovom projektnom zadatku bilo je potrebno napraviti program u web okruženju koji služi za administraciju vozila u rent-a-car tvrtci. Program je trebao sadržavati korisničko sučelje za administratora, korisnika te gosta.</p>

                <p>Korisničko sučelje administratora nudi mogućnost upravljanja nad svim korisnicima ovog programa, što uključuje ažuriranje podataka, statusa aktivnosti i statusa zaključanosti korisničkih računa. Također, administrator ima opciju pregleda vremena prijave i odjave korisnika, te uvid u promjene kroz dnevnik izmjena. Administrator upravlja i nad sistemskih postavkama kao što su upravljanje postavkama trajanja kolačića, broja prikaza na određenim tablicama i postavljanjem broja dozovoljenih neuspjelih pokušaja logiranja, odnosno upisa pogrešne lozinke.</p>
                
                <p>Korisničko sučelje korisnika nudi mogućnost administracije nad vrstama vozila kao što su automobili, bicikli i skuteri. Posjeduje pregled ponude vozila u tabličnom obliku, uz opciju pretraživanja prema vrsti i nazivu tablice. Administracija sadrži opciju unosa novih vozila, te ažuriranje postojećih vozila, odnosno njihovih podataka ili statusa. Prilikom kreiranja "Check-In" operacije, korisnik upisuje podatke o iznajmljivaču, naziv tablice, te vremenski period, gdje se prilikom odabira cijena automatski generira ovisno o pojedinačnoj cijeni vozila i odabranom broju dana. Prilikom kreiranja "Check-Out" operacije, korisnik u tabličnom obliku može pretraživati sva vozila koja su u statusu iznajmljenih, te prema odabiru zaprimiti vozilo natrag. U sekciji statistike, prikazuju se sva iznajmljena vozila te ukupna zarada od najma.</p>

                <p>Korisničko sučelje gosta nudi mogućnost kontaktiranja autora aplikacije putem kontakt obrasca, te uvid u sva dostupna vozila svih rent-a-car tvrtki koje koriste ovaj program. </p>
                <hr>

                <h3>Opis korištenih tehnologija</h3>
                <p>U ovom projektnom zadatku korišteni Visual Studio Code kao alat za programiranje, XAMPP besplatni paket rješenja za "web hosting", programske tehnologije JavaScript (jQuery), PHP i baza podataka phpMyAdmin.</p>
                <hr>

                <h3>Uočeni problemi u radu</h3>
                <ul>
                    <li>Nakon preuzimanja kopije baze podataka, te pokušaja vraćanja podataka iz kopije, potrebno je kreirati novu bazu podataka s različitim imenom od postojeće kako bi se podaci uspješno upisali u novu. Naime, trenutna verzija aplikacije nije u mogućnosti odbaciti (DROP) korištenu bazu pod imenom "rent-a-car", a uz to kreirati novu s istim imenom, kako ne bi poremetili rad aplikacije i uspješno vratili sigurnosnu kopiju podataka natrag u "novu" bazu podataka.</li><br>
                    
                    <li>Trenutna verzija aplikacije dopušta da više različitih korisnika (tvrtki) posjeduje iste nazive tablica s vozilima u aktivnom statusu. Rješenje ovog problema je u tom da mogu postojati u bazi isti nazivi tablica za više vozila, samo ako je jedno od njih u aktivnom statusu a sva ostala u neaktivnom. Rezultat neaktivnog stanja je prodaja određenog vozila ili slično, što bi u ovom slučaju značilo da je došlo do transfera vozila iz jedne tvrtke u drugu.</li><br>
                    
                    <li>Ako je vozilu Check-In nekog drugog dana osim danas, svejedno postane nedostupno. Rješenje ovog problema je prikaz dostupnosti po datumima ili onemogućiti korisniku da odabere dan za Check-In, osim ako nije danas!</li><br>

                    <li>Kolačić za uvjete korištenja nakon što korisnik odabere "Reject" opciju ne zapamti odabir, već prilikom svakog idućeg posjeta ili osvježavanja stranice, okvir za kolačić se ponovno prikazuje. Rješenje ovog problema je da program zapamti odabir, te nakon toga više ne prikazuje obavijest za kolačić.</li><br>
                    
                    <li>U trenutnoj verziji aplikacije Reset a Password ne sadrži nikakve funkcionalnosti, UI je implementiran. U budućnosti će ovo biti forma u kojoj će korisnik upisati svoju email adresu, te će sustav poslati email na adresu s "reset" linkom. Također potrebno je dodati još jednu stranicu koja će nastaviti proces resetiranja lozinke, ta stranica nije trenutno postojeća ili definirana.</li>
                    
                    <br>
                </ul>
                <hr>

                <h3>Popis mapa i datoteka</h3>
                    <ul>
                        <li>css
                            <ul>
                                <li>signup-login-reset
                                    <ul>
                                        <li>signup-login-reset.css</li>
                                    </ul>
                                </li>
                                <li>sites
                                    <ul>
                                        <li>admin
                                            <ul>
                                                <li>main-container.css</li>
                                            </ul>
                                        </li>
                                        <li>user
                                            <ul>
                                                <li>main-container.css</li>
                                            </ul>
                                        </li>
                                        <li>header-container.css</li>
                                        <li>navigation-container.css</li>
                                        <li>styles.css</li>
                                    </ul>
                                </li>
                                <li>dokumentacija.php</li>
                            </ul>
                        </li>
                        <li>include
                            <ul>
                                <li>cookies
                                    <ul>
                                        <li>cookie.php</li>
                                    </ul>
                                </li>
                                <li>database
                                    <ul>
                                        <li>backup_upload.php</li>
                                        <li>backup.php</li>
                                        <li>dbh.inc.php</li>
                                    </ul>
                                </li>
                                <li>PHPMailer
                                    <ul>
                                        <li>src
                                            <li>Exception.php</li>
                                            <li>OAuth.php</li>
                                            <li>OAuthTokenProvider.php</li>
                                            <li>PHPMailer.php</li>
                                            <li>POP3.php</li>
                                            <li>SMTP.php</li>
                                        </li>
                                        <li>sendEmail.php</li>
                                    </ul>
                                </li>
                                <li>signup-login-reset
                                    <ul>
                                        <li>activation
                                            <ul>
                                                <li>activation-errors.php</li>
                                                <li>activation.inc.php</li>
                                            </ul>
                                        </li>
                                        <li>contact
                                            <ul>
                                                <li>contact-errors.php</li>
                                                <li>contact.inc.php</li>
                                            </ul>
                                        </li>
                                        <li>login
                                            <ul>
                                                <li>login-errors.php</li>
                                                <li>login.inc.php</li>
                                            </ul>
                                        </li>
                                        <li>reset
                                            <ul>
                                                <li>reset-errors.php</li>
                                                <li>reset.inc.php</li>
                                            </ul>
                                        </li>
                                        <li>signup
                                            <ul>
                                                <li>check-email.php</li>
                                                <li>check-username.php</li>
                                                <li>signup-errors.php</li>
                                                <li>signup.inc.php</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>sites
                                    <ul>
                                        <li>admin
                                            <ul>
                                                <li>accdb_table.php</li>
                                                <li>accdb.inc.php</li>
                                                <li>errors.php</li>
                                                <li>sysconfig.inc.php</li>
                                                <li>syslogs_table.php</li>
                                                <li>systracker_search.php</li>
                                            </ul>
                                        </li>
                                        <li>user
                                            <ul>
                                                <li>administration_edit.php</li>
                                                <li>administration_search.php</li>
                                                <li>administration.inc.php</li>
                                                <li>checkin.inc.php</li>
                                                <li>checkout.inc.php</li>
                                                <li>errors.php</li>
                                                <li>rent_statistics_table.php</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>system
                                    <ul>
                                        <li>system.inc.php</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>javascript
                            <ul>
                                <li>signup-login-reset
                                    <ul>
                                        <li>activation.js</li>
                                        <li>ajax.js</li>
                                        <li>contact.js</li>
                                        <li>cookie.js</li>
                                        <li>login.js</li>
                                        <li>reset.js</li>
                                        <li>signup.js</li>
                                    </ul>
                                </li>
                                <li>sites
                                    <ul>
                                        <li>admin
                                            <ul>
                                                <li>ajax.js</li>
                                                <li>main.js</li>
                                            </ul>
                                        </li>
                                        <li>user
                                            <ul>
                                                <li>main.js</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>jquery-3.6.2.min.js</li>
                            </ul>
                        </li>
                        <li>resources
                            <ul>
                                <li>icons
                                    <ul>
                                        <li>logout.png</li>
                                        <li>website-icon.png</li>
                                    </ul>
                                </li>
                                <li>img
                                    <ul>
                                        <li>administrator.png</li>
                                        <li>bgm2.jpg</li>
                                        <li>bgm6.png</li>
                                        <li>gost.png</li>
                                        <li>korisnik.png</li>
                                        <li>profile.jpg</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>sites
                            <ul>
                                <li>admin
                                    <ul>
                                        <li>accdb.php</li>
                                        <li>index.php</li>
                                        <li>logout.php</li>
                                        <li>sysconfig.php</li>
                                        <li>syslogs.php</li>
                                        <li>systracker.php</li>
                                    </ul>
                                </li>
                                <li>user
                                    <ul>
                                        <li>administration.php</li>
                                        <li>checkin.php</li>
                                        <li>checkout.php</li>
                                        <li>index.php</li>
                                        <li>logout.php</li>
                                        <li>rentstatistics.php</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>templates
                            <ul>
                                <li>signup-login-reset
                                    <ul>
                                        <li>footer.php</li>
                                        <li>header.php</li>
                                    </ul>
                                </li>
                                <li>sites
                                    <ul>
                                        <li>footer-guest.php</li>
                                        <li>footer.php</li>
                                        <li>header-guest.php</li>
                                        <li>header.php</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>activation.php</li>
                        <li>dokumentacija.php</li>
                        <li>guest.php</li>
                        <li>login.php</li>
                        <li>reset.php</li>
                        <li>rokoterze.php</li>
                        <li>signup.php</li>
                    </ul>
                <hr>
            </div>
                <br>
            <div id = "main_doc_right">
            <h2>Use Case dijagrami</h2>
                <hr>
                <img src="./resources/img/administrator.png" alt="administrator.png" class="usecase"><hr>
                <img src="./resources/img/korisnik.png" alt="korisnik.png" class="usecase"><hr>
                <img src="./resources/img/gost.png" alt="gost.png" class="usecase"><hr>
            </div>
        </div>
        <div id="footer">
        <br>
        <label for="">&copy by Roko Terze</label>
        </div>
    </div>
    
</body>

</html>
