<?php /* Template Name: Locations */
get_header();
?>
<section class="availableCities main-header-hero">
    <div class="container">
        <div class="heading col-sm-12">
            <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;"><?php the_field('page_title', get_the_ID());?></h1>
            <p style="color:<?php the_field('sub_heading_color', get_the_ID());?>;"><?php the_field('sub_title', get_the_ID());?></p>
        </div>
        <div class="citiesContent col-sm-5">
            <div class="citiesContentHere">
              <?php
              // check if the repeater field has rows of data
              if( have_rows('locations_list') ):
                // loop through the rows of data
                  while ( have_rows('locations_list') ) : the_row();
                  // display a sub field value ?>
                <div class="singleContent">
                    <h4><?php the_sub_field('location_name', get_the_ID());?></h4>
                    <p><?php the_sub_field('location_address', get_the_ID());?></p>
                </div>
                <?php
                  endwhile;
                  else :
                    // no rows found
                  endif;
                ?>
            </div>
        </div>
        <div class="citiesImg col-sm-7">
          <?php the_post_thumbnail();?>
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
<?php get_footer(); ?>
