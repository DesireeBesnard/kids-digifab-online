<?php

get_header(); ?>
<!-- DEBUT BLOC CONTENT -->

  <!-- DEBUT BLOC HEADER -->

  <header class="container-fluid d-flex justify-content-center">
    <div class="container-header-reseaux container-header-reseaux-height container-header-bg text-white">
      <div class="row h-100">
        <div class="col-12 col-sm-12 col-md-6 offset-md-4 col-lg-6 offset-lg-6 col-xl-6 offest-xl-6 d-flex justify-content-center align-items-center p-0">
          <h4 class="titre_header text-right pb-4"> Gitbreakers</h4>
        </div>
      </div>

    </div>
  </header>
  <!-- FIN BLOC HEADER -->
<main>
    <?php
    get_template_part('content', get_post_format());
    ?>
    </div> <!-- /.blog-main -->
</main> <!-- /.row -->

<!-- FIN BLOC CONTENT -->
<?php get_footer(); ?>