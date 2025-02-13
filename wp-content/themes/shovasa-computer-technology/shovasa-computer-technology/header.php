<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shovasa_Computer_Technology
 */
$contact_page_id = 937; 

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shovasa-computer-technology' ); ?></a>

	<header id="masthead" class="site-header">
			<div class="top_header">
				<div class="container">
					<div class="top_header_info">
						<?php if(get_field("location_url",$contact_page_id ) || get_field("location_text",$contact_page_id )) : ?>
							<div class="social_info">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="18px"><path fill="#ffffff" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
								<a href='<?php echo get_field("location_url",$contact_page_id ); ?>'><?php echo get_field("location_text",$contact_page_id ); ?></a>
							</div>
						<?php endif; ?>
						<?php if(get_field("phone_numbers",$contact_page_id )) : ?>
							<div class="social_info">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="18px"><path fill="#ffffff" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
								<a href='tel:<?php echo get_field("phone_numbers",$contact_page_id ); ?>'><?php echo get_field("phone_numbers",$contact_page_id ); ?></a>
							</div>
						<?php endif; ?>
						<?php if(get_field("email_address",$contact_page_id )) : ?>
							<div class="social_info">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="18px"><path fill="#ffffff" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
								<a href='mailto:<?php echo get_field("email_address",$contact_page_id );?>'><?php echo get_field("email_address",$contact_page_id );?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>

			</div>
			<div class="header_bottom">
			  <div class="container">
				<div class="header_wrapper">
				<div class="site-branding">
					<?php
					if(has_custom_logo()){ 
					the_custom_logo();
					}
					else{
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					}
					$shovasa_computer_technology_description = get_bloginfo( 'description', 'display' );
					if ( $shovasa_computer_technology_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $shovasa_computer_technology_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; 
					
					?>
				</div><!-- .site-branding -->
				<div class="nav_menu">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
				<div class="header_cross only_mob">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="18px" style="fill:#1931c6"><path fill:#1931c6 d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
				</div>
				</div>
				<div class="form">
					<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
					<input type="search" name="s" placeholder="Search Courses" value="<?php echo get_search_query(); ?>">
					<button type="submit" class="search_btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18px" style="fill:#1931c6"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
				    </form>
				<div class="header_cross only_mob">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="18px" style="fill:#1931c6"><path fill:#1931c6 d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
				</div>
				</div>

				<div class="only_mob">
					<div class="search_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18px" style="fill:#1931c6"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></div>
					<div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="18px"><path fill="#1931c6" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg></div>
			    </div>
			 </div>
		     </div>
			</div>
	</header><!-- #masthead -->
	<script>
		jQuery(document).ready(function () {

// 				jQuery(".menu-item-has-children > a").click(function(event){
// 	  event.preventDefault();
// 	});
		jQuery(window).scroll(function() {    
		var scroll = jQuery(window).scrollTop();    
		if (scroll >= 10) {
			jQuery(".header_bottom").addClass("darkheader");
		}
			else{
				jQuery(".header_bottom").removeClass("darkheader");
			}
	});
			if (window.innerWidth >= 1024) {
			jQuery('.menu-item-has-children > a').append('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15px" style="margin-left:4px;"><path fill="#000000" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>');
				
			let menuWithChild = document.querySelectorAll(".menu-item-has-children");
			menuWithChild.forEach((menuhaschild)=>{
				menuhaschild.addEventListener("mouseover",function(){				
				this.closest('.menu-item-has-children').classList.add('isopen');
				})
											 
				menuhaschild.addEventListener("mouseout",function(){			
				menuhaschild.classList.remove('isopen');
				}		)				  
			
			 });

			}


			
			
const input = document.querySelector("input[type='search']");
const hasClearButton = () => input.value.length > 0;
const toggleSearchIcon = () => {
	if(hasClearButton()){
document.querySelector(".search_btn").style.display="none";  
}
	else{
		document.querySelector(".search_btn").style.display="block"; 
	}
};

	input.addEventListener("input", () => {
      if (input.value.trim() !== "") {
          document.querySelector(".search_btn").style.display="none";  
      } else {
          document.querySelector(".search_btn").style.display="block";  
      }
  });

input.addEventListener("blur", () => {
    document.querySelector(".search_btn").style.display="block";
});
input.addEventListener("mouseover", toggleSearchIcon);
input.addEventListener("mouseout", toggleSearchIcon);
input.addEventListener("focus", toggleSearchIcon);
	});
	</script>
