<?php
/*Template Name: courses */
get_header();
$page_id = get_the_ID();
$page_title = get_the_title($page_id);
$contact_page_id = 937; 
?>
		<div class="herobanner" style="background-image:url('<?php echo get_field("herobanner_image",$contact_page_id); ?>')">
			<div class="container">
			   <div class="bradcrumbs">
					<a href="<?php echo get_site_url() ?>">Home</a> > <span><?php echo $page_title ?></span>
				</div>
				<h1>
					<?php echo $page_title ?>
				</h1>
				
		     </div>
		</div>
<div class="courses_container">
	<div class="container">
		<?php echo do_shortcode("[courses]") ?>
	</div>
</div>
<?php
get_footer();