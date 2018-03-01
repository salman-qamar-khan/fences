<?php get_header();
$pageID = get_the_ID();?>
<section class="hero">
    <div class="heroMain">
        <img src="<?php the_field('quote_section_image', $pageID);?>"
        srcset="<?php the_field('quote_section_image', $pageID);?>, <?php the_field('quote_section_image', $pageID);?>" class="heroImg">
        <div class="heroContent">
            <div class="container">
                <div class="contentHere">
                    <h1><?php the_field('quote_section_heading', $pageID);?></h1>
                    <h3><?php the_field('quote_section_sub_heading', $pageID);?></h3>
                    <div class="form-group">
                        <input id="textinput" name="textinput" type="text" placeholder="Enter your street address" class="form-control input-md">
                        <button class="btn btn-default quote">Get a quote</button>
                    </div>
                    <div class="phone">
                        <p><?php the_field('quote_section_number', $pageID);?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="whyPeople">
    <div class="container">
        <div class="col-sm-5 peopleContent">
            <div class="whyContent">
                <h3><?php the_field('section_2_heading', $pageID);?></h3>
                <?php
                // check if the repeater field has rows of data
                if( have_rows('section_2_features') ):
                 	// loop through the rows of data
                    while ( have_rows('section_2_features') ) : the_row();
                    // display a sub field value ?>
                      <div class="singleContent">
                            <div class="checkmark"></div>
                            <p><?php the_sub_field('list_text', $pageID); ?></p>
                        </div>
                <?php
                  endwhile;
                  else :
                    // no rows found
                  endif;
                ?>
                <?php
                // check if the repeater field has rows of data
                if( have_rows('section_2_logos') ):
                 	// loop through the rows of data
                    while ( have_rows('section_2_logos') ) : the_row();
                    // display a sub field value ?>
                      <div class="singleIcon">
                          <img src="<?php the_sub_field('logo_image', $pageID); ?>"
                          srcset="<?php the_sub_field('logo_image', $pageID); ?>,
                                  <?php the_sub_field('logo_image', $pageID); ?>"
                          class="afa">
                      </div>
                <?php
                  endwhile;
                  else :
                    // no rows found
                  endif;
                ?>
            </div>
        </div>
        <div class="col-sm-7 whyImage">
            <img src="<?php the_field('section_2_right_image', $pageID);?>"
            srcset="<?php the_field('section_2_right_image', $pageID);?>,
                    <?php the_field('section_2_right_image', $pageID);?>"
            class="img">
        </div>
    </div>
</section>
<section class="trustedWood">
    <div class="container">
        <div class="mainHeading col-sm-12">
            <h3>Trusted wood fence installer</h3>
            <p>We offer three types of wood fences</p>
        </div>
        <?php
        $args = array(
                  'post_type' => 'wood_fences',
                  'posts_per_page' => 3,
                  'order'   => 'ASC'
                );
              // The Query
              $woodfence = new WP_Query( $args );
              if ( $woodfence->have_posts() ) {
              	// The Loop
              	while ( $woodfence->have_posts() ) {
              		$woodfence->the_post();
                  $terms = wp_get_post_terms( get_the_ID(), 'fences_types' );?>
                  <div class="col-sm-4">
                      <div class="singleBox">
                          <div class="singleBoxImg">
                              <?php the_post_thumbnail();?>
                              <div class="banner">
                                  <p><?php echo $terms[0]->name;?></p>
                              </div>
                          </div>
                          <h4>Basic dogeared fence</h4>
                          <p>Fence looks like the image above on one side, back side has just a frame.</p>
                          <p class="Fence-diagram">Fence diagram</p>
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
</section>
<section class="fenceInstallation">
    <div class="container">
        <div class="col-sm-6 fenceImg">
            <img src="<?php the_field('installation_image', $pageID);?>"
            srcset="<?php the_field('installation_image', $pageID);?>,
                    <?php the_field('installation_image', $pageID);?>"
            class="service_delivery">
        </div>
        <div class="col-sm-6 fenceContent">
            <h3><?php the_field('installation_heading', $pageID);?></h3>
            <?php
            // check if the repeater field has rows of data
            if( have_rows('installation_features') ):
              // loop through the rows of data
              $count = 1;
                while ( have_rows('installation_features') ) : the_row();
                // display a sub field value ?>
                    <div class="singleContent">
                        <div class="head">
                            <div class="number">
                                <span><?php echo $count;?></span>
                            </div>
                            <h4><?php the_sub_field('installation_features_heading', $pageID);?></h4>
                        </div>
                        <div class="singleDes">
                            <div class="checkmark"></div>
                            <p><?php the_sub_field('installation_list_item_1', $pageID);?></p>
                        </div>
                        <div class="singleDes">
                            <div class="checkmark"></div>
                            <p><?php the_sub_field('installation_list_item_2', $pageID);?></p>
                        </div>
                    </div>
            <?php
            $count++;
              endwhile;
              else :
                // no rows found
              endif;
            ?>
        </div>
    </div>
</section>
<section class="banner">
    <div class="container">
        <div class="col-sm-3">
            <div class="singleBanner">
                <div class="singleBannerIcon">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                </div>
                <h4>Trusted provider</h4>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="singleBanner">
                <div class="singleBannerIcon">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                </div>
                <h4>High tech, easy to use</h4>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="singleBanner">
                <div class="singleBannerIcon">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                </div>
                <h4>Reliable and transparent</h4>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="singleBanner">
                <div class="singleBannerIcon">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                </div>
                <h4>Excellent communication</h4>
            </div>
        </div>
    </div>
</section>
<section class="QA">
    <div class="container">
        <div class="heading col-sm-12">
            <h3>Questions & Answers</h3>
        </div>
        <?php
        $args = array(
                  'post_type' => 'question_and_answers',
                  'posts_per_page' => 4,
                  'order'   => 'ASC'
                );
              // The Query
              $qa = new WP_Query( $args );
              if ( $qa->have_posts() ) {
              	// The Loop
                $ct = 0;
              	while ( $qa->have_posts() ) {
              		$qa->the_post(); ?>
        <div class="col-sm-6 eachSide">
            <div class="singleQuestion borderBottom">
                <h4><?php the_title();?></h4>
                <p><?php the_content();?></p>
            </div>
        </div>
        <?php if($ct == 1){
         echo '<div class="clear"></div>';
        }
       $ct++; }

      /* Restore original Post Data
       * NB: Because we are using new WP_Query we aren't stomping on the
       * original $wp_query and it does not need to be reset with
       * wp_reset_query(). We just need to set the post data back up with
       * wp_reset_postdata().
       */
        wp_reset_postdata();
      }
  ?>
    <div class="read-m">
      <p class="Read-more text-right">Read more →</p>
    </div>
    </div>
</section>
<section class="fenceService">
    <div class="mainImg">
        <img src="<?php echo get_template_directory_uri();?>/img/img2.png"
        srcset="<?php echo get_template_directory_uri();?>/img/img2@2x.png 2x,
                <?php echo get_template_directory_uri();?>/img/img2@3x.png 3x"
        class="img">
        <div class="fenceContent">
            <div class="container">
                <div class="fenceContentHere">
                    <h3>Fence replacement service</h3>
                    <p>Get your fence replaced by the experts</p>
                    <div class="form-group">
                        <input id="textinput" name="textinput" type="text" placeholder="Enter your street address" class="form-control input-md">
                        <button class="btn btn-default quote">Get a quote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <div class="heading col-sm-12">
            <div class="headImg">
                <img src="<?php echo get_template_directory_uri();?>/img/heart.png"
                srcset="<?php echo get_template_directory_uri();?>/img/heart@2x.png 2x,
                        <?php echo get_template_directory_uri();?>/img/heart@3x.png 3x"
                class="heart">
            </div>
            <h3>Our customers say the loveliest things</h3>
        </div>
        <div class="descriptions">
            <div class="singleDes col-sm-4">
                <h3>75</h3>
                <p>Completed projects since March 2016</p>
            </div>
            <div class="singleDes rating col-sm-4">
                <h3>4.5</h3>
                <span>out of 5</span>
                <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half" aria-hidden="true"></i>
                </div>
                <p>45 reviews</p>
            </div>
            <div class="singleDes col-sm-4">
                <h3>90%</h3>
                <p>Recommend ezhome fence installation service</p>
            </div>
        </div>
        <?php
        $args = array(
                  'post_type' => 'reviews_fence',
                  'posts_per_page' => 6,
                  'order'   => 'ASC'
                );
              // The Query
              $qa = new WP_Query( $args );
              if ( $qa->have_posts() ) {
              	// The Loop
              	while ( $qa->have_posts() ) {
              		$qa->the_post(); ?>
        <div class="col-sm-12 singleReview">
            <div class="ratings col-sm-2">
                <div class="stars">
                  <?php $ratings = get_field('rating', get_the_ID());
                  if($ratings == 5){
                    echo '<i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>';
                  }
                  elseif($ratings == 4){
                    echo '<i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>';
                  }
                  elseif ($ratings == 3) {
                    echo '<i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>';
                  }
                  elseif ($ratings == 2) {
                    echo '<i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>';
                  }
                  elseif ($ratings == 1) {
                    echo '<i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>';
                  }?>
                </div>
                <h4><?php the_title();?></h4>
            </div>
            <div class="description col-sm-8">
                <p><?php the_content();?></p>
                <div class="note">
                    <img src="<?php echo get_template_directory_uri();?>/img/done.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/done@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/done@3x.png 3x"
                    class="done">
                    <p>Yes, I recommend this service</p>
                </div>
            </div>
            <div class="col-sm-2 name">
                <p><?php the_field('city_state', get_the_ID());?></p>
                <p><?php the_field('completion_date', get_the_ID());?></p>
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
        <div class="more col-sm-12">
            <h4>More reviews →</h4>
        </div>
    </div>
</section>
<?php get_footer(); ?>
