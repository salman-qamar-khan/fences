<?php get_header();
$pageID = get_the_ID();?>
<section class="hero">
    <div class="heroMain">
        <img src="<?php the_field('quote_section_image', $pageID);?>"
        srcset="<?php echo get_template_directory_uri();?>/img/hero@2x.png 2x, <?php echo get_template_directory_uri();?>/img/hero@3x.png 3x" class="heroImg">
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
                <h3>Why people choose us</h3>
                <div class="singleContent">
                    <div class="checkmark"></div>
                    <p>Over <b>150</b> installed fences in 2017</p>
                </div>
                <div class="singleContent">
                    <div class="checkmark"></div>
                    <p>Over <b>90%</b> of our customers recommend us</p>
                </div>
                <div class="singleContent">
                    <div class="checkmark"></div>
                    <p>Licensed provider with perfect <b>BBB record</b>, <b>Yelp</b> and <b>Google Reviews</b></p>
                </div>
                <div class="singleContent">
                    <div class="checkmark"></div>
                    <p>Member of <b>American Fence Association</b></p>
                </div>
                <div class="singleIcon">
                    <img src="<?php echo get_template_directory_uri();?>/img/afa.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/afa@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/afa@3x.png 3x"
                    class="afa">
                </div>
                <div class="singleIcon">
                    <img src="<?php echo get_template_directory_uri();?>/img/yelp.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/yelp@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/yelp@3x.png 3x"
                    class="yelp">
                </div>
                <div class="singleIcon">
                    <img src="<?php echo get_template_directory_uri();?>/img/google.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/google@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/google@3x.png 3x"
                    class="google">
                </div>
                <div class="singleIcon">
                    <img src="<?php echo get_template_directory_uri();?>/img/bbb.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/bbb@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/bbb@3x.png 3x"
                    class="bbb">
                </div>
            </div>
        </div>
        <div class="col-sm-7 whyImage">
            <img src="<?php echo get_template_directory_uri();?>/img/img.png"
            srcset="<?php echo get_template_directory_uri();?>/img/img@2x.png 2x,
                    <?php echo get_template_directory_uri();?>/img/img@3x.png 3x"
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
        <div class="col-sm-4">
            <div class="singleBox">
                <div class="singleBoxImg">
                    <img src="<?php echo get_template_directory_uri();?>/img/rectangle-6.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/rectangle-6@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/rectangle-6@3x.png 3x"
                    class="Rectangle-6">
                    <div class="banner">
                        <p>Affordable</p>
                    </div>
                </div>
                <h4>Basic dogeared fence</h4>
                <p>Fence looks like the image above on one side, back side has just a frame.</p>
                <p class="Fence-diagram">Fence diagram</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="singleBox">
                <div class="singleBoxImg">
                    <img src="<?php echo get_template_directory_uri();?>/img/rectangle-6-copy.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/rectangle-6-copy@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/rectangle-6-copy@3x.png 3x"
                    class="Rectangle-6-Copy">
                    <div class="banner">
                        <p>Recommended</p>
                    </div>
                </div>
                <h4>Good neighbor fence</h4>
                <p>Fences feature overlapping boards for added durability, and both sides of the fence share an identical look</p>
                <p class="Fence-diagram">Fence diagram</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="singleBox">
                <div class="singleBoxImg">
                    <img src="<?php echo get_template_directory_uri();?>/img/rectangle-6-copy-2.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/rectangle-6-copy-2@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/rectangle-6-copy-2@3x.png 3x"
                    class="Rectangle-6-Copy-2">
                    <div class="banner">
                        <p>Highest grade</p>
                    </div>
                </div>
                <h4>Good neighbor fence with lattice</h4>
                <p>Same as Professional Grade Good Neighbor Fence plus a 1 ft lattice on top for added height and privacy </p>
                <p class="Fence-diagram">Fence diagram</p>
            </div>
        </div>
    </div>
</section>
<section class="fenceInstallation">
    <div class="container">
        <div class="col-sm-6 fenceImg">
            <img src="<?php echo get_template_directory_uri();?>/img/service-delivery.png"
            srcset="<?php echo get_template_directory_uri();?>/img/service-delivery@2x.png 2x,
                    <?php echo get_template_directory_uri();?>/img/service-delivery@3x.png 3x"
            class="service_delivery">
        </div>
        <div class="col-sm-6 fenceContent">
            <h3>We make fence installation easy!</h3>
            <div class="singleContent">
                <div class="head">
                    <div class="number">
                        <span>1</span>
                    </div>
                    <h4>Get a quote same day</h4>
                </div>
                <div class="singleDes">
                    <div class="checkmark"></div>
                    <p>Don’t wait weeks for onsite appointments</p>
                </div>
                <div class="singleDes">
                    <div class="checkmark"></div>
                    <p>We use satellite imagery to give you a quote remotely</p>
                </div>
            </div>
            <div class="singleContent">
                <div class="head">
                    <div class="number">
                        <span>2</span>
                    </div>
                    <h4>Approve your quote online</h4>
                </div>
                <div class="singleDes">
                    <div class="checkmark"></div>
                    <p>See all measurements, breakdown of materials upfront</p>
                </div>
                <div class="singleDes">
                    <div class="checkmark"></div>
                    <p>View fence diagrams</p>
                </div>
            </div>
            <div class="singleContent">
                <div class="head">
                    <div class="number">
                        <span>3</span>
                    </div>
                    <h4>Get your fence installed within 2 weeks</h4>
                </div>
                <div class="singleDes">
                    <div class="checkmark"></div>
                    <p>Professional and licensed installers</p>
                </div>
                <div class="singleDes">
                    <div class="checkmark"></div>
                    <p>If you are not happy, we will make it right</p>
                </div>
            </div>
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
        <div class="col-sm-6 eachSide">
            <div class="singleQuestion borderBottom">
                <h4>Why should I replace my fence?</h4>
                <p>Much like a house or shed, a fence is subject to natural deterioration over time. Keeping your fence in good shape will ensure safety while adding curb appeal to your yard and property. A good fence provides benefits like added privacy, more security, and reduced noise in a busy neighborhood.</p>
            </div>
            <div class="singleQuestion">
                <h4>How much should I expect to spend on my fence installation?</h4>
                <p>Your fence installation depends on linear footage and the type of fence you choose. To provide you a fast and hassle-free quote, we create an exterior blueprint of your property through publicly available satellite imagery and base your price off those measurements.</p>
            </div>
        </div>
        <div class="col-sm-6 eachSide">
            <div class="singleQuestion borderBottom">
                <h4>My neighbor will split the cost of the fence between our properties. Can you help with that?</h4>
                <p>Yes, we can bill your neighbor separately for their portion of the fence.</p>
            </div>
            <div class="singleQuestion">
                <h4>What will you do with my old fence?</h4>
                <p>We’ll safely dispose of your old fence and any unneeded material once your new fence is installed.</p>
            </div>
            <p class="Read-more">Read more →</p>
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
        <div class="col-sm-12 singleReview">
            <div class="ratings col-sm-2">
                <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>Taylor K.</h4>
            </div>
            <div class="description col-sm-8">
                <p>“The fence team is the best encounter I've had from Ezhome. The guys were fantastic and the new gate is perfect. I will use them again in a heartbeat. I give them a 10 for performance and professionalism.”</p>
                <div class="note">
                    <img src="<?php echo get_template_directory_uri();?>/img/done.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/done@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/done@3x.png 3x"
                    class="done">
                    <p>Yes, I recommend this service</p>
                </div>
            </div>
            <div class="col-sm-2 name">
                <p>San Carlos, CA</p>
                <p>Project completed in Dec 2017</p>
            </div>
        </div>
        <div class="col-sm-12 singleReview">
            <div class="ratings col-sm-2">
                <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>Taylor K.</h4>
            </div>
            <div class="description col-sm-8">
                <p>“The fence team is the best encounter I've had from Ezhome. The guys were fantastic and the new gate is perfect. I will use them again in a heartbeat. I give them a 10 for performance and professionalism.”</p>
                <div class="note">
                    <img src="<?php echo get_template_directory_uri();?>/img/done.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/done@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/done@3x.png 3x"
                    class="done">
                    <p>Yes, I recommend this service</p>
                </div>
            </div>
            <div class="col-sm-2 name">
                <p>San Carlos, CA</p>
                <p>Project completed in Dec 2017</p>
            </div>
        </div>
        <div class="col-sm-12 singleReview">
            <div class="ratings col-sm-2">
                <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>Taylor K.</h4>
            </div>
            <div class="description col-sm-8">
                <p>“The fence team is the best encounter I've had from Ezhome. The guys were fantastic and the new gate is perfect. I will use them again in a heartbeat. I give them a 10 for performance and professionalism.”</p>
                <div class="note">
                    <img src="<?php echo get_template_directory_uri();?>/img/done.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/done@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/done@3x.png 3x"
                    class="done">
                    <p>Yes, I recommend this service</p>
                </div>
            </div>
            <div class="col-sm-2 name">
                <p>San Carlos, CA</p>
                <p>Project completed in Dec 2017</p>
            </div>
        </div>
        <div class="col-sm-12 singleReview">
            <div class="ratings col-sm-2">
                <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>Taylor K.</h4>
            </div>
            <div class="description col-sm-8">
                <p>“The fence team is the best encounter I've had from Ezhome. The guys were fantastic and the new gate is perfect. I will use them again in a heartbeat. I give them a 10 for performance and professionalism.”</p>
                <div class="note">
                    <img src="<?php echo get_template_directory_uri();?>/img/done.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/done@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/done@3x.png 3x"
                    class="done">
                    <p>Yes, I recommend this service</p>
                </div>
            </div>
            <div class="col-sm-2 name">
                <p>San Carlos, CA</p>
                <p>Project completed in Dec 2017</p>
            </div>
        </div>
        <div class="col-sm-12 singleReview">
            <div class="ratings col-sm-2">
                <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>Taylor K.</h4>
            </div>
            <div class="description col-sm-8">
                <p>“The fence team is the best encounter I've had from Ezhome. The guys were fantastic and the new gate is perfect. I will use them again in a heartbeat. I give them a 10 for performance and professionalism.”</p>
                <div class="note">
                    <img src="<?php echo get_template_directory_uri();?>/img/done.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/done@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/done@3x.png 3x"
                    class="done">
                    <p>Yes, I recommend this service</p>
                </div>
            </div>
            <div class="col-sm-2 name">
                <p>San Carlos, CA</p>
                <p>Project completed in Dec 2017</p>
            </div>
        </div>
        <div class="more col-sm-12">
            <h4>More reviews →</h4>
        </div>
    </div>
</section>
<?php get_footer(); ?>
