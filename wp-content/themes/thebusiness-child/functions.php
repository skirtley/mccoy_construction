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
