<?php get_header();?>
<section class="warrantyHero main-header-hero">
      <div class="warrantyImg">
          <?php if (!empty(get_field('header_image', get_the_ID())) ) { ?>
                   <img src="<?php the_field('header_image', get_the_ID());?>">
                  <?php } else {
                    echo '<img src="http://via.placeholder.com/1800x700/f7f7f7/f7f7f7">';
                  } ?>
          <div class="warrantyContent">
              <div class="container">
                  <div class="warrantyContentHere">
                      <h1><?php the_title();?></h1>
                      <h4><?php the_field('header_sub_heading', get_the_ID());?></h4>
                  </div>
              </div>
          </div>
      </div>
</section>
<?php  if ( have_posts() ) {
       while ( have_posts() ) {
       the_post(); ?>
<section class="warrantyDescription">
    <div class="container">
        <div class="descriptionHere">
            <?php the_content();?>
        </div>
    </div>
</section>
<?php } // end while
} // end if
 get_footer();?>
