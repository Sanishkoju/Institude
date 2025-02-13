<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shovasa_Computer_Technology
 */
$page_id = get_the_ID();
$page_title = get_the_title($page_id);
$post_url = get_permalink();
$categories = get_the_category();
$category_id = $categories[0]->term_id;

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="herobanner" style="background-image:url('http://localhost/shovasa/wp-content/uploads/2025/01/himalaya-3899187_1280.jpg')">
		<div class="container">
			<div class="wrapper">		
				<div class="left">
					<div class="bradcrumbs">
						<a href="<?php echo get_site_url() ?>">Home</a> > <span><?php echo $page_title ?></span>

					</div>
						<h1>
							<?php echo $page_title ?>
						</h1>
					<div class="socials">
						<?php if(get_field('duration')) :?>
							<div class="duration">
								  <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="18px" height="15px"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg></span>
                                 <span> <?php echo get_field('duration') . " Months" ?> </span>
							</div>
						<?php endif ?>
						<div class="share">
							<div class="flex" style="display:flex; gap:4px">
							<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18px" height="15px"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M307 34.8c-11.5 5.1-19 16.6-19 29.2l0 64-112 0C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96l96 0 0 64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg></span><span> Share</span>				
							</div>

							<ul>
	
								<li>
									<a href="https://www.facebook.com/sharer.php?u=<?php echo $post_url ?>" title="Facebook" target="_blank">
										<svg id="icon-facebook" viewBox="0 0 112.196 112.196"><circle cx="56.098" cy="56.098" r="56.098" fill="#3b5998"></circle><path fill="#fff" d="M70.201 58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34c0-5.964 2.833-15.303 15.301-15.303l11.234.047v12.51h-8.151c-1.337.0-3.217.668-3.217 3.513v7.585h11.334l-1.325 12.876z"></path></svg>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/intent/tweet?url=<?php echo $post_url ?>&title=<?php echo $page_title ?>" title="Twitter" target="_blank">
										<svg id="icon-twitter" viewBox="0 0 112.197 112.197"><circle cx="56.099" cy="56.098" r="56.098" fill="#1da1f2"></circle><path fill="#fff" d="M90.461 40.316a26.753 26.753.0 0 1-7.702 2.109 13.445 13.445.0 0 0 5.897-7.417 26.843 26.843.0 0 1-8.515 3.253 13.396 13.396.0 0 0-9.79-4.233c-7.404.0-13.409 6.005-13.409 13.409.0 1.051.119 2.074.349 3.056-11.144-.559-21.025-5.897-27.639-14.012a13.351 13.351.0 0 0-1.816 6.742c0 4.651 2.369 8.757 5.965 11.161a13.314 13.314.0 0 1-6.073-1.679l-.001.17c0 6.497 4.624 11.916 10.757 13.147a13.362 13.362.0 0 1-3.532.471c-.866.0-1.705-.083-2.523-.239 1.706 5.326 6.657 9.203 12.526 9.312a26.904 26.904.0 0 1-16.655 5.74c-1.08.0-2.15-.063-3.197-.188a37.929 37.929.0 0 0 20.553 6.025c24.664.0 38.152-20.432 38.152-38.153.0-.581-.013-1.16-.039-1.734a27.192 27.192.0 0 0 6.692-6.94z"></path></svg>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url ?>&title=<?php echo $page_title ?>" title="Linkedin" target="_blank">
										<svg id="icon-linkedin" viewBox="0 0 112.196 112.196"><circle cx="56.098" cy="56.097" r="56.098" fill="#0077b5"></circle><path fill="#fff" d="M89.616 60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118-3.705.0-5.906 2.491-6.878 4.903-.353.862-.444 2.059-.444 3.268v22.524h-13.41s.18-36.546.0-40.329h13.411v5.715c-.027.045-.065.089-.089.132h.089v-.132c1.782-2.742 4.96-6.662 12.085-6.662 8.822.0 15.436 5.764 15.436 18.149zm-54.96-36.642c-4.587.0-7.588 3.011-7.588 6.967.0 3.872 2.914 6.97 7.412 6.97h.087c4.677.0 7.585-3.098 7.585-6.97-.089-3.956-2.908-6.967-7.496-6.967zm-6.791 59.77H41.27v-40.33H27.865v40.33z"></path></svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="date" >
						Last Updated: <?php the_time('j F Y'); ?>
					</div>
				</div>
				<div class="right">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_field( 'post_name', get_post() ); ?>"/>

				</div>
			</div>
		</div>
	</div>
	<div class="main_description">
		<div class="container">
			<div class="main_wrapper">
				<div class="left_desc">
					<?php the_content(); ?>
				</div>
				<div class="right_enquiry">
					<?php echo do_shortcode('[contact-form-7 id="7aecced" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
		<?php
	         $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
            'posts_per_page' => 4,
	        'post__not_in' => array($page_id),
	
			);
		        // If a category ID is provided, add a tax query
        if (!empty($category_id)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'term_id',
                    'terms'    => $category_id,		
                ),
            );
        }

			$the_query = new WP_Query( $args );
	        $total_posts = $the_query->found_posts;
			if ( $the_query->have_posts() ) {
				?>
	<div class="related_courses">
		<div class="container">
			<h2>
				Related Courses
			</h2>
					<div class="courses_container">
						<div class="container">
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
					   </div>
					</div>

		</div>
	</div>
				<?php	
			}
		?>

</article><!-- #post-<?php the_ID(); ?> -->
