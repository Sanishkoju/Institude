<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Shovasa_Computer_Technology
 */
$contact_page_id = 937; 
get_header();
?>

	<main id="primary" class="site-main">
				<div class="herobanner" style="background-image:url('<?php echo get_field("herobanner_image",$contact_page_id); ?>')">
			<div class="container">
			<div class="search-detail" style="color:#fff; text-align:center;">
				<h1>Search Results for: <?php echo get_search_query(); ?></h1>
				<p style="margin-top:20px; text-align:center;"><?php global $wp_query; echo $wp_query->found_posts; ?> results found.</p>
			</div>
				
		     </div>
		</div>
            <?php

			if ( have_posts() ) {
				?>
					<div class="courses_container">
						<div class="container">
							<div class="courses_wrapper">
								<?php
								while ( have_posts() ) {
									the_post(); ?>
									<?php get_template_part('template-parts/content', 'courses') ?>
									<?php
										}
									?>
		
							</div>
									 <div class="pagination" style="text-align:center">
										<?php the_posts_pagination(); ?>
									</div>	
					   </div>
					</div>

			<?php } else  { ?>
		     <?php get_template_part('template-parts/content', 'none') ?>
			
			<?php } ?>
	</main><!-- #main -->

<?php

get_footer();
