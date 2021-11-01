window.onload = function() {
    Formio.createForm(document.getElementById('builder'),
    {       
        "display": "wizard",
    "settings": {
        "pdf": {
            "id": "1ec0f8ee-6685-5d98-a847-26f67b67d6f0",
            "src": "https://files.form.io/pdf/5692b91fd1028f01000407e3/file/1ec0f8ee-6685-5d98-a847-26f67b67d6f0"
        }
    },
    "components": [
        {
            "title": "Korak 1",
            "breadcrumbClickable": true,
            "buttonSettings": {
                "previous": true,
                "cancel": false,
                "next": true
            },
            "navigateOnEnter": false,
            "saveOnEnter": false,
            "scrollToTop": false,
            "collapsible": false,
            "key": "page1",
            "type": "panel",
            "label": "Page 1",
            "components": [
                {
                    "label": "Columns",
                    "columns": [
                        {
                            "components": [
                                {
                                    "label": "Ime",
                                    "spellcheck": false,
                                    "tableView": true,
                                    "validate": {
                                        "required": true,
                                        "minLength": 2,
                                        "maxLength": 30
                                    },
                                    "key": "ime",
                                    "type": "textfield",
                                    "input": true
                                }
                            ],
                            "width": 6,
                            "offset": 0,
                            "push": 0,
                            "pull": 0,
                            "size": "md",
                            "currentWidth": 6
                        },
                        {
                            "components": [
                                {
                                    "label": "Prezime",
                                    "spellcheck": false,
                                    "tableView": true,
                                    "validate": {
                                        "required": true,
                                        "minLength": 2,
                                        "maxLength": 30
                                    },
                                    "key": "prezime",
                                    "type": "textfield",
                                    "input": true
                                }
                            ],
                            "width": 6,
                            "offset": 0,
                            "push": 0,
                            "pull": 0,
                            "size": "md",
                            "currentWidth": 6
                        }
                    ],
                    "key": "columns",
                    "type": "columns",
                    "input": false,
                    "tableView": false
                },
                {
                    "label": "E-mail",
                    "tableView": true,
                    "validate": {
                        "required": true
                    },
                    "key": "eMail",
                    "type": "email",
                    "input": true
                },
                {
                    "label": "Koju uslugu želiš?",
                    "widget": "choicesjs",
                    "tableView": true,
                    "placeholder": "Odaberi uslugu",
                    "data": {
                        "values": [
                            {
                                "label": "Izrada veb sajta/prodavnice",
                                "value": "izradaVebSajtaProdavnice"
                            },
                            {
                                "label": "Dizajn",
                                "value": "dizajn"
                            },
                            {
                                "label": "Marketing",
                                "value": "marketing"
                            },
                            {
                                "label": "Imam poseban zahtev",
                                "value": "imamPosebanZahtev"
                            }
                        ]
                    },
                    "validate": {
                        "required": true,
                        "customMessage": "Izaberite jedno od ponuđenih polja"
                    },
                    "errorLabel": "Neispravan unos",
                    "key": "kojuUsluguZelis",
                    "type": "select",
                    "input": true
                },
                {
                    "label": "Koliki ti je okviran budžet za projekat?",
                    "widget": "choicesjs",
                    "tableView": true,
                    "data": {
                        "values": [
                            {
                                "label": "Do 200€",
                                "value": "do200€"
                            },
                            {
                                "label": "200€ - 500€",
                                "value": "200€500€"
                            },
                            {
                                "label": "500€ - 1000€",
                                "value": "500€1000€"
                            },
                            {
                                "label": "1000€ - 2000€",
                                "value": "1000€2000€"
                            },
                            {
                                "label": "2000€ - 3000€",
                                "value": "2000€3000€"
                            },
                            {
                                "label": "Preko 3000€",
                                "value": "preko3000€"
                            }
                        ]
                    },
                    "validate": {
                        "required": true
                    },
                    "key": "kolikiTiJeOkviranBudzetZaProjekat3",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "imamPosebanZahtev"
                    },
                    "type": "select",
                    "input": true
                },
                {
                    "label": "Opiši nam projekat, šta tačno želiš, navedi nam neke postojeće primere ako ti padaju na pamet",
                    "autoExpand": false,
                    "tableView": true,
                    "validate": {
                        "required": true
                    },
                    "key": "opisiNamProjekatStaTacnoZelisNavediNamNekePostojecePrimereAkoTiPadajuNaPamet",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "imamPosebanZahtev"
                    },
                    "type": "textarea",
                    "input": true
                }
            ],
            "input": false,
            "tableView": false
        },
        {
            "title": "Korak 2",
            "breadcrumbClickable": true,
            "buttonSettings": {
                "previous": true,
                "cancel": false,
                "next": true
            },
            "navigateOnEnter": false,
            "saveOnEnter": false,
            "scrollToTop": false,
            "collapsible": false,
            "key": "page2",
            "conditional": {
                "show": false,
                "when": "kojuUsluguZelis",
                "eq": "imamPosebanZahtev"
            },
            "type": "panel",
            "label": "Page 2",
            "components": [
                {
                    "label": "Koliko okvirno stranica želiš da ima sajt?",
                    "mask": false,
                    "tableView": false,
                    "delimiter": false,
                    "requireDecimal": false,
                    "inputFormat": "plain",
                    "truncateMultipleSpaces": false,
                    "validate": {
                        "required": true,
                        "min": 1,
                        "max": 10000
                    },
                    "key": "kolikoOkvirnoStranicaZelisDaImaSajt",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "izradaVebSajtaProdavnice"
                    },
                    "type": "number",
                    "input": true
                },
                {
                    "label": "Koja bi bila namena sajta?",
                    "widget": "choicesjs",
                    "tableView": true,
                    "placeholder": "Odaberi namenu sajta",
                    "data": {
                        "values": [
                            {
                                "label": "E-prodavnica",
                                "value": "eProdavnica"
                            },
                            {
                                "label": "Portfolio sajt",
                                "value": "portfolioSajt"
                            },
                            {
                                "label": "Prezentacija firme",
                                "value": "prezentacijaFirme"
                            },
                            {
                                "label": "Lični blog",
                                "value": "licniBlog"
                            },
                            {
                                "label": "Ostalo",
                                "value": "ostalo"
                            }
                        ]
                    },
                    "validate": {
                        "required": true
                    },
                    "key": "kojaBiBilaNamenaSajta",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "izradaVebSajtaProdavnice"
                    },
                    "type": "select",
                    "input": true
                },
                {
                    "label": "Koliki ti je okviran budžet za projekat?",
                    "widget": "choicesjs",
                    "tableView": true,
                    "placeholder": "Odaberi budžet",
                    "data": {
                        "values": [
                            {
                                "label": "Do 500€",
                                "value": "do500€"
                            },
                            {
                                "label": "500€ - 1000€",
                                "value": "500€1000€"
                            },
                            {
                                "label": "1000€ - 2000€",
                                "value": "1000€2000€"
                            },
                            {
                                "label": "2000€ - 3000€",
                                "value": "2000€3000€"
                            },
                            {
                                "label": "3000€ - 5000€",
                                "value": "3000€5000€"
                            },
                            {
                                "label": "Preko 5000€",
                                "value": "preko5000€"
                            }
                        ]
                    },
                    "validate": {
                        "required": true
                    },
                    "key": "kolikiTiJeOkviranBudzetZaProjekat",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "izradaVebSajtaProdavnice"
                    },
                    "type": "select",
                    "input": true
                },
                {
                    "label": "Šta želiš da dizajniramo?",
                    "widget": "choicesjs",
                    "tableView": true,
                    "placeholder": "Odaberi dizajn",
                    "data": {
                        "values": [
                            {
                                "label": "Logo",
                                "value": "logo"
                            },
                            {
                                "label": "Vizit kartu",
                                "value": "vizitKartu"
                            },
                            {
                                "label": "Flajer/brošuru",
                                "value": "flajerBrosuru"
                            },
                            {
                                "label": "Promotivni materijal",
                                "value": "promotivniMaterijal"
                            },
                            {
                                "label": "Dizajn za garderobu",
                                "value": "dizajnZaGarderobu"
                            },
                            {
                                "label": "Vizuelni identitet",
                                "value": "vizuelniIdentitet"
                            },
                            {
                                "label": "Brending vozila",
                                "value": "brendingVozila"
                            },
                            {
                                "label": "Reklamu",
                                "value": "reklamu"
                            },
                            {
                                "label": "UI/UX dizajn",
                                "value": "uiUxDizajn"
                            },
                            {
                                "label": "Imam poseban zahtev",
                                "value": "imamPosebanZahtev"
                            }
                        ]
                    },
                    "validate": {
                        "required": true
                    },
                    "key": "staZelisDaDizajniramo",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "dizajn"
                    },
                    "type": "select",
                    "input": true
                },
                {
                    "label": "Ovde napiši šta želiš da dizajniramo",
                    "tableView": true,
                    "key": "ovdeNapisiStaZelisDaDizajniramo",
                    "conditional": {
                        "show": true,
                        "when": "staZelisDaDizajniramo",
                        "eq": "imamPosebanZahtev"
                    },
                    "type": "textfield",
                    "input": true
                },
                {
                    "label": "Koliki ti je okviran budžet za projekat?",
                    "widget": "choicesjs",
                    "tableView": true,
                    "placeholder": "Odaberi budžet",
                    "data": {
                        "values": [
                            {
                                "label": "Do 200€",
                                "value": "do200€"
                            },
                            {
                                "label": "200€ - 500€",
                                "value": "200€500€"
                            },
                            {
                                "label": "500€ - 1000€",
                                "value": "500€1000€"
                            },
                            {
                                "label": "1000€ - 2000€",
                                "value": "1000€2000€"
                            },
                            {
                                "label": "2000€ - 3000€",
                                "value": "2000€3000€"
                            },
                            {
                                "label": "Preko 3000€",
                                "value": "preko3000€"
                            }
                        ]
                    },
                    "validate": {
                        "required": true
                    },
                    "key": "kolikiTiJeOkviranBudzetZaProjekat1",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "dizajn"
                    },
                    "type": "select",
                    "input": true
                },
                {
                    "label": "Koji tip marketinga te zanima?",
                    "widget": "choicesjs",
                    "tableView": true,
                    "placeholder": "Odaberi tip marketinga",
                    "data": {
                        "values": [
                            {
                                "label": "SEO",
                                "value": "seo"
                            },
                            {
                                "label": "Google marketing",
                                "value": "googleMarketing"
                            },
                            {
                                "label": "Instagram marketing",
                                "value": "instagramMarketing"
                            },
                            {
                                "label": "Facebook marketing",
                                "value": "facebookMarketing"
                            },
                            {
                                "label": "Vođenje profila na društvenim mrežama",
                                "value": "vodenjeProfilaNaDrustvenimMrezama"
                            }
                        ]
                    },
                    "validate": {
                        "required": true
                    },
                    "key": "kojiTipMarketingaZelite",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "marketing"
                    },
                    "type": "select",
                    "input": true
                },
                {
                    "label": "Koliki ti je okviran mesečni budžet za projekat?",
                    "widget": "choicesjs",
                    "tableView": true,
                    "placeholder": "Odaberi budžet",
                    "data": {
                        "values": [
                            {
                                "label": "Do 200€",
                                "value": "do200€"
                            },
                            {
                                "label": "200€ - 500€",
                                "value": "200€500€"
                            },
                            {
                                "label": "500€ - 1000€",
                                "value": "500€1000€"
                            },
                            {
                                "label": "1000€ - 2000€",
                                "value": "1000€2000€"
                            },
                            {
                                "label": "2000€ - 3000€",
                                "value": "2000€3000€"
                            },
                            {
                                "label": "Preko 3000€",
                                "value": "preko3000€"
                            }
                        ]
                    },
                    "validate": {
                        "required": true
                    },
                    "key": "kolikiTiJeOkviranBudzetZaProjekat2",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "marketing"
                    },
                    "type": "select",
                    "input": true
                }
            ],
            "input": false,
            "tableView": false
        },
        {
            "title": "Korak 3",
            "breadcrumbClickable": true,
            "buttonSettings": {
                "previous": true,
                "cancel": false,
                "next": true
            },
            "navigateOnEnter": false,
            "saveOnEnter": false,
            "scrollToTop": false,
            "collapsible": false,
            "key": "page3",
            "conditional": {
                "show": false,
                "when": "kojuUsluguZelis",
                "eq": "imamPosebanZahtev"
            },
            "type": "panel",
            "label": "Page 3",
            "input": false,
            "tableView": false,
            "components": [
                {
                    "label": "Da li već imaš svoj sajt?",
                    "optionsLabelPosition": "right",
                    "inline": false,
                    "tableView": false,
                    "values": [
                        {
                            "label": "Da",
                            "value": "da",
                            "shortcut": ""
                        },
                        {
                            "label": "Ne",
                            "value": "ne",
                            "shortcut": ""
                        }
                    ],
                    "validate": {
                        "required": true
                    },
                    "key": "daLiVecImateSvojSajt",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "izradaVebSajtaProdavnice"
                    },
                    "type": "radio",
                    "input": true
                },
                {
                    "label": "Da li već imaš neko svoje grafičko rešenje?",
                    "optionsLabelPosition": "right",
                    "inline": false,
                    "tableView": false,
                    "values": [
                        {
                            "label": "Da",
                            "value": "da",
                            "shortcut": ""
                        },
                        {
                            "label": "Ne",
                            "value": "ne",
                            "shortcut": ""
                        }
                    ],
                    "validate": {
                        "required": true
                    },
                    "key": "daLiVecImateSvojSajt1",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "dizajn"
                    },
                    "type": "radio",
                    "input": true
                },
                {
                    "label": "Da li već imaš neki profil na društvenoj mreži?",
                    "optionsLabelPosition": "right",
                    "inline": false,
                    "tableView": false,
                    "values": [
                        {
                            "label": "Da",
                            "value": "da",
                            "shortcut": ""
                        },
                        {
                            "label": "Ne",
                            "value": "ne",
                            "shortcut": ""
                        }
                    ],
                    "validate": {
                        "required": true
                    },
                    "key": "daLiVecImateSvojSajt2",
                    "conditional": {
                        "show": false,
                        "when": "kojiTipMarketingaZelite",
                        "eq": "seo"
                    },
                    "type": "radio",
                    "input": true
                },
                {
                    "label": "Da li već imaš sajt ili želiš da ga napravimo za tebe?",
                    "optionsLabelPosition": "right",
                    "inline": false,
                    "tableView": false,
                    "values": [
                        {
                            "label": "Imam sajt",
                            "value": "imamSajt",
                            "shortcut": ""
                        },
                        {
                            "label": "Želim da ga napravite",
                            "value": "zelimDaGaNapravite",
                            "shortcut": ""
                        },
                        {
                            "label": "Sajt mi pravi neko drugi",
                            "value": "sajtMiPraviNekoDrugi",
                            "shortcut": ""
                        }
                    ],
                    "validate": {
                        "required": true
                    },
                    "key": "daLiVecImateSvojSajt3",
                    "conditional": {
                        "show": true,
                        "when": "kojiTipMarketingaZelite",
                        "eq": "seo"
                    },
                    "type": "radio",
                    "input": true
                },
                {
                    "label": "Ukoliko želiš, otpremi ovde svoj postojeći dizajn kako bismo imali bolji uvid u to šta ti treba",
                    "tableView": false,
                    "storage": "googledrive",
                    "webcam": false,
                    "fileTypes": [
                        {
                            "label": "",
                            "value": ""
                        }
                    ],
                    "fileMaxSize": "100MB",
                    "key": "ukolikoZelisOtpremiOvdeSvojPostojeciDizajnKakoBismoImaliBoljiUvidUToStaTiTreba",
                    "conditional": {
                        "show": true,
                        "when": "daLiVecImateSvojSajt1",
                        "eq": "da"
                    },
                    "type": "file",
                    "input": true
                },
                {
                    "label": "Unesi URL svog sajta",
                    "tableView": true,
                    "key": "unesiteUrlSvogSajta",
                    "conditional": {
                        "show": true,
                        "when": "daLiVecImateSvojSajt",
                        "eq": "da"
                    },
                    "type": "url",
                    "input": true
                },
                {
                    "label": "Unesi URL profila koji želiš da reklamiraš",
                    "tableView": true,
                    "key": "unesiteUrlSvogSajta1",
                    "conditional": {
                        "show": true,
                        "when": "daLiVecImateSvojSajt2",
                        "eq": "da"
                    },
                    "type": "url",
                    "input": true
                },
                {
                    "label": "Unesi URL sajta na kome bi da radimo SEO",
                    "tableView": true,
                    "key": "unesiteUrlSvogSajta2",
                    "conditional": {
                        "show": true,
                        "when": "daLiVecImateSvojSajt3",
                        "eq": "imamSajt"
                    },
                    "type": "url",
                    "input": true
                },
                {
                    "label": "Opiši ovde detaljnije projekat, reci nam šta želiš, šta želiš da postigneš reklamom, da li ti padaju na pamet neke interesantne kampanje na koje želiš da se ugledaš.",
                    "autoExpand": false,
                    "tableView": true,
                    "key": "opisiOvdeDetaljnijeProjekatReciNamStaZelisPosaljiNekeSajtoveKojiTiSeSvidaju1",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "marketing"
                    },
                    "type": "textarea",
                    "input": true
                },
                {
                    "label": "Opiši ovde detaljnije projekat, reci nam šta želiš, pošalji neke sajtove koji ti se sviđaju.",
                    "autoExpand": false,
                    "tableView": true,
                    "key": "opisiOvdeDetaljnijeProjekatReciNamStaZelisPosaljiNekeSajtoveKojiTiSeSvidaju3",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "izradaVebSajtaProdavnice"
                    },
                    "type": "textarea",
                    "input": true
                },
                {
                    "label": "Opiši ovde detaljnije projekat, reci nam šta želiš, pošalji neki dizajn ili stil koji ti se sviđa.",
                    "autoExpand": false,
                    "tableView": true,
                    "key": "opisiOvdeDetaljnijeProjekatReciNamStaZelisPosaljiNekeSajtoveKojiTiSeSvidaju2",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "dizajn"
                    },
                    "type": "textarea",
                    "input": true
                },
                {
                    "label": "Šta želiš da bude sledeći korak?",
                    "optionsLabelPosition": "right",
                    "inline": false,
                    "tableView": false,
                    "values": [
                        {
                            "label": "Želim da mi pošaljete ponudu na mejl",
                            "value": "zelimDaMiPosaljetePonuduNaMejl",
                            "shortcut": ""
                        },
                        {
                            "label": "Želim da zakažem konsultacije",
                            "value": "zelimDaZakazemKonsultacije",
                            "shortcut": ""
                        },
                        {
                            "label": "Želim da vas odmah angažujem",
                            "value": "zelimDaVasOdmahAngazujem",
                            "shortcut": ""
                        }
                    ],
                    "validate": {
                        "required": true
                    },
                    "key": "staZelisDaBudeSledeciKorak",
                    "type": "radio",
                    "input": true
                },
                {
                    "label": "Odaberi datum koji ti odgovara",
                    "format": "dd-MMM-yyyy H:mm",
                    "description": "U najkraćem roku će da te pozove naš agent da ti potvrdi termin za online konsultacije.",
                    "tableView": false,
                    "enableMinDateInput": false,
                    "datePicker": {
                        "disableWeekends": true,
                        "disableWeekdays": false
                    },
                    "enableMaxDateInput": false,
                    "timePicker": {
                        "showMeridian": false
                    },
                    "key": "odaberiDatumKojiTiOdgovara",
                    "conditional": {
                        "show": true,
                        "when": "staZelisDaBudeSledeciKorak",
                        "eq": "zelimDaZakazemKonsultacije"
                    },
                    "type": "datetime",
                    "input": true,
                    "widget": {
                        "type": "calendar",
                        "displayInTimezone": "viewer",
                        "locale": "en",
                        "useLocaleSettings": false,
                        "allowInput": true,
                        "mode": "single",
                        "enableTime": true,
                        "noCalendar": false,
                        "format": "dd-MMM-yyyy H:mm",
                        "hourIncrement": 1,
                        "minuteIncrement": 1,
                        "time_24hr": true,
                        "minDate": null,
                        "disableWeekends": true,
                        "disableWeekdays": false,
                        "maxDate": null
                    }
                }
            ]
        }
    ]
    
    });
    
};
