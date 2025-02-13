<?php
$totals = isset($args['totals']) ? $args['totals'] : array();
?>
<div class="gallery_pop_detail">
					<?php if (get_the_post_thumbnail_url()){ ?>
					<div class="gallery_box">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_field( 'post_name', get_post() ); ?>"/>
					</div>
					<?php } ?>
					<div class="meta">
						<div class="totals">
							<span class="index"></span><span> of <?php echo $totals ?></span>
						</div>
						<h1>
							<?php the_title(); ?>
						</h1>

					</div>

</div>

