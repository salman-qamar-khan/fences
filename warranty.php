<?php /* Template Name: Warranty */
get_header();
?>
<section class="warrantyHero main-header-hero">
    <div class="warrantyImg">
        <img src="<?php echo get_template_directory_uri();?>/img/hero-bg.png"
        srcset="<?php echo get_template_directory_uri();?>/img/hero-bg@2x.png 2x,
                <?php echo get_template_directory_uri();?>/img/hero-bg@3x.png 3x"
        class="hero-bg">
        <div class="warrantyContent">
            <div class="container">
                <div class="warrantyContentHere">
                    <h1 style="color:<?php the_field('heading_color', get_the_ID());?>;">Warranty</h1>
                    <h4 style="color:<?php the_field('sub_heading_color', get_the_ID());?>;">We promise you'll be happy with our work, from a hassle-free quote to your finished fence</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="warrantyDescription">
    <div class="container">
        <div class="descriptionHere">
            <h4>5 Year Conditional Warranty </h4>
            <div class="conditionalWarranty">
                <p>Our conditional warranty will cover the following items:</p>
                <ul>
                    <li>After site inspection any Post found to be cracked, warped or twisted will be replaced at no charge within the 1 year warranty period.</li>
                    <li>After site inspection any Rails found to be cracked, warped or twisted will be replaced at no charge within the 5 year warranty period.</li>
                    <li>After site inspection any Fence Boards found to be cracked, warped or twisted (excluding knot holes) will be replaced at no charge within the 5 year warranty period. </li>
                    <li>After site inspection any Kickboard found to be cracked, warped or twisted will be replaced at no charge within the 5 year warranty period. </li>
                    <li>After site inspection any Lattice found to be cracked, warped or twisted will be replaced at no charge within the 5 year warranty period. </li>
                </ul>
            </div>
            <div class="disclaimer">
                <p>Warranty Disclaimer: After scheduled site inspection, any fence components mentioned above, installed by Ezhome Inc., that found to be subjected to the following (below) will be void of any warranty.</p>
                <ol>
                    <li>Excessive watering that causes fungus, mold, etc., which leads to dry rot.</li>
                    <li>Excessive dirt, leaves, vines, etc., piled on/against fence, that allow bacteria to form on fence that causes dry rot. </li>
                    <li>Heavy objects leaned on fence, thus, causing stress on frame (posts/rails). </li>
                    <li>Indications of abuse from cars, pets, balls, rough-housing, etc. </li>
                    <li>Tree and plant roots that cause lifting of the frame (posts/kickboards).</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
