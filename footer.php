<footer>
    <div class="container">
        <div class="footerContent">
            <div class="col-sm-3 footerLogo">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
            <div class="col-sm-2 wookFences">
              <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
            <div class="col-sm-2 inspiration">
              <?php dynamic_sidebar( 'footer-3' ); ?>
            </div>
            <div class="col-sm-2 company">
              <?php dynamic_sidebar( 'footer-4' ); ?>
            </div>
            <div class="col-sm-3 reviews">
              <?php dynamic_sidebar( 'footer-5' ); ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>
