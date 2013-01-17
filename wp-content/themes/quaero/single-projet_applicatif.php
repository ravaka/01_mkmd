<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 ?>

	
		

			<?php while ( have_posts() ) : the_post(); ?>
			<h3 class="content_loaded_title"><?php the_title(); ?></h3>
			<div class="content_loaded">
			<?php if(get('porteur_de_projet_logo') || get('porteur_de_projet_site_internet')){ ?>
			<div class="ajax_porteur">
			<p>Porteur de projet</p>
			<?php if(get('porteur_de_projet_site_internet')){ ?>
			<a href="<?php echo get('porteur_de_projet_site_internet'); ?>" title="<?php echo get('porteur_de_projet_site_internet'); ?>">
			<?php } ?>
			<?php if(get('porteur_de_projet_logo')){ ?>
			<?php echo get_image('porteur_de_projet_logo',1); ?>
			<?php } ?>
			<?php if(get('porteur_de_projet_site_internet')){ ?>
			</a>
			<?php } ?>
			</div>
			<?php } ?>
			<?php the_content();?>
			<?php if(get('fiche_technique_details_de_la_fiche')){ ?>
			<h3 class="link_to_fiche">Fiche technique et médias</h3>
			<div class="fiche_technique_ajax" >
			<?php echo get('fiche_technique_details_de_la_fiche'); ?>
			</div>
			<?php } ?>
			</div>
			<?php endwhile; // end of the loop. ?>

		
