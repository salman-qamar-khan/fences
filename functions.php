<?php
/**
 * Enqueue scripts and styles.
 *
 * @since Fences 1.0
 */
function my_load_scripts() {

    // Enqueue Style
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );

    // Enqueue Script
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'address', get_template_directory_uri() . '/js/address-input.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'my_load_scripts');

// This theme uses wp_nav_menu() in one locations.
function wpb_custom_new_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );

/**
 * Register widget area.
 *
 * @since Fences 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fences_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Area 1'),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your Footer.'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p>',
		'after_title'   => '</p>',
	) );
  register_sidebar( array(
    'name'          => __( 'Footer Area 2'),
    'id'            => 'footer-2',
    'description'   => __( 'Add widgets here to appear in your Footer.'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<p>',
    'after_title'   => '</p>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Footer Area 3'),
    'id'            => 'footer-3',
    'description'   => __( 'Add widgets here to appear in your Footer.'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<p>',
    'after_title'   => '</p>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Footer Area 4'),
    'id'            => 'footer-4',
    'description'   => __( 'Add widgets here to appear in your Footer.'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<p>',
    'after_title'   => '</p>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Footer Area 5'),
    'id'            => 'footer-5',
    'description'   => __( 'Add widgets here to appear in your Footer.'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<p>',
    'after_title'   => '</p>',
  ) );
}
add_action( 'widgets_init', 'fences_widgets_init' );

function loadMorePosts(){
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'order'   => 'ASC'
          );
        // The Query
        $posts = new WP_Query( $args );
        if ( $posts->have_posts() ) {
          // The Loop
          while ( $posts->have_posts() ) {
            $posts->the_post();
            $category = get_the_category();?>
    <div class="singleBlog">
        <div class="heading">
            <h3><?php the_title();?></h3>
            <p><?php the_time( 'j F, Y' ); ?></p>
        </div>
        <div class="singleBlogImg">

        </div>
        <div class="singleBlogDescription">
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class="highlight">Read more</a>
        </div>
        <div class="blogButton">
          <?php foreach ($category as $singleCat) {
             echo '<button class="btn btn-default cube mr-3">'.$singleCat->name.'</button>';
          } ?>
        </div>
    </div>
  <?php }

  /* Restore original Post Data
   * NB: Because we are using new WP_Query we aren't stomping on the
   * original $wp_query and it does not need to be reset with
   * wp_reset_query(). We just need to set the post data back up with
   * wp_reset_postdata().
   */
    wp_reset_postdata();
  }
wp_die();
}
add_action('wp_ajax_loadMorePosts', 'loadMorePosts'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadMorePosts', 'loadMorePosts'); // wp_ajax_nopriv_{action}

function loadMoreProjects(){
   $args = array(
            'post_type' => 'completed_projects',
            'posts_per_page' => -1,
            'order'   => 'ASC'
          );
        // The Query
        $projects = new WP_Query( $args );
        if ( $projects->have_posts() ) {
          // The Loop
          while ( $projects->have_posts() ) {
            $projects->the_post(); ?>
    <div class="projectRow row">
        <div class="head col-sm-12">
            <div class="col-sm-3">
				<p>Project Date: <span><?php the_field('project_date', get_the_ID());?></span></p>
				<p>Project Cost: <span><?php the_field('project_cost', get_the_ID());?></span></p>
			</div>
			<div class="col-sm-3">
				<p>City: <span><?php the_field('project_city', get_the_ID());?></span></p>
				<p>Zip Code: <span><?php the_field('project_zip_code', get_the_ID());?></span></p>
			</div>
        </div>
        <div class="col-sm-6">
            <div class="singleProjectImg">
              <img src="<?php the_field('before_image', get_the_ID());?>">
                <div class="banner">
                    <p>Before</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="singleProjectImg">
              <img src="<?php the_field('after_image', get_the_ID());?>">
                <div class="banner">
                    <p>After</p>
                </div>
            </div>
        </div>
    </div>
  <?php }

  /* Restore original Post Data
   * NB: Because we are using new WP_Query we aren't stomping on the
   * original $wp_query and it does not need to be reset with
   * wp_reset_query(). We just need to set the post data back up with
   * wp_reset_postdata().
   */
    wp_reset_postdata();
  }
wp_die();
}
add_action('wp_ajax_loadMoreProjects', 'loadMoreProjects'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadMoreProjects', 'loadMoreProjects'); // wp_ajax_nopriv_{action}
