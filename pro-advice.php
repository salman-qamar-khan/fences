<?php /* Template Name: Pro advice */
get_header();
?>
<section class="pro-hero main-header-hero">
    <div class="pro-hero-img" style="background-image:url('<?php the_field('header_image', get_the_ID());?>');">
        <div class="pro-content">
            <div class="pro-contentHere">
                <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;"><?php the_title();?></h1>
                <p style="color:<?php the_field('sub_heading_color', get_the_ID());?>;"><?php the_field('header_sub_heading', get_the_ID());?></p>
            </div>
        </div>
    </div>
</section>
<section class="subscribe">
    <div class="container">
        <div class="subscribeContent">
          <div class="form-group">
			  <?php echo do_shortcode('[email-subscribers namefield="NO" desc="" group="Public"]'); ?>
<!--               <input id="textinput" name="textinput" type="text" placeholder="Your email address" class="form-control input-md"> -->
          </div>
<!--           <button class="btn btn-default quote">Subscribe to blog</button> -->
        </div>
    </div>
</section>
<section class="blog">
    <div class="container">
        <div class="blogHere">
          <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'order'   => 'ASC'
                  );
                // The Query
                $posts = new WP_Query( $args );
                if ( $posts->have_posts() ) {
                  // The Loop
                  while ( $posts->have_posts() ) {
                    $posts->the_post();
                    $category = get_the_category();?>
			<a href="<?php the_permalink();?>">
            <div class="singleBlog">
                <div class="heading">
                    <h3><?php the_title();?></h3>
                    <p><?php the_time( 'j F, Y' ); ?></p>
                </div>
                <div class="singleBlogImg">
					<?php the_post_thumbnail();?>
                </div>
                <div class="singleBlogDescription">
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="highlight">Read more</a>
                </div>
                <div class="blogButton">
                  <?php foreach ($category as $singleCat) {
                     echo '<button class="btn btn-default cube mr-3">'.$singleCat->name.'</button>';
                  } ?>
                </div>
            </div>
				</a>
          <?php }

          /* Restore original Post Data
           * NB: Because we are using new WP_Query we aren't stomping on the
           * original $wp_query and it does not need to be reset with
           * wp_reset_query(). We just need to set the post data back up with
           * wp_reset_postdata().
           */
            wp_reset_postdata();
          }
			$count_posts = wp_count_posts( 'post' )->publish;
			if($count_posts >= 3){
      echo '<div class="morePosts">
              <button class="btn btn-default fence_loadmore">More posts</button>
            </div>'; // you can use <a> as well
			}
      ?>
        </div>
    </div>
</section>
<?php get_footer();?>
