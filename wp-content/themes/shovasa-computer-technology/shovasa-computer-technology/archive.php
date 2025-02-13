<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shovasa_Computer_Technology
 */

get_header();
$page_id = get_the_ID();
$page_title = get_the_title($page_id);
$categories = get_the_category();
$category_id = $categories[0]->term_id;
$category_name = $categories[0]->name;
$category_link = get_category_link($category_id);
$contact_page_id = 937; 

?>

	<main id="primary" class="site-main category">
        <?php if(is_category()) {
	
	     ?>
		<div class="herobanner" style="background-image:url('<?php echo get_field("herobanner_image",$contact_page_id); ?>')">
			<div class="container">
			   <div class="bradcrumbs">
				   <a href="<?php echo get_site_url() ?>">Home</a> > <span>category</span> > <?php if (!empty($categories)) { ?> <a href =" <?php echo esc_url($category_link) ?>" ><?php echo esc_html($category_name) ?></a> <?php } ?>
				</div>
				<h1>
					<?php echo esc_html($category_name) ?>
				</h1>
				
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
									wp_reset_postdata();
									?>
							</div>
 							 <div class="pagination" style="text-align:center">
										<?php the_posts_pagination(); ?>
							</div>	
					   </div>
					</div>
			<?php	
			}
	
	?>
<?php
}
?>

	</main><!-- #main -->

<?php

get_footer();
