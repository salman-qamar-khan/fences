<?php /* Template Name: Compare */
get_header();
?>
<section class="reviewsHero compareHero main-header-hero">
    <div class="reviewImg" style="background-image:url(<?php the_field('header_image', get_the_ID());?>);">
        <div class="reviewContent">
            <div class="container">
                <div class="reviewContentHere">
                    <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="compareContent desktop-compare">
    <div class="container">
        <div class="compareContentHere col-sm-12">
			<div class="col-sm-12 singleRow">
                <div class="col-sm-3 head">
                </div>
                <div class="col-sm-3">
                    <img src="<?php the_field('picture_of_the_fence', get_the_ID());?>"
                    srcset="<?php the_field('picture_of_the_fence', get_the_ID());?>,
                            <?php the_field('picture_of_the_fence', get_the_ID());?>"
                    class="Rectangle-3-Copy-3">
                </div>
                <div class="col-sm-3">
                    <img src="<?php the_field('picture_of_the_fence_g', get_the_ID());?>"
                    srcset="<?php the_field('picture_of_the_fence_g', get_the_ID());?>,
                            <?php the_field('picture_of_the_fence_g', get_the_ID());?>"
                    class="Rectangle-3-Copy-3">
                </div>
                <div class="col-sm-3">
                    <img src="<?php the_field('picture_of_the_fence_l', get_the_ID());?>"
                    srcset="<?php the_field('picture_of_the_fence_l', get_the_ID());?>,
                            <?php the_field('picture_of_the_fence_l', get_the_ID());?>"
                    class="Rectangle-3-Copy-3">
                </div>
            </div>
			<div class="col-sm-12 singleRow tableHead lightGrey">
                <div class="col-sm-3 head">
                    <p>Fence type</p>
                </div>
                <div class="col-sm-3">
                    <h4>Basic dogeared fence</h4>
                </div>
                <div class="col-sm-3">
                    <h4>Good neighbor fence</h4>
                </div>
                <div class="col-sm-3">
                    <h4>Good neighbor fence with lattice</h4>
                </div>
            </div>
            <div class="col-sm-12 singleRow">
                <div class="col-sm-3 head">
                    <p>Material</p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('installation_date', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('installation_date_g', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('installation_date_l', get_the_ID());?></p>
                </div>
            </div>
            <div class="col-sm-12 singleRow lightGrey">
                <div class="col-sm-3 head">
                    <p>Height</p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('location', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('location_g', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('location_l', get_the_ID());?></p>
                </div>
            </div>
            <div class="col-sm-12 singleRow">
                <div class="col-sm-3 head">
                    <p>Board</p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('linear_ft_installed', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('linear_ft_installed_g', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('linear_ft_installed_l', get_the_ID());?></p>
                </div>
            </div>
            <div class="col-sm-12 singleRow lightGrey">
                <div class="col-sm-3 head">
                    <p>Lattice</p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('price_range', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('price_range_g', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('price_range_l', get_the_ID());?></p>
                </div>
            </div>
            <div class="col-sm-12 singleRow">
                <div class="col-sm-3 head">
                    <p>Support type/framing</p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('material', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('material_g', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('material_l', get_the_ID());?></p>
                </div>
            </div>
            <div class="col-sm-12 singleRow lightGrey">
                <div class="col-sm-3 head">
                    <p>Posts</p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('gate_installed', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('gate_installed_g', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('gate_installed_l', get_the_ID());?></p>
                </div>
            </div>
            <div class="col-sm-12 singleRow">
                <div class="col-sm-3 head">
                    <p>Kickboard</p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('quote_accepted', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('quote_accepted_g', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('quote_accepted_l', get_the_ID());?></p>
                </div>
            </div>
            <div class="col-sm-12 singleRow lightGrey">
                <div class="col-sm-3 head">
                    <p>Footing</p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('start_to_completion', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('start_to_completion_g', get_the_ID());?></p>
                </div>
                <div class="col-sm-3">
                    <p><?php the_field('start_to_completion_l', get_the_ID());?></p>
                </div>
            </div>
			<div class="col-sm-12 singleRow">
                <div class="col-sm-3 head">
                </div>
                <div class="col-sm-3">
                    <p><a href="https://s3-us-west-1.amazonaws.com/my-ezhome-com/store/dog-eared-fence-detail.pdf" target="_blank">Fence diagram</a></p>                
				</div>
                <div class="col-sm-3">
                    <p><a href="https://s3-us-west-1.amazonaws.com/my-ezhome-com/store/wood-fence-detail.pdf" target="_blank">Fence diagram</a></p>
                </div>
                <div class="col-sm-3">
                    <p><a href="https://s3-us-west-1.amazonaws.com/my-ezhome-com/store/wood-fence-lattice-detail.pdf" target="_blank">Fence diagram</a></p>
                </div>
            </div>
			
       </div>
    </div>
</section>
<section class="compareContent mobile-compare">
  <div class="container">
      <div class="compareContentHere col-sm-12">
        <div class="col-sm-3 labels-head-compare head pad-right-0">
        </div>
        <div class="col-sm-3 singleRow tableHead pad-left-0 pad-right-0">
           <p>Picture of the fence</p>
          <img src="<?php the_field('picture_of_the_fence', get_the_ID());?>"
          srcset="<?php the_field('picture_of_the_fence', get_the_ID());?>,
                  <?php the_field('picture_of_the_fence', get_the_ID());?>"
          class="Rectangle-3-Copy-3">
		  <p class="lightGrey">Fence type <span class="pull-right">Basic dogeared fence</span></p>
          <p>Installation date <span class="pull-right"><?php the_field('installation_date', get_the_ID());?><span></p>
          <p class="lightGrey">Location <span class="pull-right"><?php the_field('location', get_the_ID());?></span></p>
          <p>Linear ft installed <span class="pull-right"><?php the_field('linear_ft_installed', get_the_ID());?></span></p>
          <p class="lightGrey">Price Range <span class="pull-right"><?php the_field('price_range', get_the_ID());?></span></p>
          <p>Material <span class="pull-right"><?php the_field('material', get_the_ID());?></span></p>
          <p class="lightGrey">Gate installed <span class="pull-right"><?php the_field('gate_installed', get_the_ID());?></span></p>
          <p>Quote accepted to first day <span class="pull-right"><?php the_field('quote_accepted', get_the_ID());?></span></p>
          <p class="lightGrey">Days from start to completion <span class="pull-right"><?php the_field('start_to_completion', get_the_ID());?></span></p>
  </div>
  <div class="col-sm-3 singleRow tableHead pad-left-0 pad-right-0">
    <p>Picture of the fence</p>
    <img src="<?php the_field('picture_of_the_fence_g', get_the_ID());?>"
    srcset="<?php the_field('picture_of_the_fence_g', get_the_ID());?>,
            <?php the_field('picture_of_the_fence_g', get_the_ID());?>"
    class="Rectangle-3-Copy-3">
	  <p class="lightGrey">Fence type <span class="pull-right">Basic dogeared fence</span></p>
    <p>Installation date <span class="pull-right"><?php the_field('installation_date_g', get_the_ID());?><span></p>
    <p class="lightGrey">Location <span class="pull-right"><?php the_field('location_g', get_the_ID());?></span></p>
    <p>Linear ft installed <span class="pull-right"><?php the_field('linear_ft_installed_g', get_the_ID());?></span></p>
    <p class="lightGrey">Price Range <span class="pull-right"><?php the_field('price_range_g', get_the_ID());?></span></p>
    <p>Material <span class="pull-right"><?php the_field('material_g', get_the_ID());?></span></p>
    <p class="lightGrey">Gate installed <span class="pull-right"><?php the_field('gate_installed_g', get_the_ID());?></span></p>
    <p>Quote accepted to first day <span class="pull-right"><?php the_field('quote_accepted_g', get_the_ID());?></span></p>
    <p class="lightGrey">Days from start to completion <span class="pull-right"><?php the_field('start_to_completion_g', get_the_ID());?></span></p>
</div>
<div class="col-sm-3 singleRow tableHead pad-left-0 pad-right-0">
  <p>Picture of the fence</p>
  <img src="<?php the_field('picture_of_the_fence_l', get_the_ID());?>"
  srcset="<?php the_field('picture_of_the_fence_l', get_the_ID());?>,
          <?php the_field('picture_of_the_fence_l', get_the_ID());?>"
  class="Rectangle-3-Copy-3">
  <p class="lightGrey">Fence type <span class="pull-right">Basic dogeared fence</span></p>
  <p>Installation date <span class="pull-right"><?php the_field('installation_date_l', get_the_ID());?><span></p>
  <p class="lightGrey">Location <span class="pull-right"><?php the_field('location_l', get_the_ID());?></span></p>
  <p>Linear ft installed <span class="pull-right"><?php the_field('linear_ft_installed_l', get_the_ID());?></span></p>
  <p class="lightGrey">Price Range <span class="pull-right"><?php the_field('price_range_l', get_the_ID());?></span></p>
  <p>Material <span class="pull-right"><?php the_field('material_l', get_the_ID());?></span></p>
  <p class="lightGrey">Gate installed <span class="pull-right"><?php the_field('gate_installed_l', get_the_ID());?></span></p>
  <p>Quote accepted to first day <span class="pull-right"><?php the_field('quote_accepted_l', get_the_ID());?></span></p>
  <p class="lightGrey">Days from start to completion <span class="pull-right"><?php the_field('start_to_completion_l', get_the_ID());?></span></p>
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
<?php get_footer();?>