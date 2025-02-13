<?php
/**
 * Shovasa Computer Technology functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shovasa_Computer_Technology
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function shovasa_computer_technology_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Shovasa Computer Technology, use a find and replace
		* to change 'shovasa-computer-technology' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'shovasa-computer-technology', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'shovasa-computer-technology' ),
		)
	);
		register_nav_menus(
		array(
			'menu-2' => esc_html__( 'Quick-menu', 'shovasa-computer-technology' ),
		)
	);
			register_nav_menus(
		array(
			'menu-3' => esc_html__( 'Secondary', 'shovasa-computer-technology' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'shovasa_computer_technology_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'shovasa_computer_technology_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shovasa_computer_technology_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shovasa_computer_technology_content_width', 640 );
}
add_action( 'after_setup_theme', 'shovasa_computer_technology_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shovasa_computer_technology_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shovasa-computer-technology' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'shovasa-computer-technology' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shovasa_computer_technology_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shovasa_computer_technology_scripts() {
	wp_enqueue_style( 'shovasa-computer-technology-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'shovasa-computer-technology-style', 'rtl', 'replace' );

	wp_enqueue_script( 'shovasa-computer-technology-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('shovasa-computer-technology-script', get_template_directory_uri() . '/js/index.js', array(), _S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shovasa_computer_technology_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
/*
*  Calls Jquery
*/

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}


/*
*  Calls Jquery UI
*/
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_ui_enqueue", 11);
function my_jquery_ui_enqueue() {
   wp_deregister_script('jqueryui');
   wp_register_script('jqueryui', "//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js", false, null);
   wp_enqueue_script('jqueryui');
}





// Gallery custom post type

add_action('init', 'create_gallery_post_type');
function create_gallery_post_type() {
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Gallery'),
            'singular_name' => __('Gallery Item'),
            'add_new' => __('Add New Gallery Item'),
            'add_new_item' => __('Add New Gallery Item'),
            'edit_item' => __('Edit Gallery Item'),
            'new_item' => __('New Gallery Item'),
            'view_item' => __('View Gallery Item'),
            'search_items' => __('Search Gallery Items'),
            'not_found' => __('No gallery items found'),
            'not_found_in_trash' => __('No gallery items found in Trash'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'gallery'),
    ));
}

function create_gallery_taxonomy() {
    register_taxonomy('gallery_cat', 'gallery', array(
        'labels' => array(
            'name' => __('Gallery Categories'),
            'singular_name' => __('Gallery Category'),
            'search_items' => __('Search Gallery Categories'),
            'all_items' => __('All Gallery Categories'),
            'parent_item' => __('Parent Gallery Category'),
            'parent_item_colon' => __('Parent Gallery Category:'),
            'edit_item' => __('Edit Gallery Category'),
            'update_item' => __('Update Gallery Category'),
            'add_new_item' => __('Add New Gallery Category'),
            'new_item_name' => __('New Gallery Category Name'),
            'menu_name' => __('Gallery Categories'),
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'gallery-category'),
    ));
}
add_action('init', 'create_gallery_taxonomy');


// end Gallery custom post type

// Courses custom post type


add_action('init', 'create_reviews_post_type');
function create_reviews_post_type() {
    register_post_type('reviews', array(
        'labels' => array(
            'name' => __('Reviews'),
            'singular_name' => __('Reviews'),
            'add_new' => __('Add New Review'),
            'add_new_item' => __('Add New Review'),
            'edit_item' => __('Edit Review'),
            'new_item' => __('New Review'),
            'view_item' => __('View Review'),
            'search_items' => __('Search Reviews'),
            'not_found' => __('No reviews found'),
            'not_found_in_trash' => __('No reviews found in Trash'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'reviews'),
    ));
}

function create_reviews_taxonomy() {
    register_taxonomy('review_category', 'reviews', array(
        'labels' => array(
            'name' => __('Review Categories'),
            'singular_name' => __('Review Category'),
            'search_items' => __('Search Review Categories'),
            'all_items' => __('All Review Categories'),
            'parent_item' => __('Parent Review Category'),
            'parent_item_colon' => __('Parent Review Category:'),
            'edit_item' => __('Edit Review Category'),
            'update_item' => __('Update Review Category'),
            'add_new_item' => __('Add New Review Category'),
            'new_item_name' => __('New Review Category Name'),
            'menu_name' => __('Review Categories'),
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'review-category'),
    ));
}
add_action('init', 'create_reviews_taxonomy');


// end Courses custom post type




// New AJAX handler for gallery
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');

function data_fetch() {
    // Sanitize input data
    $cat_id = esc_attr($_POST['id']);  
	$totals = esc_attr($_POST['totals']); 

         $args = array(
			'post_type' => 'gallery',
			'post_status' => 'publish',
            'posts_per_page' => -1
			);
        // If a category ID is provided, add a tax query
        if (!empty($cat_id)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'gallery_cat',
                    'field'    => 'term_id',
                    'terms'    => $cat_id,
                ),
            );
        }
			$the_query = new WP_Query( $args );
	        $total_posts = $the_query->found_posts;
			if ( $the_query->have_posts() ) {
?>
					 <div class="gallery_container">
					      <div class="gallery_wrapper">
								<?php	
								while ( $the_query->have_posts() ) {
									$the_query->the_post(); ?>
                                    <?php if (get_the_post_thumbnail_url()){ ?>
										<div class="gallery_box">
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_field( 'post_name', get_post() ); ?>"/>
										</div>
										<?php } ?>
								<?php
								}	
								wp_reset_postdata();
								?>
						 </div>
					 </div>
					 <div class="gallery_pop_sec">
								<div class="cross">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
								</div>
						 
								<div class="gallery_pop_container">
									<div class="gallery_pop_wrapper">
									<?php
									while ( $the_query->have_posts() ) {
										$the_query->the_post(); ?>
                                      <?php get_template_part('template-parts/content', 'gallery' ,array('totals' => $totals )) ?>
									<?php
									}	
									wp_reset_postdata();
									?>
									</div>
								</div>
					 </div>	
			   <?php
wp_die(); 
			}
	
			
}


// courses shortcode

add_shortcode('courses', 'courses_func');
function courses_func() {
	ob_start(); 
if ( wp_is_mobile() ) {  
    $no_of_post = 8;  // Mobile users (including home/front)
} 
elseif ( is_home() || is_front_page() ) {  
    $no_of_post = 16; // Desktop users on home/front
} 
else {  
    $no_of_post = 12; // Desktop users on other pages
}
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;


	         $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
            'posts_per_page' => $no_of_post,
			'paged'          => $paged,
			);
			$the_query = new WP_Query( $args );
	        $total_posts = $the_query->found_posts;
			if ( $the_query->have_posts() ) {
				?>
					<div class="courses_wrapper">
						<?php
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<?php get_template_part('template-parts/content', 'courses') ?>
							<?php
								}	
							wp_reset_postdata();
							?>
					</div>
							<?php
							if(!(is_home() || is_front_page())){ ?>
							<!-- Pagination -->
							<div class="pagination" style="text-align:center">
								<div class="nav-links">
									<?php 
									echo paginate_links(array(
										'total'        => $the_query->max_num_pages,
										'current'      => max(1, get_query_var('paged')),
										'prev_text'    => __('Previous'),
										'next_text'    => __('Next'),
									)); 
									?>
								</div>
							</div>
                <?php
							}		
				
			}
	 return ob_get_clean();
}

//end courses shortcode

// student reviews
add_shortcode('reviews', 'student_reviews');
function student_reviews() {
	ob_start(); 
	         $args = array(
			'post_type' => 'reviews',
			'post_status' => 'publish',
            'posts_per_page' => -1
			);
			$the_query = new WP_Query( $args );
	        $total_posts = $the_query->found_posts;
			if ( $the_query->have_posts() ) {
				?>
				 <section class="testimonial">
				   <div class="container">
					<div class="testimonial__inner">
					  <div class="testimonial-slider">
						<?php
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<?php get_template_part('template-parts/content', 'reviews') ?>
							<?php
								}	
							wp_reset_postdata();
							?>
					  </div>
					</div>
				   </div>
			   </section>
			<?php	
			}
	 return ob_get_clean();
}



// end student reviews
// search by post
function modify_search_query($query) {
    if ($query->is_search() && !is_admin()) {
        $query->set('post_type', 'post'); // Search only posts, exclude pages
        $query->set('orderby', 'date'); // Order by date (newest first)
    }
}
add_action('pre_get_posts', 'modify_search_query');
