<?php
/*Template Name: Contact */
get_header();
$page_id = get_the_ID();
$page_title = get_the_title($page_id);

?>

<section class="contact_sec">
        <div class="container">
            <div class="row">
                    <div class="contact-left">
                        <h4 class="sub-title">Have Questions?</h4>
						<?php if (get_field("contact_title")): ?>
                            <h2><?php echo get_field("contact_title"); ?></h2>
						<?php endif;?>
						<?php if (get_field("contact_description")): ?>
							<p>
								<?php echo get_field("contact_description"); ?>
							</p>
						<?php endif;?>
                        <ul>
                            <?php if(get_field("phone_numbers",$page_id )) : ?>
                            <li class="wow fadeInUp">
                            <div class="social_info">
								<div class="circle">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="18px"><path fill="#ffffff" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path></svg>
								</div>
								<div class="social_detail">
									<h5 class="title">Hotline</h5>
									<a href='tel:<?php echo get_field("phone_numbers",$page_id ); ?>'><?php echo get_field("phone_numbers",$page_id ); ?></a>
								</div>
								
							</div>
                            </li>
						<?php endif; ?>
							<?php if(get_field("email_address",$page_id )) : ?>
                            <li class="wow fadeInUp">
                               <div class="social_info">
								   <div class="circle">
									  	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="18px"><path fill="#ffffff" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path></svg> 
								   </div>	
								<div class="social_detail">
									<h5 class="title">Our email</h5>
									<a href='mailto:<?php echo get_field("email_address",$page_id );?>'><?php echo get_field("email_address",$page_id);?></a>
								</div>
							</div>
                            </li>
						<?php endif; ?>
						<?php if(get_field("location_url",$page_id) || get_field("location_text",$page_id)) : ?>
						     <li class="wow fadeInUp">
                                <div class="social_info">
									<div class="circle">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="18px"><path fill="#ffffff" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path></svg>
									</div>
									<div class="social_detail">
									<h5 class="title">Our Locationl</h5>
								       <a href='<?php echo get_field("location_url",$page_id); ?>'><?php echo get_field("location_text",$page_id); ?></a>
									</div>
							</div>
						</li>
						<?php endif; ?>
                        </ul>
                    </div>

                    <div class="contact-right">
                        <h2 class="heading">Send us a Massage</h2>
                           <?php echo do_shortcode(get_field("contact_form")) ?>
                    </div>

            </div>
        </div>
    </section>
<?php if(get_field("map")): ?>
<div class="maps-area bg-gray overflow-hidden">
        <div class="google-maps">
           <?php echo get_field("map"); ?>
        </div>
    </div>
<?php endif; ?>

<?php
get_footer();