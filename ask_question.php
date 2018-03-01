<?php /* Template Name: Ask quesion */
get_header();
?>
<section class="askQuestion main-header-hero">
    <div class="container">
        <div class="col-sm-12 askQuestionContent">
            <div class="col-sm-5 askForm">
                <div class="askFormHere">
                    <h3>Ask a question</h3>
					<?php echo do_shortcode('[contact-form-7 id="243" title="Contact form 1"]');?>
                </div>
            </div>
            <div class="col-sm-7 askImg">
                <img src="<?php echo get_template_directory_uri();?>/img/img4.png"
                srcset="<?php echo get_template_directory_uri();?>/img/img4@2x.png 2x,
                        <?php echo get_template_directory_uri();?>/img/img4@3x.png 3x"
                class="img">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
