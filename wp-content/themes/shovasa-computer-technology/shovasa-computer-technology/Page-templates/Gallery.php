<?php
/*Template Name: Gallery */
get_header();
$page_id = get_the_ID();
$page_title = get_the_title($page_id);
$contact_page_id = 937; 
?>
		<div class="herobanner" style="background-image:url('<?php echo get_field("herobanner_image",$contact_page_id); ?> ')">
			<div class="container">
			   <div class="bradcrumbs">
					<a href="<?php echo get_site_url() ?>">Home</a> > <span><?php echo $page_title ?></span>
				</div>
				<h1>
					<?php echo $page_title ?>
				</h1>
				
		     </div>
		</div>
		<div class="gallery_sec">
			<div class="container">
			<?php
			$args = array(
				'post_type' => 'gallery',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);
			$the_query = new WP_Query( $args );
		    $totals = $the_query->found_posts;
			
			if ( $the_query->have_posts() ) 
			       {
?>
					<div class="gallery_cat_list" totals= <?php echo $totals ?> >
                        <?php 
                        $current_cats = get_terms('gallery_cat');
                        if ( $current_cats && ! is_wp_error( $current_cats ) ) { 
                            echo '<ul> <li class="cat_list active" data-totals=' .$totals.'><span><svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="#504F4E" viewBox="0 0 576 512"><path d="M151.6 42.4C145.5 35.8 137 32 128 32s-17.5 3.8-23.6 10.4l-88 96c-11.9 13-11.1 33.3 2 45.2s33.3 11.1 45.2-2L96 146.3 96 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-301.7 32.4 35.4c11.9 13 32.2 13.9 45.2 2s13.9-32.2 2-45.2l-88-96zM320 480l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-32 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128l160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-160 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128l224 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32z"/></svg></span> All</li>';
                            foreach ($current_cats as $cat) {
                                $cat_title = $cat->name;
                                $cat_id = $cat->term_id;
                                $cat_link = get_term_link( $cat );
                                $cat_count = $cat->count;
								?>
						<li data-totals="<?php echo $totals?>" class="cat_list" data-id="<?php echo $cat_id ?> " ><?php echo $cat_title ?></li>
                               
						<?php
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>
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
			           }
                      ?>
				</div>
				<div class="spinner">
					<span class="loader"></span>
				</div>
			</div>

<?php
get_footer();