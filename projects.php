<?php /* Template Name: Projects */
get_header();
?>
<section class="completeProjects main-header-hero">
    <div class="container">
        <div class="row">
            <div class="heading col-sm-12">
                <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;"><?php the_title();?></h1>
            </div>

            <div class="projectsHere col-sm-12">
              <?php $args = array(
                        'post_type' => 'completed_projects',
                        'posts_per_page' => 3,
                        'order'   => 'ASC'
                      );
                    // The Query
                    $projects = new WP_Query( $args );
                    if ( $projects->have_posts() ) {
                      // The Loop
                      while ( $projects->have_posts() ) {
                        $projects->the_post(); ?>
                <div class="projectRow row">
                    <div class="head col-sm-12">
						<div class="col-sm-3">
							<p>Project Date: <span><?php the_field('project_date', get_the_ID());?></span></p>
							<p>Project Cost: <span><?php the_field('project_cost', get_the_ID());?></span></p>
						</div>
						<div class="col-sm-3">
							<p>City: <span><?php the_field('project_city', get_the_ID());?></span></p>
							<p>Zip Code: <span><?php the_field('project_zip_code', get_the_ID());?></span></p>
						</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="singleProjectImg">
                          <img src="<?php the_field('before_image', get_the_ID());?>">
                            <div class="banner">
                                <p>Before</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="singleProjectImg">
                          <img src="<?php the_field('after_image', get_the_ID());?>">
                            <div class="banner">
                                <p>After</p>
                            </div>
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
              $count_posts = wp_count_posts( 'completed_projects' )->publish;
			if($count_posts >= 4){?>
              <div class="showButton col-sm-12">
                  <button class="btn btn-default load-projects">
                      Show more
                  </button>
				  <?php }?>
              </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
