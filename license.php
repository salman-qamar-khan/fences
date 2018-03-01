<?php /* Template Name: License */
get_header();
?>
<section class="licenseHero main-header-hero">
    <div class="licenseImg" style="background-image:url(<?php the_field('header_image', get_the_ID());?>);">
        <div class="licenseHeroContent">
            <div class="container">
                <div class="licenseHeroContentHere">
                    <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;"><?php the_title();?></h1>
                    <p style="color:<?php the_field('sub_heading_color', get_the_ID());?>;"><?php the_field('header_sub_heading', get_the_ID());?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="licenseContent">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 licenseContentHere">
                <div class="row">
                    <div class="col-sm-6 address">
                      <?php
                      // check if the repeater field has rows of data
                      if( have_rows('licenses_list') ):
                       	// loop through the rows of data
                          while ( have_rows('licenses_list') ) : the_row();
                          // display a sub field value ?>
                        <div class="singleAddress">

                            <p><b>State:</b> <?php the_sub_field('license_state',get_the_ID()); ?></p>
                            <p><b>Trade:</b> <?php the_sub_field('license_trade',get_the_ID()); ?></p>
                            <p><b>License #:</b> <?php the_sub_field('license_number',get_the_ID()); ?></p>
                            <p><b>Expiration:</b> <?php the_sub_field('license_expiration',get_the_ID()); ?></p>
                            <p><?php the_sub_field('license_text',get_the_ID()); ?> </p>
							<p class="highlight"><a target="_blank" href="<?php the_sub_field('status_link',get_the_ID()); ?>">Check status</a></p>
                        </div>
                        <?php
                          endwhile;
                          else :
                            // no rows found
                          endif;
                        ?>
                    </div>
                    <div class="col-sm-6 img">
                        <img src="<?php the_field('license_image', get_the_ID());?>"
                        srcset="<?php the_field('license_image', get_the_ID());?>,
                                <?php the_field('license_image', get_the_ID());?>"
                        class="afa_license">
						<img src="<?php the_field('license_second_image', get_the_ID());?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
