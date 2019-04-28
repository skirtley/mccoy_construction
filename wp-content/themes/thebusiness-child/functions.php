<?php
// Making sure your child theme has an independent version and can bust caches: https://wordpress.stackexchange.com/a/182023/30783
// Filter get_stylesheet_uri() to return the parent theme's stylesheet
add_filter('stylesheet_uri', 'use_parent_theme_stylesheet');
// Enqueue this theme's scripts and styles (after parent theme)
add_action('wp_enqueue_scripts', 'my_theme_styles', 20);

function use_parent_theme_stylesheet() {
  // Use the parent theme's stylesheet
  return get_template_directory_uri() . '/style.css';
}

function my_theme_styles() {
  $themeVersion = wp_get_theme()->get('Version');

  // Enqueue our style.css with our own version
  wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/style.css',
      array(), $themeVersion);
}

// Override some footer stuff
function thebusiness_footer() {
    global $thebusiness_customizer_all_values;
    ?>
             <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="social-links-n-copy-right text-center">
                <?php
                    if( has_nav_menu( 'social' ) ){
                ?>
                    <div class="social-widget salient-social-section social-icon-only top-tooltip">
                        <?php
                            wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span>',
                                'link_after'=>'</span>' , 'menu_id' => 'primary-menu','fallback_cb' => false, ) );
                        ?>
                    </div>
                <?php
                    }
                ?>
                <!-- footer site info -->
                    <div class="copy-right text-center">
                        <?php
                        if(isset($thebusiness_customizer_all_values['thebusiness-copyright-text'])){
                            echo wp_kses_post( $thebusiness_customizer_all_values['thebusiness-copyright-text'] );
                        }
                        ?>
                    </div>
                </div><!-- .social-links-n-copy-right -->
            </div><!-- .col-md-12 -->
        </div>
    </div>
</footer><!-- #colophon -->
<!-- *****************************************
         Footer section ends
****************************************** -->
<?php
}

function thebusiness_featured_home_slider() {
    global $thebusiness_customizer_all_values;

    if( 1 != $thebusiness_customizer_all_values['thebusiness-feature-slider-enable'] ){
        return null;
    }

    $thebusiness_slider_arrays = thebusiness_featured_slider_array(  );


    if( is_array( $thebusiness_slider_arrays )){
    // $thebusiness_feature_slider_number = absint( $thebusiness_customizer_all_values['thebusiness-featured-slider-number'] );
    $thebusiness_feature_enable_arrow = $thebusiness_customizer_all_values['thebusiness-fs-enable-arrow'];
    $thebusiness_feature_enable_button = $thebusiness_customizer_all_values['thebusiness-fs-enable-button'];
    $thebusiness_feature_button_text = $thebusiness_customizer_all_values['thebusiness-fs-button-text'];
?>
<div class="dm-banner-section">
    <div id="dm-banner-slider" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $i = 1;
            foreach( $thebusiness_slider_arrays as $thebusiness_slider_array ){
                if(empty($thebusiness_slider_array['thebusiness-feature-slider-image'])){
                    $thebusiness_feature_slider_image = get_template_directory_uri().'/assets/img/banner.jpg';
                }
                else{
                    $thebusiness_feature_slider_image =$thebusiness_slider_array['thebusiness-feature-slider-image'];
                }
                ?>
                    <div class="item <?php if (isset($thebusiness_slider_array['thebusiness-slider-class'])) { echo esc_attr($thebusiness_slider_array['thebusiness-slider-class']);  } else {  echo 'active'; } ?>" style="background-image: url('<?php echo esc_url( $thebusiness_feature_slider_image )?>');" >
                        <div class="carousel-caption">
                          <!-- Comment out the caption -->
                            <!-- <h1>SAMS LIN FROM ! FUNCTION<a href="<?php echo esc_url( $thebusiness_slider_array['thebusiness-feature-slider-link'] );?>"><?php echo esc_html( $thebusiness_slider_array['thebusiness-feature-slider-title'] );?></a></h1> -->
                            <p><?php echo wp_kses_post( $thebusiness_slider_array['thebusiness-feature-slider-content'] );?> </p>
                            <?php if ( 1 == $thebusiness_feature_enable_button){ ?>
                                <a href="<?php echo esc_url( $thebusiness_slider_array['thebusiness-feature-slider-link'] );?>" class="btn-c btn-blue white-border">
                                    <?php echo esc_html( $thebusiness_customizer_all_values['thebusiness-fs-button-text'] );?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                $i++;
                }
                ?>
        </div><!-- .carousel inner -->
        <!-- Controls -->
        <?php if( 1 == $thebusiness_feature_enable_arrow){ ?>
            <a class="left control" href="#dm-banner-slider" role="button" data-slide="prev">
                <svg width="30" height="56" viewBox="0 0 30 56">
                <path class="left-arrow" data-name="Rectangle 1 copy" class="cls-1" d="M28.443-.386l1.115,1.12-28,27.886L0.441,27.5Zm-0.558,56.4L29,54.891,1.115,27,0,28.125Z"/>
                </svg>
            </a>
            <a class="right control" href="#dm-banner-slider" role="button" data-slide="next">
                <svg width="30" height="56" viewBox="0 0 30 56">
                <path id="Rectangle_1_copy" data-name="Rectangle 1 copy" class="cls-1" d="M1.136-.011L0,1.1,28.42,28.8l1.132-1.113ZM1.7,56.011L0.575,54.9,28.869,27.2,30,28.31Z"/>
                </svg>
            </a>
        <?php }  ?>

    </div><!-- .dm banner slider -->
</div><!-- .dm banner section -->
<?php
    }
}
