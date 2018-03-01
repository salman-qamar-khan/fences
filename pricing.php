<?php /* Template Name: pricing */
get_header();
?>
<section class="PricingHero main-header-hero">
    <div class="pricingHeroImg" style="background-image:url(<?php the_field('header_image', get_the_ID());?>);">
        <div class="container">
            <div class="pricingHeroContent">
                <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;"><?php the_title();?></h1>
                <h4 style="color:<?php the_field('sub_heading_color', get_the_ID());?>;"><?php the_field('header_sub_heading', get_the_ID());?></h4>
            </div>
        </div>
    </div>
</section>
<section class="pricingDescription">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 descriptionHere">
                <div class="row">
                    <div class="col-sm-5 descriptionBox">
                        <div class="descriptionContent">
                          <?php
                          // check if the repeater field has rows of data
                          if( have_rows('services_list') ):
                            // loop through the rows of data
                              while ( have_rows('services_list') ) : the_row();
                              // display a sub field value ?>
                            <div class="singlePriDescription">
                                <div class="priIcon">
                                    <img src="<?php echo get_template_directory_uri();?>/img/done.png"
                                    srcset="<?php echo get_template_directory_uri();?>/img/done@2x.png 2x,
                                            <?php echo get_template_directory_uri();?>/img/done@3x.png 3x"
                                    class="done">
                                </div>
                                <div class="priDesc">
                                    <h4><?php the_sub_field('service_heading', get_the_ID());?></h4>
                                    <p><?php the_sub_field('service_text', get_the_ID());?></p>
                                </div>
                            </div>
                            <?php
                            endwhile;
                              else :
                                // no rows found
                              endif;
                            ?>
                            <div class="bottomImgs">
                              <?php
                              // check if the repeater field has rows of data
                              if( have_rows('icon_list') ):
                                // loop through the rows of data
                                  while ( have_rows('icon_list') ) : the_row();
                                  // display a sub field value ?>
                                <div class="singleImg col-sm-3">
                                    <img src="<?php the_sub_field('icon_image', get_the_ID());?>"
                                    srcset="<?php the_sub_field('icon_image', get_the_ID());?>,
                                            <?php the_sub_field('icon_image', get_the_ID());?>"
                                    class="img">
                                </div>
                                <?php
                                endwhile;
                                  else :
                                    // no rows found
                                  endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 descriptionImg">
                        <?php the_post_thumbnail();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
