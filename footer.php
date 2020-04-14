<?php

/**
 * Template pour afficher le footer
 */

?>

</div><!-- div content -->

<footer id="colophon" class="site-footer container-fluid bottom-footer">
	<div class="container pt-4 pb-4">
		<div class="row">
			<div class="col-3">
				<img class="logo-digifab img-fluid mb-2" src="<?php echo get_template_directory_uri(); ?>/assets/digifab_logo.png" alt="logo de Digifab">
				<p>4-6 Avenue du Parc<br>25000 Besançon<br>06.77.39.41.45</p>
			</div>
			<div class="col-3">
				<p class="text-dark font-weight-bold mb-1">Horaires</p>
				<p>Du lundi au vendredi:<br>9h00-12h00/14h-18h<br>Samedi: 9h00-12h00</p>
				<p class="text-dark font-weight-bold mb-1">Paiement sécurisé</p>
				<div class="d-flex">
					<img class="paiement mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/visa.png" alt="">
					<img class="paiement mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/mastercard.png" alt="">
					<img class="paiement" src="<?php echo get_template_directory_uri(); ?>/assets/paypal.png" alt="">
				</div>
			</div>
			<div class="col-3">
				<p class="text-dark font-weight-bold mb-1">Partenaires</p>
				<ul class="list-unstyled">
					<li><a class="text-reset" href="https://www.grandbesancon.fr/">Grand Besançon Métropole</a></li>
					<li><a class="text-reset" href="https://www.besancon.fr/">Ville de Besançon</a></li>
					<li><a class="text-reset" href="https://www.bourgognefranchecomte.fr/">Région Bourgogne Franche-Comté</a></li>
					<li><a class="text-reset" href="http://www.bgefc.org/">BGE</a></li>
					<li><a class="text-reset" href="http://www.talentsdescites.com/">Talents des cités</a></li>
					<li><a class="text-reset" href="https://www.safran-group.com/fr">Safran</a></li>
					<li><a class="text-reset" href="https://groupe-reussite.fr/">Groupe Réussite</a></li>
				</ul>
			</div>
			<div class="col-3">
				<p class="text-dark font-weight-bold mb-1">Suivez-nous sur</p>
				<ul class="list-unstyled">
					<li><a class="text-reset" href="https://digifab.fr/blog">Blog</a></li>
					<li><a class="text-reset" href="https://fr-fr.facebook.com/LeDigifab/">Facebook</a></li>
					<li><a class="text-reset" href="https://www.youtube.com/channel/UCcOUf04mwW-HZQbIRkRDp9g">Youtube</a></li>
				</ul>

			</div>
		</div>
	</div>
</footer><!-- #colophon -->

</div><!-- #page -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://github.com/mattbryson/TouchSwipe-Jquery-Plugin/blob/master/jquery.touchSwipe.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>

</html>