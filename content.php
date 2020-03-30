<?php get_header(); ?>

<div class="container-fluid head">
    <div class="container head-container">
        <div class="row row-header">
            <div class="col-6 d-flex align-items-center">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img-header.png" alt="">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div>
                    <h1 class="header-title montserrat mb-3 dekko">Kids Digifab Online</h1>
                    <p class="dekko text-center">Découvrez la plateforme</p>
                    <div class="scroll-icon smooth-scroll position-relative">
                        <a href="#presentation"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container dekko" id="presentation">
        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center">
                <p class="text-center pl-2 pr-2">Une plateforme pour apprendre le numérique de façon ludique</p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn front-page-button text-white">Je m'inscris!</button>
                </div>

            </div>
            <div class="col-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xRfqVhi4ACQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid dekko">
    <div class="container pt-5 pb-5 mb-5">
        <h1 class="text-center mt-5 mb-5">COMMENT ÇA MARCHE</h1>

        <div class="row mt-5 pt-5">
            <div class="col-3">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img1-commentcamarche.png" alt="">
            </div>
            <div class="col-3">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img2-commentcamarche.png" alt="">
            </div>
            <div class="col-3">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img3-commentcamarche.png" alt="">
            </div>
            <div class="col-3">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img4-commentcamarche.png" alt="">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-3">
                <p>Les cours sont disponibles sur notre plateforme et peuvent être suivis dès l'âge de 7 ans.</p>
            </div>
            <div class="col-3">
                <p>L'enfant suis l'atelier de façon ludique sous format vidéo. Celui-ci inclut un quizz d'évaluation et chaque fin d'atelier est récompensée par un label.</p>
            </div>
            <div class="col-3">
                <p>Un forum et un chat sont à disposition des élèves. Ils peuvent y poser des questions ou y échanger leurs idées.</p>
            </div>
            <div class="col-3">
                <p>Place à la pratique! Le but est d'optimiser le temps en privilégiant la pratique à la théorie. Le formateur est sollicité en renfort.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid dekko thematique-demo pb-5">
    <div class="container position-relative pt-5 pb-5">
        <h1 class="text-center mt-3 mb-5">NOS THEMATIQUES</h1>

        <ul class="carousel d-flex justify-content-center p-0 text-black">
            <li class="li-thematiques items main-pos d-flex justify-content-center align-items-center" id="1">
                <div class="text-center">
                    <h2>Robotique</h2>
                    <img class="img-thematiques" src="<?php echo get_template_directory_uri(); ?>/assets/robot.png" alt="">
                    <p>Plateforme pédagogique innovante</p>

                    <h2 class="mt-4">Arduino</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/arduino-thematique.png" alt="">
                    <p>Domotique, robotique, informatique<br>embarquée</p>
                </div>
            </li>
            <li class="li-thematiques items right-pos d-flex justify-content-center align-items-center" id="2">
                <div class="text-center">
                    <h2 class="mb-4">Brico numérique</h2>
                    <img class="img-thematiques" src="<?php echo get_template_directory_uri(); ?>/assets/shuttle.png" alt="">
                    <p class="mt-4">Création de son propre jeu numérique</p>
                </div>
            </li>
            <li class="li-thematiques items back-pos d-flex justify-content-center align-items-center" id="3">
                <div class="text-center">
                    <h2 class="mb-4">Drone</h2>
                    <img class="img-thematiques" src="<?php echo get_template_directory_uri(); ?>/assets/drone.png" alt="">
                    <p class="mt-4">Scripts de mouvements et pilotage</p>
                </div>
            </li>
            <li class="li-thematiques items back-pos d-flex justify-content-center align-items-center" id="4">
                <div class="text-center">
                    <h2>Code</h2>
                    <img class="img-thematiques" src="<?php echo get_template_directory_uri(); ?>/assets/coding.png" alt="">
                    <p>Langage de programmation</p>

                    <h2 class="mt-4">Jeux vidéos</h2>
                    <img class="img-thematiques" src="<?php echo get_template_directory_uri(); ?>/assets/spacegame.png" alt="">
                    <p>Scratch, code combat, Unity</p>

                </div>
            </li>
            <li class="li-thematiques items back-pos d-flex justify-content-center align-items-center" id="5">
                <div class="text-center">
                    <h2 class="mb-4">Graphisme</h2>
                    <img class="img-thematiques" src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="">
                    <p class="mt-4">Arts graphiques</p>
                </div>
            </li>
            <li class="li-thematiques items back-pos d-flex justify-content-center align-items-center" id="6">
                <div class="text-center">
                    <h2 class="mb-4">Montage vidéos</h2>
                    <img class="img-thematiques" src="<?php echo get_template_directory_uri(); ?>/assets/film-strip.png" alt="">
                    <p class="mt-4">Développement de la créativité</p>
                </div>
            </li>
            <li class="li-thematiques items left-pos d-flex justify-content-center align-items-center" id="7">
                <div class="text-center">
                    <h2 class="mb-4">Modélisation 3D</h2>
                    <img class="img-thematiques" src="<?php echo get_template_directory_uri(); ?>/assets/3d-printer.png" alt="">
                    <p class="mt-4">Développement de la créativité</p>
                </div>
            </li>
        </ul>
        <span class="d-flex">
            <img class="img-fluid position-absolute" id="prev" src="<?php echo get_template_directory_uri(); ?>/assets/thematique-prec.png" alt="">
            <img class="img-fluid position-absolute" id="next" src="<?php echo get_template_directory_uri(); ?>/assets/thematique-next.png" alt="">
        </span>
    </div>
    <!-- <div class="container pt-5 pb-5">
        <div class="row pt-5 pb-5">
            <div class="col-6 mx-auto">
                <p class="text-center">Découvrir le premier chapitre</p>
                <div class="d-flex justify-content-center">
                    <button class="btn front-page-button text-white">Démo</button>
                </div>
            </div>
            <div class="col-6">

            </div>
        </div>
    </div> -->
</div>
<div class="container-fluid pt-4 pb-4 offres dekko">
    <div class="container my-5">
        <!--Section: Content-->
        <section class="text-center">

            <!-- Section heading -->
            <h1 class="pb-2  mt-5 mb-4 dekko">NOTRE OFFRE DE FORMATION</h1>
            <!-- Section description -->
            <p class="w-responsive mx-auto mb-5 dekko offres-text">Une offre économique et complète pour étudier toutes nos thématiques sur une période de 10 mois. 1h30 de cours par jour le mercredi ou le samedi hors vacances scolaires. Les inscriptions sont ouvertes!</p>

            <div class="row pt-4 ">
                <div class="col-lg-3 col-md-12 mb-4 d-flex align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 dekko">Offre Vacances</h5>
                            <p>Dans une ambiance de vacances, par groupe de 10 enfants maximum, cette offre permet d'étudier 2 thématiques en 5 jours et 1h30 par jour.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card purple-gradient">
                        <div class="card-body white-text">
                            <h4 class="dekko">Offre Annuelle Kids</h4>
                            <h3 class="font-weight-bold my-4 roboto mt-4">365 €</h3>

                            <p>Stage annuel pour les enfants de<br>7 à 11 ans</p>
                            <div>
                                <a class="btn btn-outline-white btn-rounded">Je souscris</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card purple-gradient">
                        <div class="card-body white-text">
                            <h4 class="dekko">Offre Annuelle Ados</h4>
                            <h3 class="font-weight-bold my-4 roboto mt-4">368,94 €</h3>

                            <p>Stage annuel pour les ados de<br>12 à 18 ans</p>
                            <div>
                                <a class="btn btn-outline-white btn-rounded">Je souscris</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 dekko">Offre trimestrielle</h5>
                            <p>L'offre idéale pour ceux qui n'ont pas eu la chance de s'inscrire à l'offre annuelle et qui désirent suivre les ateliers sur une période plus courte.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4">
                <p>Pour les offres vacances et trimestrielles, nous contacter au <a class="btn front-page-button btn-rounded">06.77.39.41.45</a></p>
            </div>

        </section>


    </div>
</div>
<div class="container-fluid dekko contact">
    <div class="container pt-5 pb-5">
        <div class="row mt-5 mb-5">
            <div class="col-4 offset-1 bg-white card-contact pl-5 pr-5">
                <h2 class="text-center mt-5 mb-5">CONTACT</h2>
                <div>
                    <input type="text" id="input1" class="form-control mb-3" placeholder="Nom">
                    <input type="text" id="input2" class="form-control mb-3" placeholder="Prénom">
                    <textarea name="message" id="input3" class="form-control mb-3" cols="30" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn front-page-button text-white mb-5">ENVOYER</button>
                </div>
            </div>
            <div class="col-6 offset-1 d-flex align-items-center">
                <div class="text-center">
                    <h2>Découvrez nos offres</h2>
                    <p>Nous proposons un stage découverte gratuit pour tous les curieux qui veulent tester nos cours.<br>Appelez-nous</p>
                    <p class="telnb-color">06.77.39.41.45</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>