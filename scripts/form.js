window.onload = function() {
    Formio.createForm(document.getElementById('builder'), {
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
                                    "key": "ime1",
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
                "cancel": true,
                "next": true
            },
            "navigateOnEnter": false,
            "saveOnEnter": false,
            "scrollToTop": false,
            "collapsible": false,
            "key": "page2",
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
                "cancel": true,
                "next": true
            },
            "navigateOnEnter": false,
            "saveOnEnter": false,
            "scrollToTop": false,
            "collapsible": false,
            "key": "page3",
            "type": "panel",
            "label": "Page 3",
            "input": false,
            "tableView": false,
            "components": [
                {
                    "label": "Da li već imate svoj sajt?",
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
                    "label": "Unesite URL svog sajta",
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
                    "label": "Opiši ovde detaljnije projekat, reci nam šta želiš, pošalji neke sajtove koji ti se sviđaju.",
                    "autoExpand": false,
                    "tableView": true,
                    "key": "opisiOvdeDetaljnijeProjekatReciNamStaZelisPosaljiNekeSajtoveKojiTiSeSvidaju1",
                    "conditional": {
                        "show": true,
                        "when": "kojuUsluguZelis",
                        "eq": "izradaVebSajtaProdavnice"
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
