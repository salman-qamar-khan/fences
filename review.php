<?php /* Template Name: Review */
get_header();
?>
<section class="reviewsHero main-header-hero">
    <div class="reviewImg" style="background-image:url(<?php the_field('header_image', get_the_ID());?>);">
        <div class="reviewContent">
            <div class="container">
                <div class="reviewContentHere">
                    <h1><?php the_title();?></h1>
                    <h4><?php the_field('header_sub_heading', get_the_ID());?></h4>
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
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
                  'post_type' => 'reviews_fence',
                  'posts_per_page' => 10,
                  'order'   => 'ASC',
				  'paged' => $paged,
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
	    }    
		?>
	   <div class="paginationHere col-sm-12">
            <div class="customPagination">
				<?php 
		   $total_pages = $qa->max_num_pages;
	if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('<div class="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>'),
            'next_text'    => __(' <div class="next"> <i class="fa fa-arrow-right" aria-hidden="true"></i></div>'),
        ));
		$count_posts = wp_count_posts('reviews_fence');
		if($current_page == 1){
			$allPosts = '1-10';
		}
		if($current_page == 2) {
			$allPosts = '10-20';
		}
		if($current_page == 3) {
			$allPosts = '20-30';
		}
		if($current_page == 4) {
			$allPosts = '30-40';
		}
		if($current_page == 5) {
			$allPosts = '40-50';
		}
		if($current_page == 6) {
			$allPosts = '50-60';
		}
		   ?>
                <div class="description">
                    <p><?php echo $allPosts;?> of <?php echo $count_posts->publish;?> Reviews</p>
                </div>
            </div>
        </div>
           <?php wp_reset_postdata();
         }
      ?>
    </div>
</section>
<section class="fenceService" style="background-image:url(<?php echo get_template_directory_uri();?>/img/img2.png);">
    <div class="mainImg">
        <div class="fenceContent">
            <div class="container">
                <div class="fenceContentHere">
                    <h3>Fence replacement service</h3>
                    <p>Get your fence replaced by the experts</p>
                    <div class="form-group" data-address-input>
                        <input id="textinput" name="textinput" type="text" placeholder="Enter your street address" class="form-control input-md">
                        <button class="btn btn-default quote">Get a quote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
