<?php get_header(); ?>

<div class="container-fluid head">
    <div class="container head-container">
        <div class="row row-header">
            <div class="col-6"></div>
            <div class="col-6 d-flex align-items-center">
                <div>
                    <h1 class="header-title montserrat mb-3">Kids Digifab Online</h1>
                    <p class="dekko text-center">Découvrez la plateforme</p>
                    <div class="scroll-icon smooth-scroll position-relative">
                        <a href="#presentation"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5" id="presentation">
        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center">
                <p class="text-center">Une plateforme pour apprendre le numérique de façon ludique</p>
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
<div class="container-fluid dekko thematique-demo">
    <div class="container position-relative pt-5 pb-5">
        <h1 class="text-center mt-3 mb-5">NOS THEMATIQUES</h1>

        <ul class="carousel d-flex justify-content-center p-0 text-black">
            <li class="li-thematiques items main-pos d-flex justify-content-center align-items-center" id="1">
                <div class="text-center">
                    <h2>Robotique</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/robotique-thematique.png" alt="">
                    <p>Plateforme pédagogique innovante</p>

                    <h2 class="mt-4">Arduino</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/arduino-thematique.png" alt="">
                    <p>Domotique, robotique, informatique<br>embarquée</p>
                </div>
            </li>
            <li class="li-thematiques items right-pos d-flex justify-content-center align-items-center" id="2">
                <div class="text-center">
                    <h2 class="mb-4">Brico numérique</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/brico-thematique.jpg" alt="">
                    <p class="mt-4">Création de son propre jeu numérique</p>
                </div>
            </li>
            <li class="li-thematiques items back-pos d-flex justify-content-center align-items-center" id="3">
                <div class="text-center">
                    <h2 class="mb-4">Drone</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/drone-thematique.jpg" alt="">
                    <p class="mt-4">Scripts de mouvements et pilotage</p>
                </div>
            </li>
            <li class="li-thematiques items back-pos d-flex justify-content-center align-items-center" id="4">
                <div class="text-center">
                    <h2>Code</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/code-thematique.png" alt="">
                    <p>Langage de programmation</p>

                    <h2 class="mt-4">Jeux vidéos</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/videogames-thematique.png" alt="">
                    <p>Scratch, code combat, Unity</p>

                </div>
            </li>
            <li class="li-thematiques items back-pos d-flex justify-content-center align-items-center" id="5">
                <div class="text-center">
                    <h2 class="mb-4">Graphisme</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/graphisme-thematique.png" alt="">
                    <p class="mt-4">Arts graphiques</p>
                </div>
            </li>
            <li class="li-thematiques items back-pos d-flex justify-content-center align-items-center" id="6">
                <div class="text-center">
                    <h2 class="mb-4">Montage vidéos</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/montage-thematique.png" alt="">
                    <p class="mt-4">Développement de la créativité</p>
                </div>
            </li>
            <li class="li-thematiques items left-pos d-flex justify-content-center align-items-center" id="7">
                <div class="text-center">
                    <h2 class="mb-4">Modélisation 3D</h2>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/3d-thematique.jpg" alt="">
                    <p class="mt-4">Développement de la créativité</p>
                </div>
            </li>
        </ul>
        <span class="d-flex">
            <img class="img-fluid position-absolute" id="prev" src="<?php echo get_template_directory_uri(); ?>/assets/thematique-prec.png" alt="">
            <img class="img-fluid position-absolute" id="next" src="<?php echo get_template_directory_uri(); ?>/assets/thematique-next.png" alt="">
        </span>
    </div>
    <div class="container pt-5 pb-5">
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
    </div>
</div>
<div class="container-fluid offres">
    <div class="container">

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