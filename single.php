<?php get_header();
  $category = get_the_category();?>
  <?php  if ( have_posts() ) {
	       while ( have_posts() ) {
		     the_post(); ?>
<section class="singleAdvice main-header-hero-2">
    <div class="container">
        <div class="singleAdviceContent">
            <div class="col-sm-12">
                <div class="heading">
                    <p><a href="<?php get_home_url();?>/?page_id=71"><span class="highlight">Pro advice</span></a> / <?php the_title();?></p>
                    <h1><?php the_title();?></h1>
                    <span><?php the_time( 'j F, Y' ); ?></span>
                </div>
                <div class="singleAdviceImg">
				<?php the_post_thumbnail();?>
				</div>
                <div class="singleAdviceDes">
                    <?php the_content();?>
                </div>
            </div>
            <div class="bottomBtns col-sm-12">
                <div class="row">
                    <div class="leftBtns col-sm-6">
                      <?php foreach ($category as $singleCat) {
                         echo '<button class="btn btn-default cube mr-3">'.$singleCat->name.'</button>';
                      } ?>
                    </div>
                    <div class="col-sm-6 rightBtns">
                        <button class="btn btn-default"><i class="fa fa-facebook"></i> Facebook</button>
                        <button class="btn btn-default"><i class="fa fa-twitter"></i> Twitter</button>
                        <button class="btn btn-default"><i class="fa fa-google-plus"></i> Google</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fenceService">
    <div class="mainImg" style="background-image:url(<?php echo get_template_directory_uri();?>/img/img2.png);">
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
<?php } // end while
} // end if
 get_footer();?>
