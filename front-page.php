<?php

get_header(); ?>
<!-- DEBUT BLOC CONTENT -->

  <!-- DEBUT BLOC HEADER -->

  <header>
   
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