<?php /* Template Name: help */
get_header();
?>
<section class="helpHero main-header-hero">
    <div class="helpImg" style="background-image:url(<?php the_field('header_image', get_the_ID());?>);">
        <div class="helpText">
            <div class="helpContentHere">
                <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;"><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section>
<section class="general">
    <div class="container">
        <div class="generalContent">
			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						the_content();
					} // end while
				} // end if
			
			$terms = get_terms( array(
            'taxonomy' => 'qa_category',
            'hide_empty' => false,
          ) );
          foreach ($terms as $term) { ?>
            <div class="heading">
                <h3><?php echo $term->name;?></h3>
            </div>
             <?php
             $termSlug = $term->slug;
              $args = array(
                      'post_type' => 'question_and_answers',
                      'posts_per_page' => -1,
                      'order'   => 'ASC',
                      'tax_query' => array(
		                                  array(
			                                      'taxonomy' => 'qa_category',
			                                       'field'    => 'slug',
			                                       'terms'    => $termSlug,
		                                         ),
                                           ),
                      );
                  // The Query
                  $qa = new WP_Query( $args );
                  if ( $qa->have_posts() ) {
                  	// The Loop
                    $ct = 0;
                  	while ( $qa->have_posts() ) {
                  		$qa->the_post();
                      $id = get_the_ID();?>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $id;?>" aria-expanded="false" aria-controls="collapseOne<?php echo $id;?>">
                              <?php the_title();?>
                            </a>
							<div class="half-content"> <?php the_content();?></div>
                          </h4>
                          </div>
                          <div id="collapseOne<?php echo $id;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                              <p><?php the_content();?></p>
                            </div>
                          </div>
                      </div>
                    <?php $ct++; }

                   /* Restore original Post Data
                    * NB: Because we are using new WP_Query we aren't stomping on the
                    * original $wp_query and it does not need to be reset with
                    * wp_reset_query(). We just need to set the post data back up with
                    * wp_reset_postdata().
                    */
                     wp_reset_postdata();
                   }
               ?>
          <?php }?>
        </div>
    </div>
</section>
<?php get_footer();?>
