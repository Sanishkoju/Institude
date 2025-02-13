<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shovasa_Computer_Technology
 */
$contact_page_id = 937; 
?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer_wrapper">
					<div class="top_footer_info">
						<h2 class="footer_title">
							<span>Contact info</span>
						</h2>
						<?php if(get_field("footer_description",$contact_page_id)): ?>
						<p class="description">
							<?php echo get_field("footer_description",$contact_page_id); ?>
						</p>
						<?php endif; ?>
						<?php if(get_field("location_url",$contact_page_id ) || get_field("location_text",$contact_page_id )) : ?>
							<div class="social_info">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="18px"><path fill="#ffffff" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
								<a href='<?php echo get_field("location_url",$contact_page_id ); ?>'><?php echo 		get_field("location_text",$contact_page_id ); ?></a>
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
				<div class="quick_menu">
					<h2 class="footer_title">
						<span>Quick Links</span>
					</h2>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
				<div class="secondary_menu">
					<h2 class="footer_title">
						<span>Popular Links</span>
					</h2>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
				<div class="footer_courses">
					<h2 class="footer_title">
						<span>Latest courses</span>
					</h2>
					<?php
				   $args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 3,
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

					}
					?>
				</div>
			</div>
			<?php if(get_field("copyright_text",$contact_page_id)): ?>
			<div class="copyright">
				<p>
					<?php echo get_field("copyright_text",$contact_page_id); ?>
			</div
			<?php endif; ?>

		</div>


	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	
jQuery(document).ready(function () {
	
	jQuery('.testimonial-slider').slick({
            autoplay: false,
            autoplaySpeed: 1000,
            speed: 600,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
			prevArrow:
                '<button type="button" class="slick-prev"><svg width="24px" height="24px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#000000" /></svg></button>',
            nextArrow:
                '<button type="button" class="slick-next"><svg width="24px" height="24px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000" /></svg></button>',
     responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
        slidesToScroll:1 ,
      }
    },

    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
        });

	console.log("Window width detected by JS:", window.innerWidth);

	var title = jQuery("article").data('title');
	var element= document.querySelector(".show_title");

	if (element) {
    element.value = title;
}	
	
        

	
	
    jQuery('.gallery_pop_sec, .cross').click(function () {
        jQuery('.gallery_pop_sec').removeClass('active');
    });
	jQuery('.gallery_pop_container, .slick-arrow').click(function (e) {
		e.stopPropagation();
	});
    // Initialize Slick Slider
    function slick() {
        // Destroy if already initialized to avoid duplicate instances
        if (jQuery('.gallery_pop_wrapper').hasClass('slick-initialized')) {
            jQuery('.gallery_pop_wrapper').slick('unslick');
        }

        // Initialize Slick
        let showcaseCarousel = jQuery('.gallery_pop_wrapper').slick({
            dots: false,
            arrows: true,
            infinite: false,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow:
                '<button type="button" class="slick-prev"><svg width="24px" height="24px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#000000" /></svg></button>',
            nextArrow:
                '<button type="button" class="slick-next"><svg width="24px" height="24px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000" /></svg></button>',
        });

        // Set slick options dynamically
        showcaseCarousel.slick('slickSetOption', {
            speed: 500, 
        }, true);
		
    showcaseCarousel.on('afterChange', function (event, slick, currentSlide) {
        // Get the currently visible slide element
        let currentSlideElement = jQuery('.gallery_pop_wrapper .slick-slide[data-slick-index="' + currentSlide + '"]');
        let slickIndex = currentSlideElement.data('slick-index');
        const num = slickIndex  + 1;
		jQuery(".index").html(num);
    });
		    // Open gallery popup
    jQuery(document).on('click', '.gallery_wrapper .gallery_box,.cat_list', function () {
        const index = jQuery(this).index(); 
		const num = index + 1;
		jQuery(".index").html(num);
        jQuery('.gallery_pop_sec').addClass('active');
        jQuery('.gallery_pop_wrapper').slick('slickGoTo', index, false);
		jQuery('.gallery_pop_wrapper').slick('setPosition');
		jQuery('.gallery_pop_wrapper').find('.slick-track').css('transition', 'none'); // Disable animation temporarily

    });
    }
    var loader = jQuery('.spinner');
    // AJAX call for category filter
    jQuery('.cat_list').click(function () {
        const filter = jQuery(this);
		filter.removeClass('active');
        const termId = filter.data('id');
		const totals = filter.data('totals');
		jQuery('.gallery_wrapper').addClass('isclose');
        loader.show();
        jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>', 
            type: 'POST',
            data: { action: 'data_fetch', id: termId, totals:totals },
            success: function (data) {
				loader.hide();
				jQuery('.gallery_wrapper').removeClass('isclose');
				jQuery('.cat_list').removeClass('active');
				filter.addClass('active');	
                if (jQuery.trim(data)) {
                    const galBox = jQuery(data).find('.gallery_wrapper');
                    const galPop = jQuery(data).find('.gallery_pop_wrapper');

                    if (galBox.length) {
                        jQuery('.gallery_container').html(galBox);
                    }

                    if (galPop.length) {
                        jQuery('.gallery_pop_container').html(galPop);
                    }

                    // Reinitialize Slick for dynamically loaded content
                    slick();


                }
            },
            error: function () {
                console.error('An error occurred while fetching the gallery data.');
            },
        });

        return false; // Prevent default action
    });

    // Initialize Slick on page load
    slick();
	
	
$('.addImage').on('change', function(evt) {
  var selectedImage = evt.currentTarget.files[0];
  var imageWrapper = document.querySelector('.image-wrapper');
  var theImage = document.createElement('img');
  imageWrapper.innerHTML = '';

  if (!selectedImage) {
    console.log('No file selected');
    return;
  }

  // Check FileReader support
  if (!window.FileReader) {
    console.log('FileReader is not supported in this browser.');
    return;
  }

  // Read and display the image
  var reader = new FileReader();
  reader.onload = function(e) {
    theImage.id = 'new-selected-image';
    theImage.src = e.target.result;
    imageWrapper.appendChild(theImage);
  };
  reader.readAsDataURL(selectedImage);
});
				document.querySelector('.search_icon').addEventListener("click",function(){
				document.querySelector('.form').classList.add('active');	
				});
				document.querySelector('.enquiry_btn').addEventListener("click",function(){
				document.querySelector('.right_enquiry_form').classList.add('active');	
				});
				document.querySelectorAll('.header_cross').forEach(item => item.addEventListener("click",function(){
				document.querySelector('.form').classList.remove('active');	
				document.querySelector('.nav_menu').classList.remove('active');
			    document.querySelector('.right_enquiry_form').classList.remove('active');
				}));
		
				document.querySelector('.hamburger').addEventListener("click",function(){
				document.querySelector('.nav_menu').classList.add('active');	
				});



});

</script>
</body>
</html>
