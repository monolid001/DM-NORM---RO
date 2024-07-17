<?php
    $cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
    $cms->landing( 1, 2 );

    $cms->thankspage = DIR . './success/success.php';
    define( 'THANKSPAGE', $_SERVER['DOCUMENT_ROOT'] . './success/success.php' );
?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <script>
        var lang_locale = "pt";
    </script>
    <script type="text/javascript">
        var ccode = "EN";
        var ip_ccode = "EN";
        var package_prices = {};
        var shipment_price = 0;
        var name_hint = "Adrian Albescu";
        var phone_hint = "+40 XX XXX XX XX";
        var iew = true;
        var offer_countries = {};
    </script>
    <script src="content/js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <style>
        .ac_footer {
            position: relative;
            top: 10px;
            height: 0;
            text-align: center;
            margin-bottom: 70px;
            color: #A12000;
        }

        .ac_footer a {
            color: #A12000;
        }

        .ac_footer p {
            text-align: center;
        }

        img[height="1"],
        img[width="1"] {
            display: none !important;
        }
    </style>
    <!--retarget-->
    <!--retarget-->
    <meta charset="utf-8">
    <title>DM-NORM</title>
    <meta content="DM-NORM" name="description">
    <meta content="width=device-width" name="viewport">
    <link data-pagespeed-lsc-url="https://a.diaxil-new.com/img/product1.png" href="content/images/product1.png" rel="icon">
    <link href="content/css/styles.min.css" rel="stylesheet">
    <link href="content/css/owl.carousel.min.css" rel="stylesheet">
    <link href="content/css/owl.theme.default.css" rel="stylesheet">
    <?php $cms->header(); ?>
</head>

<body>
    <script src="content/js/9.min.js" type="text/javascript"></script>
    <div class="main-banner">
        <div class="container">
            <div class="logo wow fadeInDown lt0" style="visibility: visible; animation-name: fadeInDown;">DM-NORM</div>
            <div class="main-banner-subtitle wow fadeIn lt1" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;"> Normalizează nivelul de glucoză și stimulează producția de insulină </div>
            <div class="row main-banner-row align-items-end">
                <div class="col-lg-3">
                    <ul class="main-banner-list wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: visible; animation-iteration-count: 12; animation-name: pulse;"></i><span class="lt2"> Mărește sensibilitatea la insulină </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: visible; animation-iteration-count: 12; animation-name: pulse;"></i><span class="lt3"> Normalizează metabolismul </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: visible; animation-iteration-count: 12; animation-name: pulse;"></i><span class="lt4"> Curăță vasele sangvine de colesterol </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: visible; animation-iteration-count: 12; animation-name: pulse;"></i><span class="lt5"> Oferă un impuls de energie </span></li>
                    </ul>
                </div>
                <div class="col-lg-5"><img alt="main-banner-product" class="main-banner-product wow fadeIn" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/product1.png" data-wow-delay="1s" src="content/images/product1.png" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;"></div>
                <div class="col-lg-4">
                    <div class="main-banner-form wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="main-banner-form-title">
                            <div class="left-z lt6"> Numai astăzi </div>
                            <div class="corner-z lt7"><span> reducere </span><text class="price_land_discount"> <?=$cms->discount;?> </text> </div>
                        </div>
                        <div class="timer">
                            <div class="count-block">
                                <div class="countdown">
                                    <div class="countdown__item hoursSH"> 12 </div>
                                    <div class="countdown__item minutesSH"> 54 </div>
                                    <div class="countdown__item secondsSH"> 56 </div>
                                </div>
                            </div>
                        </div>
                        <form action="#" class="order_form" method="POST"><input name="offer_id" type="hidden"><input name="esub" type="hidden">
                            <?=$cms->params();?>
                            <div class="main-banner-price">
                                <div class="price_old">
                                    <text class="price_land_s4"> <?=$cms->oldpr;?> </text>
                                    <text class="price_land_curr"> RON </text>
                                </div>
                                <div class="price_main">
                                    <text class="price_land_s1"> <?=$cms->price;?> </text>
                                    <text class="price_land_curr"> RON </text> ** 
                                </div>
                            </div>
                            <label>
                                <select id="country_code_selector" name="country_code">
                                    <option value="RO"> România </option>
                                </select>
                            </label>
                            <label>
                                <input name="name" placeholder="Numele tău">
                            </label>
                            <label>
                                <input class="only_number" name="phone" placeholder="Numărul de telefon" type="tel">
                            </label>
                            <input type="hidden" name="country" value="<?=$cms->country;?>" />
                            <button class="main-form-button wow tada lt8 js_submit button__text" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: tada;"> Comandă </button>
                            <div class="b-note"> **Privind costu livrării, va adresați la consultant </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="disease-description">
        <div class="container">
            <div class="h1 lt9"> Diabetul zaharat </div>
            <div class="disease-txt wow fadeIn mobile-important-hide lt10" style="visibility: visible;"> Aceasta este o boală cronică, care, în absența unui tratament corespunzător, duce la complicații grave, chiar la moarte. În ciuda acestui fapt, majoritatea persoanelor continuă să aibă o atitudine nepăsătoare față de sănătatea lor. </div>
            <div class="row disease-statistic-row align-items-center">
                <div class="col-lg-6">
                    <div class="disease-statistic">
                        <div class="disease-statistic-title wow pulse lt11" data-wow-iteration="5" style="visibility:hidden;animation-iteration-count:5;animation-name:none"> Statistica: </div>
                        <div class="disease-statistic-list">
                            <ul>
                                <li class="lt12"><i class="wow pulse" data-wow-iteration="50" style="visibility:hidden;animation-iteration-count:50;animation-name:none"></i><span class="wow pulse d-inline-block" data-wow-iteration="3" style="visibility:hidden;animation-iteration-count:3;animation-name:none"> 1,6 mln de decese </span> în 2021 cauzate de diabet. </li>
                                <li class="lt13"><i class="wow pulse" data-wow-iteration="50" style="visibility:hidden;animation-iteration-count:50;animation-name:none"></i><span class="wow pulse d-inline-block" data-wow-iteration="3" style="visibility:hidden;animation-iteration-count:3;animation-name:none"> 2,2 mln de decese </span> cauzate de nivel ridicat de glicemie. </li>
                                <li class="lt14"><i class="wow pulse" data-wow-iteration="50" style="visibility:hidden;animation-iteration-count:50;animation-name:none"></i><span class="wow pulse d-inline-block" data-wow-iteration="3" style="visibility:hidden;animation-iteration-count:3;animation-name:none"> Peste <text class="price_land_discount"> <?=$cms->discount;?> </text> </span> din decesele din cauza diabetului au avut loc până la vârsta de 70 de ani. </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6"><img alt="disease" class="disease-img wow fadeInDown" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/2.jpg" data-wow-delay="1s" src="content/images/2.jpg" style="visibility:hidden;animation-delay:1s;animation-name:none"></div>
            </div>
            <div class="disease-txt-sm wow fadeIn lt15" style="visibility:hidden;animation-name:none"> Cu fiecare an, numărul persoanelor cu diabet se mărește tot mai mult și mai mult. Să comparăm: În 1980, <span class="wow pulse d-inline-block" data-wow-iteration="5" style="visibility:hidden;animation-iteration-count:5;animation-name:none"> 108 mln de persoane din întreaga lume </span> sufereau de diabet. Conform datelor pentru anul 2021, numărul de cazuri a crescut la <span class="wow pulse d-inline-block" data-wow-iteration="5" style="visibility:hidden;animation-iteration-count:5;animation-name:none"> 463 milioane. </span></div>
        </div>
    </div>
    <div class="complications">
        <div class="container">
            <div class="h1 lt16"> Complicațiile diabetului </div>
            <div class="complications-row wow fadeIn" style="visibility:hidden;animation-name:none">
                <div class="comp-1 comp-title wow fadeInDown lt17" data-wow-delay="1s" style="visibility:hidden;animation-delay:1s;animation-name:none"> Leziuni ale vaselor sangvine mari: </div>
                <div class="comp-3 comp-description lt18"><img alt class="complications-mobile-img" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/b1.png" src="content/images/b1.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility:hidden;animation-delay:.3s;animation-name:none"> ALE CREIERULUI </span> accident vascular cerebral </div>
                <div class="comp-4 comp-description lt19"><img alt class="complications-mobile-img" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/b3.png" src="content/images/b3.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility:hidden;animation-delay:.3s;animation-name:none"> ALE INIMII </span> boala coronariana, <br> infarct miocardic </div>
                <div class="comp-5 comp-description lt20"><img alt class="complications-mobile-img" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/b5.png" src="content/images/b5.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility:hidden;animation-delay:.3s;animation-name:none"> ALE PICIOARELOR </span> gangrenă și amputație </div>
                <div class="comp-2 comp-title wow fadeInDown mobile-important-hide lt21" data-wow-delay="1s" style="visibility:hidden;animation-delay:1s;animation-name:none"> Leziunile vaselor sangvine mici: </div>
                <div class="comp-6 comp-description mobile-important-hide lt22"><img alt class="complications-mobile-img" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/b2.png" src="content/images/b2.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility:hidden;animation-delay:.3s;animation-name:none"> ALE OCHILOR </span> pierderea vederii </div>
                <div class="comp-7 comp-description mobile-important-hide lt23"><img alt class="complications-mobile-img" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/b4.png" src="content/images/b4.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility:hidden;animation-delay:.3s;animation-name:none"> ALE RINICHILOR </span> nefropatie diabetică, nevoia de hemodializă </div>
                <div class="comp-8 comp-description mobile-important-hide lt24"><img alt class="complications-mobile-img" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/b6.png" src="content/images/b6.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility:hidden;animation-delay:.3s;animation-name:none"> Ale nervilor </span> Neuropatie diabetică </div>
            </div>
            <div class="warning-banner wow pulse lt25" data-wow-iteration="5" style="visibility:hidden;animation-iteration-count:5;animation-name:none"> Gândiți-vă la consecințe! </div>
        </div>
    </div>
    <div class="product-total-description">
        <div class="container">
            <div class="h1 logo-font wow fadeInDown lt26" style="visibility:hidden;animation-name:none">DM-NORM</div>
            <div class="product-total-txt wow fadeIn mobile-important-hide lt27" style="visibility:hidden;animation-name:none"> Nu numai că reglează în mod eficient nivelul glucozei din sânge, dar are și un efect direcțional asupra celulelor țintă de insulină și a celulelor beta pancreatice, restabilind funcțiile și starea organelor afectate de boala severă. </div>
            <div class="product-total-list-title wow fadeIn mobile-important-hide lt28" style="visibility:hidden;animation-name:none">DM-NORMare, de asemenea, și acțiuni suplimentare: </div><br>
            <div class="row main-banner-row align-items-end">
                <div class="col-lg-6">
                    <ul class="main-banner-list wow fadeIn" style="visibility:hidden;animation-name:none">
                        <li class="lt29"><i class="wow pulse" data-wow-iteration="12" style="visibility:hidden;animation-iteration-count:12;animation-name:none"></i><span class="lt29"> reglează funcțiile imune </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility:hidden;animation-iteration-count:12;animation-name:none"></i><span class="lt30"> îmbunătățește starea pielii </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility:hidden;animation-iteration-count:12;animation-name:none"></i><span class="lt31"> procesele metabolice sunt ordonate </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility:hidden;animation-iteration-count:12;animation-name:none"></i><span class="lt32"> normalizează starea psihoemoțională a persoanei. </span></li>
                    </ul>
                </div>
                <div class="col-lg-6"><img alt="main-banner-product" class="main-banner-product wow fadeIn" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/product1.png" data-wow-delay="1s" src="content/images/product1.png" style="visibility:hidden;animation-delay:1s;animation-name:none"></div>
            </div>
        </div>
    </div>
    <div class="catch-banner">
        <div class="container">
            <div class="catch-banner-title wow fadeInDown lt33" style="visibility:hidden;animation-name:none"><span>DM-NORM</span> — VIAȚA DVS. FĂRĂ DE RESTRICȚII ÎN CAZUL DIABETULUI! </div><a class="navigate-btn catch-banner-btn wow tada lt34" data-wow-delay="1s" href="#footer-form" style="visibility:hidden;animation-delay:1s;animation-name:none"> Comandă </a>
        </div>
    </div>
    <div class="composition">
        <div class="container">
            <div class="h1 lt35"><span>DM-NORM</span> este produs doar din componente naturale </div>
            <div class="row composition-row">
                <div class="col-lg-6">
                    <div class="composition-card wow fadeInUp" style="visibility:hidden;animation-name:none">
                        <div class="composition-card-title"><img alt="icon" class="wow pulse" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/z5.png" data-wow-delay=".1s" data-wow-iteration="5" src="content/images/z5.png" style="visibility:hidden;animation-delay:.1s;animation-iteration-count:5;animation-name:none"><span class="lt44"> Cinnamon dry extract </span></div>
                        <div class="composition-card-description lt45"> Accelerează metabolismul, scade glicemia, scade colesterolul rău, îmbunătățește starea vaselor de sânge și sporește sensibilitatea țesuturilor moi la insulină. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="composition-card wow fadeInUp dark" style="visibility:hidden;animation-name:none">
                        <div class="composition-card-title"><img alt="icon" class="wow pulse" data-pagespeed-lsc-url="../../../../a.diaxil-new.com/img/z65e1f.png?v=2" data-wow-delay=".1s" data-wow-iteration="5" src="content/images/z6.png" style="visibility:hidden;animation-delay:.1s;animation-iteration-count:5;animation-name:none"><span class="lt46"> Bulking agent (Cellulose) </span></div>
                        <div class="composition-card-description lt47"> Antioxidant puternic, care ajută la reducerea stresului oxidativ apărut din cauza hiperglicemiei, activează globulele roșii și întărește sistemul imunitar. De 4 ori mai eficient decât luteina protejează vederea. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="opinion mobile-important-hide">
        <div class="container">
            <div class="row align-items-end flex-lg-row-reverse">
                <div class="col-lg-7">
                    <div class="opinion-title wow fadeIn lt48" style="visibility:hidden;animation-name:none"> Opinia <br> specialistului </div>
                    <div class="opinion-description wow fadeIn" style="visibility:hidden;animation-name:none">
                        <p class="lt49"><span></span> Diabetul are două mecanisme de dezvoltare: primul este o defecțiune a pancreasului asociată cu afecțiunea secreției de insulină, iar al doilea este prezența rezistenței la insulină (pierderea sensibilității celulare la insulină). </p>
                        <p class="lt50">DM-NORMstimulează producția de insulină, vindecând pancreasul și reparând celulele deteriorate ale organelor. Odată cu aceasta, crește susceptibilitatea la hormonul indicat mai sus. </p>
                        <p class="lt51"> Acest medicament are un efect pozitiv asupra întregului organism: elimină hipertensiunea și plăcile de colesterol — însoțitorii esențiali ai diabetului; favorizează regenerarea structurii ficatului și a plămânilor; asigură nutriția sistemului nervos. </p>
                        <p class="lt52">DM-NORMcontribuie la pierderea în greutate prin neutralizarea celei mai frecvente cauze a bolii — excesul de greutate. Reduce pofta pentru dulciuri, blocând zonele gustative ale limbii care reacționează la zahăr. </p>
                        <p class="lt53"> Categoric,DM-NORMeste unul dintre cele mai bune medicamente pentru diabet. Acționează asupra problemei în modul cuprinzător, eliminând mai multe cauze ale bolii simultan și prezintă rezultate excelente. </p>
                    </div>
                    <div class="signa lt54"> Prof. Alexander Georgescu <span> Endocrinolog practician, profesor la facultatea de endocrinologie </span></div>
                </div>
                <div class="col-lg-5"><img alt="doc" class="opinion-img wow fadeInLeft" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/doc.jpg" src="content/images/doc.jpg" style="visibility:hidden;animation-name:none"></div>
            </div>
        </div>
    </div>
    <div class="catch-banner">
        <div class="container">
            <div class="catch-banner-title wow fadeInDown lt55" style="visibility:hidden;animation-name:none"><span>DM-NORM</span> — VIAȚA DVS. FĂRĂ DE RESTRICȚII ÎN CAZUL DIABETULUI! </div><a class="navigate-btn catch-banner-btn wow tada lt56" data-wow-delay="1s" href="#footer-form" style="visibility:hidden;animation-delay:1s;animation-name:none"> Comandă </a>
        </div>
    </div>
    <div class="result">
        <div class="container">
            <div class="h1 lt57"> Rezultatul utilizării <span>DM-NORM</span></div>
            <div class="row result-row">
                <div class="col-lg-6">
                    <div class="result-list">
                        <ul>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility:hidden;animation-iteration-count:10;animation-name:none"></i><span class="lt58"> Nivelul zahărului stabil și scăzut </span></li>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility:hidden;animation-iteration-count:10;animation-name:none"></i><span class="lt59"> Risc redus de complicații </span></li>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility:hidden;animation-iteration-count:10;animation-name:none"></i><span class="lt60"> Îmbunătățirea calității vieții </span></li>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility:hidden;animation-iteration-count:10;animation-name:none"></i><span class="lt61"> Insulina administrată cu amânare </span></li>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility:hidden;animation-iteration-count:10;animation-name:none"></i><span class="lt62"> Reducerea cantității de pastile administrate </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="container">
            <div class="h1 lt63"> Recenzii ale clienților </div>
            <div class="feedback-slider owl-carousel owl-theme">
                <div>
                    <div class="feedback-slide-card"><img alt="ava" src="content/images/ava1.png">
                        <div class="feedback-slide-card-description lt65"> AdministrezDM-NORMdeja a treia săptămână. În fiecare zi simt o îmbunătățire constantă a stării mele: oboseala a dispărut, pofta de mâncare a revenit la normal. După mâncare, nu am oscilații a zahărului ca înainte. Dar, cel mai important, au trecut atacurile cu angină care m-au chinuit în ultimii ani. În sfârșit mă simt practic sănătoasă! <div class="slider-signa"> Mary Devi, 55 ani </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="feedback-slide-card"><img alt="ava" src="content/images/ava2.png">
                        <div class="feedback-slide-card-description lt66"> Excesul de greutate și diabetul merg întotdeauna alături. De fapt, am fost toată viața plinuță, dar după patruzeci de ani, greutatea mea a început să crească „ca pe drojdie”. Aproximativ în același timp, mi-a fost depistat diabetul. Datorită preparatului Diaxil, am reușit să slăbesc treptat, dar continuu calea către obiectivul meu. Deja mă simt minunat: nu mai am oscilații ale glucozei și simptome neplăcute care ar împiedica viață normală. <div class="slider-signa"> Jennifer Kim, 53 ani </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="feedback-slide-card"><img alt="ava" src="content/images/ava3.png">
                        <div class="feedback-slide-card-description lt64"> Când a aflat că are diabet, a decis că viața obișnuită s-a terminat. Acum sunt aproape handicapat, obligat să monitorizez constant nivelul de zahăr și să beau pastile cu duiumul. După cursul Diaxil, oboseala și somnolența au dispărut, glicemia a revenit la normal. Și cel mai important, am încetat să alerg la toaletă des. De asemenea, așa cum a spus medicul, a trecut inflamația prostatei. Mă simt o persoană sănătoasă și normală. Recomand tuturor! <div class="slider-signa"> Robert Smith, 62 ani </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="use">
        <div class="container">
            <div class="h1 lt71"> Modalitatea de utilizare </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="use-card use-card-1 wow fadeInLeft lt72" data-wow-delay="1s" style="visibility:hidden;animation-delay:1s;animation-name:none"><span> 1 capsulă <br> dimineața </span> A se administra capsula înainte <br> de masă </div>
                </div>
                <div class="col-lg-4">
                    <div class="use-card use-card-2 wow fadeInLeft lt73" data-wow-delay=".5s" style="visibility:hidden;animation-delay:.5s;animation-name:none"><span> 1 capsulă <br> seara </span> A se administra capsula înainte <br> de masă </div>
                </div>
                <div class="col-lg-4 mobile-important-hide">
                    <div class="use-card use-card-3 wow fadeInLeft" data-wow-delay=".1s" style="visibility:hidden;animation-delay:.1s;animation-name:none"></div>
                </div>
            </div>
            <div class="use-subtitle lt74"> Rezultatul unui curs de administrare este remisiunea constantă pe o perioadă îndelungată de timp! </div>
        </div>
    </div>
    <div class="main-banner">
        <div class="container">
            <div class="logo wow fadeInDown lt75" style="visibility:hidden;animation-name:none">DM-NORM</div>
            <div class="main-banner-subtitle wow fadeIn lt76" data-wow-delay=".4s" style="visibility:hidden;animation-delay:.4s;animation-name:none"> Normalizează nivelul de glucoză și stimulează producția de insulină </div>
            <div class="row main-banner-row align-items-end">
                <div class="col-lg-3">
                    <ul class="main-banner-list wow fadeIn" style="visibility:hidden;animation-name:none">
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility:hidden;animation-iteration-count:12;animation-name:none"></i><span class="lt2"> Mărește sensibilitatea la insulină </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility:hidden;animation-iteration-count:12;animation-name:none"></i><span class="lt3"> Normalizează metabolismul </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility:hidden;animation-iteration-count:12;animation-name:none"></i><span class="lt4"> Curăță vasele sangvine de colesterol </span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility:hidden;animation-iteration-count:12;animation-name:none"></i><span class="lt5"> Oferă un impuls de energie </span></li>
                    </ul>
                </div>
                <div class="col-lg-5"><img alt="main-banner-product" class="main-banner-product wow fadeIn" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/product1.png" data-wow-delay="1s" src="content/images/product1.png" style="visibility:hidden;animation-delay:1s;animation-name:none"></div>
                <div class="col-lg-4">
                    <div class="main-banner-form wow fadeIn" style="visibility:hidden;animation-name:none">
                        <div class="main-banner-form-title" id="footer-form">
                            <div class="left-z lt81"> Numai astăzi </div>
                            <div class="corner-z lt82"><span> reducere </span> de <text class="price_land_discount"> <?=$cms->discount;?> </text>  </div>
                        </div>
                        <div class="timer">
                            <div class="count-block">
                                <div class="countdown">
                                    <div class="countdown__item hoursSH"> 12 </div>
                                    <div class="countdown__item minutesSH"> 54 </div>
                                    <div class="countdown__item secondsSH"> 56 </div>
                                </div>
                            </div>
                        </div>
                        <form action="#" class="order_form" id="order_form" method="POST">
                            <?=$cms->params();?>
                            <div class="main-banner-price">
                                <div class="price_old"><text class="price_land_s4"> <?=$cms->oldpr;?> </text><text class="price_land_curr"> RON </text></div>
                                <div class="price_main"><text class="price_land_s1"> <?=$cms->price;?> </text><text class="price_land_curr"> RON </text> ** </div>
                            </div><label><select id="country_code_selector" name="country_code">
                                    <option value="RO"> România </option>
                                </select></label><label><input name="name" placeholder="Numele tău"></label><label><input class="only_number" name="phone" placeholder="Numărul de telefon" type="tel"></label><button class="main-form-button wow tada lt8 js_submit button__text" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: tada;"> Comandă </button>
                                <input type="hidden" name="country" value="<?=$cms->country;?>" />
                            <div class="b-note"> **Privind costu livrării, va adresați la consultant </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="how-work">
        <div class="container">
            <div class="h1 lt84"> Cum lucrăm </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="how-work-card wow fadeInUp" style="visibility:hidden;animation-name:none"><img alt="e1" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/e1.png" src="content/images/e1.png">
                        <div class="how-work-card-description lt85"> Lăsați o cerere pe site-ul nostru </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="how-work-card wow fadeInUp" style="visibility:hidden;animation-name:none"><img alt="e1" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/e2.png" src="content/images/e2.png">
                        <div class="how-work-card-description lt86"> Operatorul vă va contacta pentru a confirma comanda. </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="how-work-card wow fadeInUp" style="visibility:hidden;animation-name:none"><img alt="e1" data-pagespeed-lsc-url="https://a.diaxil-new.com/img/e3.png" src="content/images/e3.png">
                        <div class="how-work-card-description lt87"> Achitarea la primirea produsului </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="content/js/scripts.min.js"></script>
    <script src="content/js/owl.carousel.min.js">
    </script>
    <script src="content/js/slider.js">
    </script>
    <script defer src="content/js/custom-functions2.min.js">
    </script>
    <script>
        $(function() {
            $(".navigate-btn").click(function() {
                return $("html, body").animate({
                    scrollTop: $("#footer-form").offset().top + "px"
                }), !1
            })
        })
    </script>
    <script>
        $(function() {
            var a = new Date,
                b = Math.ceil(24 * 60 * 60 - (a.getHours() * 60 * 60 + a.getMinutes() * 60 + a.getSeconds())),
                c = new Date(a.getTime() + b * 1e3);
            setInterval(function() {
                var a = new Date(c.getTime() - Date.now()),
                    b = a.getHours() > 9 ? a.getHours() : '0' + a.getHours(),
                    d = a.getMinutes() > 9 ? a.getMinutes() : '0' + a.getMinutes(),
                    e = a.getSeconds() > 9 ? a.getSeconds() : '0' + a.getSeconds();
                $('.hoursSH').html(b), $('.minutesSH').html(d), $('.secondsSH').html(e)
            }, 1e3)
        })
    </script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel()
        })
    </script>
    <script>
        (new WOW).init()
    </script>
    <style>
        .main-banner-product {
            max-width: 360px
        }

        .price_main {
            font-size: 21px
        }

        .price_old {
            margin-right: 10px;
            font-size: 21px
        }

        .corner-z {
            font-size: 23px;
            padding-top: 15px;
            padding-left: 30px
        }

        .product-total-description .main-banner-product {
            max-width: 240px
        }

        .composition-card-title img {
            max-width: 132px
        }

        .main-banner-form select,
        .main-banner-form input {
            color: #000;
            font-size: 16px
        }

        @media(max-width:767px) {
            .main-banner-product {
                max-width: 150px
            }
        }
    </style>
    </script>
    <script>
        $(document).ready(function() {
            try {
                moment.locale("");
                $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));
                $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));
            } catch (e) {
                console.log('moment problems!');
            }
        });
    </script>
    <!--retarget-->
    <!--retarget-->
    <script src="content/js/10_11_12.min.js" type="text/javascript">
    </script>
    <div class="ac_footer"><span> © 2024 Copyright. All rights reserved.</span>
        <br>
        <a href="//febaleo.cc/content/shared/html/policy_en.html" target="_blank"> Privacy policy </a> | <a href="http://ac-feedback.com/report_form/"> Report </a>
        <p></p>
        <script>
            typeof adc_clearFooter !== 'undefined' && adc_clearFooter();
        </script>
    </div>
    <?php $cms->footer(); ?>
</body>
</html>