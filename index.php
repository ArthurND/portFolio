<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=========== Unicon ==========-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <!--========== Swiper ==========-->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/style.css" />
    <title>Arthur NDOUM</title>
</head>

<body>
    <!-- ========= header ========= -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">AN</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            <i class="uil uil-estate nav__icon"></i>Accueil
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i>&Agrave; Propos
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i>Comp&eacute;tences
                        </a>
                    </li>
                    <!--<li class="nav__item">
            <a href="#services" class="nav__link">
              <i class="uil uil-briefcase-alt nav__icon"></i>Services
            </a>
          </li>
          <li class="nav__item">
            <a href="#portfolio" class="nav__link">
              <i class="uil uil-scenery nav__icon"></i>Portfolio
            </a>
          </li>-->
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i>Contact me
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <!-- theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========= main ========= -->
    <main class="main">
        <!--========= home ========= -->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://github.com" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>

                    </div>
                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M48.5,-74.2C63,-66.1,75.2,-53,82.2,-37.6C89.2,-22.2,90.9,-4.4,87.5,11.9C84,28.2,75.4,43,64.6,56.8C53.9,70.5,41,83.1,25.7,87.9C10.3,92.6,-7.5,89.4,-23.5,83.2C-39.4,77,-53.6,67.9,-64.9,55.7C-76.1,43.6,-84.5,28.5,-87.5,12.2C-90.5,-4.1,-88.1,-21.6,-80.5,-36.1C-72.9,-50.7,-60.1,-62.2,-45.9,-70.5C-31.6,-78.8,-15.8,-83.9,0.6,-84.8C17,-85.7,33.9,-82.4,48.5,-74.2Z"
                                transform="translate(100 100)" />
                            <image class="home__blob-img" x='12' y="18" xlink:href="imgs/arthurBileg.png" />
                        </svg>

                    </div>
                    <div class="home__data">
                        <h1 class="home__title">Bonjour, je suis Arthur</h1>
                        <h3 class="home__subtitle">D&eacute;veloppeur Web et Web Mobile </h3>
                        <p class="home__description">D&eacute;veloppeur Junior passionn&eacute; par l'informatique,
                            j'aspire
                            &agrave; vous fournir un travail de qualit&eacute;</p>
                        <a href="#contact" class="button button--flex">
                            Contactez Moi<i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll DOwn</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>

                    </a>
                </div>
            </div>
        </section>
        <!--========== about ==========-->
        <section class="about section" id="about">
            <h2 class="section__title" id="about">&Agrave; Propos de Moi</h2>
            <span class="section__subtitle">Pr&eacute;sentation</span>

            <div class="about__container container grid">
                <img src="imgs/arthurIllustration.jpg" alt="illustration arthur" class="about__img">
                <div class="about__data">
                    <p class="about__description">D&eacute;veloppeur Web motiv&eacute; et mobile. Je suis &agrave; la
                        recherche
                        d'une premi&egrave;re exp&eacute;rience. Elle peut &ecirc;tre sous la forme d'un stage(+ 3
                        mois), d'un CDD
                        ou
                        m&ecirc;me d'un CDI.

                    </p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">1</span>
                            <span class="about__info-name">projet en entreprise <br>termin&eacute;</span>
                        </div>
                        <div>
                            <span class="about__info-title">1 </span>
                            <span class="about__info-name">portfolio<br>en cours</span>
                        </div>
                        <div>
                            <span class="about__info-title">++</span>
                            <span class="about__info-name">projets <br>&agrave; venir</span>
                        </div>
                    </div>
                    <div class="about__buttons">
                        <a download="" href="imgs/ArthurNDOUMBILEGDevWeb.pdf" class="button button--flex">
                            T&eacute;l&eacute;charger CV<i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--========== skills ==========-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Comp&eacute;tences</h2>
            <span class="section__subtitle">Mon niveau technique</span>

            <div class="skills__container container grid">
                <div>
                    <!--========== skills 1==========-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>
                            <div>
                                <h1 class="skills__title">D&eacute;veloppeur Frontend</h1>
                                <span class="skills__subtitle">Pr&egrave;s de 8 mois</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">75%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_html"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_css">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Javascript</h3>
                                    <span class="skills__number">65%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_js">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">ReactJs</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_react">

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--========== skills 2==========-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>
                            <div>
                                <h1 class="skills__title">D&eacute;veloppeur Backend</h1>
                                <span class="skills__subtitle">Pr&egrave;s de 8 mois</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">55%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_php">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">NextJs</h3>
                                    <span class="skills__number">55%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_next">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Strapi</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_strapi">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Laragon</h3>
                                    <span class="skills__number">75%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_laragon">

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!--========== skills 3==========-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Design</h1>
                                <span class="skills__subtitle">Pr&egrave;s de 8 mois</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Figma</h3>
                                    <span class="skills__number">55%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_figma">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Adobe Xd</h3>
                                    <span class="skills__number">55%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_xd">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Adobe Illustrator</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_ai">

                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills_ps">

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========== qualifications ==========-->
        <section class="qualification section">
            <h2 class="section__title">Qualifications</h2>
            <span class="section__subtitle">mes differentes exp&eacute;riences</span>

            <div class="qualication__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        &Eacute;ducation
                    </div>

                    <div class="qualification__button button--flex " data-target="#travail">
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Travail
                    </div>
                </div>

                <div class="qualification__sections">
                    <!--========== qualifications content 1==========-->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!--========== qualifications 1==========-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><em>Titre Professionnel</em><br>
                                    D&eacute;veloppeur Web et Web Mobile
                                </h3>
                                <span class="qualification__subtitle">ELAN Formation</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Mars 22 ~ Decembre 22
                                </div>
                            </div>

                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>
                        </div>

                        <!--========== qualifications 2==========-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title"><em>Baccalaur&eacute;at Professionnel</em><br>
                                    Pilote de Ligne de production
                                </h3>
                                <span class="qualification__subtitle">Lyc&eacute;e SCHWEISGUTH</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Septembre 16 ~ Aout 17
                                </div>
                            </div>


                        </div>

                        <!--========== qualifications 3==========-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><em>Baccalaur&eacute;at</em><br>
                                    SVT sp&eacute;cialit&eacute;
                                    Math&eacute;matiques
                                </h3>
                                <span class="qualification__subtitle">Lyc&eacute;e Edouard SCHUR&Eacute;E</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2005
                                </div>
                            </div>

                            <div>
                                <span class="qualification-rounder"></span>

                            </div>
                        </div>


                    </div>
                    <!--========== qualifications content 2==========-->
                    <div class="qualification__content" data-content id="travail">
                        <!--========== qualifications 1==========-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title"><em>Stagiaire</em><br>
                                    Developpeur Fullstack</h3>
                                <span class="qualification__subtitle">ABSTRALITY (Lausanne)</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Septembre 22 ~ Octobre 22
                                </div>
                            </div>


                        </div>

                        <!--========== qualifications 2==========-->
                        <div class="qualification__data">

                            <div>
                                <h3 class="qualification__title"><em>Extra</em><br>
                                    Employe Polyvalent</h3>
                                <span class="qualification__subtitle">Papa Pizza (Scherwiller)</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022
                                </div>
                            </div>
                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>

                        </div>

                        <!--========== qualifications 3==========-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification-rounder"></span>
                                <span class="qualification-line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title"><em>100%</em><br>
                                    Agent de Securit&eacute;</h3>
                                <span class="qualification__subtitle">JUGGERS SECURITE SA (Crissier)</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Avril 2018 ~ Aout 2021
                                </div>
                            </div>

                        </div>

                        <!--========== qualifications 4==========-->
                        <div class="qualification__data">


                            <div>
                                <h3 class="qualification__title"><em>Int&eacute;rim</em><br>
                                    Pilote de ligne</h3>
                                <span class="qualification__subtitle">STOCKO (Eichoffen)</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Semptembre 2017 ~ Mars 2018
                                </div>
                            </div>
                            <div>
                                <span class="qualification-rounder"></span>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- ========= Contact me ======= -->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contactez moi</h2>
            <span class="section__subtitle">Entrez en contact</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Appelez-moi</h3>
                            <span class="contact__subtitle">06-21-68-09-52</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Courriel</h3>
                            <span class="contact__subtitle">arthur.ndoumbileg@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker   contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Localisation</h3>
                            <span class="contact__subtitle">France ~ Bas-Rhin</span>
                        </div>
                    </div>


                </div>

                <form action="" class="contavt__form grid" method>
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Nom</label>
                            <input type="text" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Courriel</label>
                            <input type="email" class="contact__input">
                        </div>
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Projet</label>
                        <input type="text" class="contact__input">
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Message</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                    </div>

                    <div>
                        <a href="#" class="button button--flex">
                            Envoyer message
                            <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </form>
            </div>
        </section>

    </main>
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Arthur</h1>
                    <span class="footer__subtitle">D&eacute;veloppeur Web et Web Mobile</span>
                </div>

                <ul class="footer__links">
                    <!--<li><a href="#services" class="footer__link">Services</a></li>-->
                    <li><a href='#about' class="footer__link">Pr&eacute;sentation</a></li>
                    <li><a href="#skills" class="footer__link">Comp&eacute;tences</a></li>
                    <li><a href="#contact" class="footer__link">Contact</a></li>
                </ul>
                <div class="footer__social">
                    <a href="https://github.com/ArthurND" target="_blank" class="footer__social">
                        <i class="uil uil-github-alt"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/arthur-n-2299b3219/" target="_blank" class="footer__social">
                        <i class="uil uil-linkedin-alt"></i>
                    </a>

                </div>
            </div>
            <p class="footer__copy">&#169; Arthur NDOUM. All right reserved</p>
        </div>
    </footer>
    <!--========== scroll top ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>
    <!--========== swiper js ===========-->
    <script src="js/swiper-bundle.min.js"></script>
    <!--========== main js ==========-->
    <script src="js/main.js"></script>
</body>

</html>