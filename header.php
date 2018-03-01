<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title();?></title>
    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
    <script>
    var ajaxUrl ="<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <?php wp_head();?>
<script type="text/javascript">
!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="4.0.0";
analytics.load("wGO53GmuiAezmSNmfaJm1tnSJ9OtFhoL");
analytics.page();
}}();
</script>
	</head>
<body <?php body_class(); ?>>
<header class="main-header">
    <div class="container">
        <div class="col-sm-5 logo-here log-md">
            <a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/fences-logo.png" class="fences_logo"></a>
        </div>
        <div class="col-sm-7 content menu-md">
          <div class="main-navigation">
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span>Menu</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php
                        wp_nav_menu( array(
                          'theme_location' => 'main-menu',
                          'items_wrap' => '%3$s',
                          )
                          )
                        ?>
                        <li class="quote"><button class="btn btn-default">Get a quote</button></li>
                    </ul>
                </div>
              </nav>
            </div>
            <div class="navigation-sticky">
              <ul>
                  <li class="nummber"><img src="<?php echo get_template_directory_uri() .'/img/gphone.png';?>"/><a href="tel:855-499-3339">855-499-3339</a></li>
                  <li class="quote"><button class="btn btn-default">Get a quote</button></li>
              </ul>
            </div>
          </div>
        </div>
</header>
