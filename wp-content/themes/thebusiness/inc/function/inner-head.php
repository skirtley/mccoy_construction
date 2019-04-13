<?php 
global $post;

if (!function_exists('thebusiness_single_page_title')) :
    function thebusiness_single_page_title() { ?>
    <?php
        global $thebusiness_customizer_all_values;

    	if(  !is_front_page()  ) {  

        $thebusiness_feature_slider_image = get_header_image(); ?>

		<div class="wrapper page-inner-title"  style="background-image: url('<?php echo esc_url( $thebusiness_feature_slider_image )?>');" >
        	<div class = "thumb-overlay">
				<div class="container">
				    <div class="row">
				        <div class="col-md-12 col-sm-12 col-xs-12">
				        	
							<header class="entry-header"  >
								<?php if (is_singular()){ ?>
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								<?php if (! is_page() ){?>
									<header class="entry-header">
										<div class="entry-meta entry-inner">
											<?php thebusiness_posted_on(); ?>
										</div><!-- .entry-meta -->
									</header><!-- .entry-header -->
								<?php } }
								elseif (is_404()) { ?>
									<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'thebusiness' ); ?></h1>
								<?php }
								elseif (is_archive()) {
									the_archive_title( '<h1 class="entry-title">', '</h1>' );
									the_archive_description( '<div class="taxonomy-description">', '</div>' );
								}
								elseif (is_search()) { ?>
									<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'thebusiness' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
								<?php }
								else{ ?>
										<h2 class="entry-title"><?php echo (esc_html__( 'Latest Blog', 'thebusiness' )); ?></h2>
								<?php }
								?>
							</header><!-- .entry-header -->
				        </div>
				    </div>
				</div>
			</div>
		</div>

    	<?php  }
    	else{
    		if( 1 == $thebusiness_customizer_all_values['thebusiness-slider-enable-blog']){
    			
				do_action( 'thebusiness_homepage_slider' );
    		}
    		else{
    			$thebusiness_feature_slider_image = get_header_image();
    		 ?>
    			<div class="wrapper page-inner-title"  style="background-image: url('<?php echo esc_url( $thebusiness_feature_slider_image )?>');" >

	    			<div class = "thumb-overlay">
						<div class="container">
							<div class="row">
				    			<div class="col-md-12 col-sm-12 col-xs-12">
						        	<h2 class="entry-title"><?php echo (esc_html__( 'Latest Blog', 'thebusiness' )); ?></h2>
						        </div>
						    </div>
						</div>
					</div>
				</div>		        	
    		<?php }
    	} ?> 
       
			<div class="beardcum-wrap">
				  <div class="container clearfix">
				<?php 
				/**
				 * thebusiness_action_after_title hook
				 * @since theBusiness 1.0.0
				 *
				 * @hooked null
				 */
				do_action( 'thebusiness_action_after_title' );
				?>
	          </div>
          </div>
		<?php 
	}
endif;
add_action( 'thebusiness-page-inner-title', 'thebusiness_single_page_title', 15 );