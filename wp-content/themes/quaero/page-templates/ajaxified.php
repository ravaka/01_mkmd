<?php
/**
 * Template Name: Charger des contenus en ajax
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<div class="clear">&nbsp;</div>
			<div id="graph_draw">
				<div>
					<a href="javascript:;" class="link_ajax" id="ajax_one"><span>Projets applicatifs</span></a>
						<div class="ajax_grow" style="display:none">
						<?php
						
						$args_projet=array( 'post_type'      => 'projet_applicatif' );
						query_posts( $args_projet);
						if (have_posts()) :  
						?>
						<ul class="list_items">
							<?php
							while (have_posts()) : the_post(); 
							?>
								<li>
									<a href="javascript:;" rel="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="ajax_listing">
									<?php the_post_thumbnail('thumbnail'); ?><br/>
									<?php the_title(); ?>
									</a>
								</li>
							<?php
								endwhile;
							?>
						</ul>
						<div class="clear"></div>
						<?php
							else :
							echo '&nbsp;';
							endif;
						wp_reset_query(); ?>
						<div class="loaded_content_ajax">			</div>
					</div>
				</div>
				<div>
					<a href="javascript:;" class="link_ajax" id="ajax_four"> <span>benchmarking</span></a>
					<div class="ajax_grow">
						<h3>Content 4</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id arcu a magna tristique convallis in eu ante. Sed diam ligula, molestie eget venenatis nec, imperdiet vitae odio. Ut accumsan massa turpis. Aenean at velit metus, id rhoncus sem. Pellentesque congue lobortis lectus et hendrerit. Morbi elementum facilisis lorem non laoreet. Morbi hendrerit justo eu nisi aliquet tristique. Vestibulum at enim id mi ullamcorper sollicitudin. Quisque congue sapien non justo tempor aliquam. Maecenas nulla turpis, pretium sit amet malesuada vel, condimentum at neque. Aliquam erat volutpat. Donec sollicitudin quam at justo aliquam sodales. Maecenas sodales, dolor eu feugiat tempus, erat libero interdum libero, sit amet mollis ipsum mauris eget urna. Sed erat nisl, gravida vel porttitor in, dictum vulputate arcu. In aliquet viverra est, vitae malesuada metus tempor a. Sed ipsum tellus, accumsan sed porttitor ut, congue bibendum diam. Phasellus a tortor metus, sit amet dignissim justo. Etiam mattis tempus lorem, congue pretium felis viverra quis. Nulla metus erat, fermentum quis elementum sed, lacinia non nisl. </p>
					</div>
				</div>
				<div class="demi_triangle g486 inside">
					<a href="javascript:;" class="link_ajax" id="ajax_three"><span>Core technologies Cluster</span></a>
					<div class="ajax_grow">
						<h3>Content 3</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id arcu a magna tristique convallis in eu ante. Sed diam ligula, molestie eget venenatis nec, imperdiet vitae odio. Ut accumsan massa turpis. Aenean at velit metus, id rhoncus sem. Pellentesque congue lobortis lectus et hendrerit. Morbi elementum facilisis lorem non laoreet. Morbi hendrerit justo eu nisi aliquet tristique. Vestibulum at enim id mi ullamcorper sollicitudin. Quisque congue sapien non justo tempor aliquam. Maecenas nulla turpis, pretium sit amet malesuada vel, condimentum at neque. Aliquam erat volutpat. Donec sollicitudin quam at justo aliquam sodales. Maecenas sodales, dolor eu feugiat tempus, erat libero interdum libero, sit amet mollis ipsum mauris eget urna. Sed erat nisl, gravida vel porttitor in, dictum vulputate arcu. In aliquet viverra est, vitae malesuada metus tempor a. Sed ipsum tellus, accumsan sed porttitor ut, congue bibendum diam. Phasellus a tortor metus, sit amet dignissim justo. Etiam mattis tempus lorem, congue pretium felis viverra quis. Nulla metus erat, fermentum quis elementum sed, lacinia non nisl. </p>
					</div>
				</div>
				<div class="demi_triangle1 g486 inside">
					<a href="javascript:;" class="link_ajax" id="ajax_two"><span>Corpus</span></a>
					<div class="ajax_grow" >
						<h3>Content 2</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id arcu a magna tristique convallis in eu ante. Sed diam ligula, molestie eget venenatis nec, imperdiet vitae odio. Ut accumsan massa turpis. Aenean at velit metus, id rhoncus sem. Pellentesque congue lobortis lectus et hendrerit. Morbi elementum facilisis lorem non laoreet. Morbi hendrerit justo eu nisi aliquet tristique. Vestibulum at enim id mi ullamcorper sollicitudin. Quisque congue sapien non justo tempor aliquam. Maecenas nulla turpis, pretium sit amet malesuada vel, condimentum at neque. Aliquam erat volutpat. Donec sollicitudin quam at justo aliquam sodales. Maecenas sodales, dolor eu feugiat tempus, erat libero interdum libero, sit amet mollis ipsum mauris eget urna. Sed erat nisl, gravida vel porttitor in, dictum vulputate arcu. In aliquet viverra est, vitae malesuada metus tempor a. Sed ipsum tellus, accumsan sed porttitor ut, congue bibendum diam. Phasellus a tortor metus, sit amet dignissim justo. Etiam mattis tempus lorem, congue pretium felis viverra quis. Nulla metus erat, fermentum quis elementum sed, lacinia non nisl. </p>
					</div>
				</div>
			</div>
			<script type="text/javascript">
$(document).ready(function () {
       var allPanels = $('#graph_draw > div > .ajax_grow').hide();
    
  $('#graph_draw > div > a.link_ajax').click(function() {
    allPanels.slideUp();
    $(this).next().slideDown();
    return false;
  }); 
   $('.ajax_listing').click(function(){
    $('body').stop().scrollTo( '#graph_draw' , 800 );
    var link = $(this).attr('rel');
	 $('.loaded_content_ajax').slideUp();
   $('.loaded_content_ajax').empty();
     
   $('.loaded_content_ajax').slideDown();
   $('.loaded_content_ajax').load(link, function(){
  
    $('.fiche_technique_ajax').hide();  
	 $('.link_to_fiche').click(function() { 
	 $(this).toggleClass('active');
	 $('.fiche_technique_ajax').slideToggle();}); 
	 $('body').stop().scrollTo( '#graph_draw' , 800 );
   });
   });
	 
	   
      });
</script>

	<div class="clear">&nbsp;</div>
<?php get_footer(); ?>