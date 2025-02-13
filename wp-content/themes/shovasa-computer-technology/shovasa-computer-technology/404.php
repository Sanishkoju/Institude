<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Shovasa_Computer_Technology
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="not_found">
		<div class="container">
		<h1>:(</h1><br>
		<h2>A <span>404</span> error occured, Page not found, check the URL and try again.</h2><br><br>
		  <h3><a href="<?php echo get_site_url(); ?>">Go Back</a></h3>
		</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
