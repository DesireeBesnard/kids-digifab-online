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
</div>

<div class="container-fluid dekko" id="presentation">
    <div class="container pb-5">
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
<div class="container-fluid dekko">
    <div class="container position-relative">
        <h1 class="text-center mt-3 mb-5">NOS THEMATIQUES</h1>

        <ul class="carousel d-flex justify-content-center p-0">
            <li class="li-thematiques items main-pos" id="1">
                <p>1</p>
            </li>
            <li class="li-thematiques items right-pos" id="2">
                <img src="http://farm9.staticflickr.com/8337/8234123289_2b23aeaf06.jpg" />
            </li>
            <li class="li-thematiques items back-pos" id="3">
                <img src="http://farm9.staticflickr.com/8337/8234711202_831b23a2b7.jpg" />
            </li>
            <li class="li-thematiques items back-pos" id="4"><iframe width="500" height="281" src="https://www.youtube.com/embed/szIEr2F61DU" frameborder="0" allowfullscreen></iframe></li>
            <li class="li-thematiques items back-pos" id="5">
                <iframe src="https://player.vimeo.com/video/19464611" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </li>
            <li class="li-thematiques items back-pos" id="6">
                <img src="http://woofie2.pixiq.com/files/cache/20030323_img_7465_3072_x_2048_619x413.jpg" />
            </li>
            <li class="li-thematiques items left-pos" id="7"><img src="http://www.mishes.com/wp-content/uploads/2011/12/FlickrMonday07.jpg" />
            </li>
        </ul>
        <span class="d-flex">
            <input class="position-absolute" type="button" value="Prev" id="prev">
            <input class="position-absolute" type="button" value="Next" id="next">
        </span>
    </div>
</div>




<?php get_footer(); ?>