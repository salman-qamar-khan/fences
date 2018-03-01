<?php /* Template Name: story */
get_header();
?>
<section class="storyHero">
    <div class="container">
        <div class="storyImg" style="background-image:url(<?php the_field('header_image', get_the_ID());?>);">
            <div class="storyContent">
                <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;"><?php the_title();?></h1>
                <h4 style="color:<?php the_field('sub_heading_color', get_the_ID());?>><?php the_field('header_sub_heading', get_the_ID());?></h4>
            </div>
        </div>
    </div>
</section>
<section class="companyStory">
    <div class="container">
        <div class="storyDescription">
            <div class="singlePara">
                <h4>The beginning</h4>
                <p>As homeowners themselves, our founders were frustrated by the options within the home services industry.</p>
                <p>Technology had revolutionized multiple industries, so why not this one ?</p>
                <p>You don’t always have time to spend hours searching for the best option for your home and garden needs. A business card on a community bulletin board can only tell you so much. And even if you do make a choice, how can you be sure of the quality or consistency of the work?</p>
                <p>It can be difficult to communicate with many providers, hard to understand what you’re specifically being quoted for, and in some cases, there’s a general lack of accountability.</p>
                <p>Who could you go to if you weren’t satisfied with your service? The job would be done and you’d be stuck with the bill.</p>
            </div>
            <div class="singlePara">
                <h4>A better way</h4>
                <p>We saw that there was something about the home and garden industry that was simply lacking. We realized all that people really want is a stress-free way to take care of their homes.</p>
                <p>Imagine: what if you could find a trusted provider, with fair prices, professional work, and you could manage everything online?</p>
                <p>Well, that’s exactly what ezhome aims to be. We believe taking care of your home shouldn’t be a headache.</p>
                <p>By having everything managed online through account, you can easily get the services you need. Transparent quoting means you’ll know exactly what you’re paying for. And by having a company that truly cares about and supports their employees and partners, you’ll have motivated professionals taking care of your home.</p>
            </div>
            <div class="singlePara">
                <h4>More than a service provider</h4>
                <p>ezhome was created to change the way an entire workforce is run. A workforce that has historically labored long hours in difficult conditions. A workforce that’s rarely been given the opportunities afforded to other professions.</p>
                <p>ezhome exists because we want to change the nature of physical work. We want to provide smart, driven laborers with reliable hours, fair pay, and benefits. To give every hard-working person the opportunity to grow, to get promoted, and to lead teams. Because where you’re born shouldn’t dictate the life you live. That’s why we’ve made it our mission to change the home services industry from the ground up.</p>
                <p>We look forward to providing reliable home and garden services at a fair price, delivered by skilled employees and partners.</p>
            </div>
            <div class="respective">
                <p>Your home, made easy.</p>
                <p>The ezhome team</p>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="footerContent">
            <div class="col-sm-3 footerLogo">
                <img src="<?php echo get_template_directory_uri();?>/img/fences-logo.png"
                srcset="<?php echo get_template_directory_uri();?>/img/fences-logo@2x.png 2x,
                        <?php echo get_template_directory_uri();?>/img/fences-logo@3x.png 3x"
                class="fences_logo">
                <p>© 2017 ezhome, inc.</p>
            </div>
            <div class="col-sm-2 wookFences">
                <p>Wood fences</p>
                <ul>
                    <li>Fence options</li>
                    <li>Licenses</li>
                    <li>Warranty</li>
                    <li>Financing</li>
                </ul>
            </div>
            <div class="col-sm-2 inspiration">
                <p>Inspiration</p>
                <ul>
                    <li>Fence 101</li>
                    <li>Pro advice</li>
                    <li>Completed projects</li>
                    <li>Ask a question</li>
                </ul>
            </div>
            <div class="col-sm-2 company">
                <p>Company</p>
                <ul>
                    <li>Our story</li>
                    <li>Locations</li>
                    <li>Become a contractor</li>
                    <li>Our contractors</li>
                </ul>
            </div>
            <div class="col-sm-3 reviews">
                <ul>
                    <li>Reviews</li>
                    <li>Help</li>
                </ul>
                <div class="contact">
                    <p>Call us:</p>
                    <img src="<?php echo get_template_directory_uri();?>/img/phone.png"
                    srcset="<?php echo get_template_directory_uri();?>/img/phone@2x.png 2x,
                            <?php echo get_template_directory_uri();?>/img/phone@3x.png 3x"
                    class="phone">
                    <p>650-265-6662</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--scripts-->
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>

</script>
</body>
</html>
