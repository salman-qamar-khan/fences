<?php /* Template Name: our contractors */
get_header();
?>
<section class="fenceInstall main-header-hero">
    <div class="container">
        <div class="heading">
            <h1><?php the_field('page_title', get_the_ID());?></h1>
            <p><?php the_field('page_content', get_the_ID());?></p>
        </div>
        <div class="row">
            <div class="contractors col-sm-12">
                <div class="row">
                  <?php $args = array(
                            'post_type' => 'our_contractors',
                            'posts_per_page' => 3,
                            'order'   => 'ASC'
                          );
                        // The Query
                        $contractor = new WP_Query( $args );
                        if ( $contractor->have_posts() ) {
                        	// The Loop
                        	while ( $contractor->have_posts() ) {
                        		$contractor->the_post(); ?>
                    <div class="col-sm-4">
                        <div class="singleContractor">
                            <div class="contractorImg">
                            </div>
                            <div class="description">
                                <h4><?php the_title();?></h4>
                                <p><?php the_content();?></p>
                            </div>
                        </div>
                    </div>
                  <?php }

                  /* Restore original Post Data
                   * NB: Because we are using new WP_Query we aren't stomping on the
                   * original $wp_query and it does not need to be reset with
                   * wp_reset_query(). We just need to set the post data back up with
                   * wp_reset_postdata().
                   */
                    wp_reset_postdata();
                  }
              ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="interested">
    <div class="container">
        <div class="interestedHere">
            <div class="interestedContent">
                <h3><?php the_field('cta_heading', get_the_ID());?></h3>
                <p><?php the_field('cta_sub_heading', get_the_ID());?></p>
                <a href="<?php the_field('cta_button_link', get_the_ID());?>" class="btn btn-default">Apply now</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
