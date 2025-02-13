						<div class="testimonial-slide">
						  <div class="testimonial_box">
							<div class="testimonial_box-inner">
							  <div class="testimonial_box-top">
								<div class="testimonial_box-icon">
								  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"  width="30px"><path d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
								</div>
								<div class="testimonial_box-text">
								  <?php echo the_content() ?>
								</div>
								<div class="testimonial_box-shape"></div>
							  </div>
							  <div class="testimonial_box-bottom">
								<div class="testimonial_box-profile">
									<?php if (get_the_post_thumbnail_url()){ ?>
										  <div class="testimonial_box-img">
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_field( 'post_name', get_post() ); ?>"/>
										  </div>
									<?php } ?>
								  <div class="testimonial_box-info">
									   <div class="testimonial_box-name">
										 <h4><?php the_title(); ?></h4>
									  </div>
									  <?php if(get_field("position")): ?>
										  <div class="testimonial_box-job">
											<p><?php echo get_field("position"); ?> </p>
										  </div>
									  <?php endif;?> 
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>