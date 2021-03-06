<?php
/**
 * @package Revive
 */
 
 			//Load Default Image sizes
 			if ( has_post_thumbnail() ): 
						  $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "revive-pop-thumb" ); ?>
					<?php $image_width = $image_data[1]; ?>
					<?php $image_height = $image_data[2]; ?>
				<?php else :
						  $image_height	= 170;
						  $image_width = 270;
				endif; ?>

<article id="post-<?php the_ID(); ?>" data-w="<?php echo $image_width ?>" data-h="<?php echo $image_height; ?>" <?php post_class('revive item'); ?>>

			<?php if (has_post_thumbnail()) : ?>	
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('revive-pop-thumb',array(  'alt' => get_the_title(),'title' => get_the_title() )); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><img alt="<?php the_title() ?>" src="<?php echo esc_url(get_template_directory_uri()."/assets/images/placeholder2.jpg"); ?>"></a>
			<?php endif; ?>
			
			<div class="postdate">
            	<span class="month"><?php the_time('M'); ?></span>
				<span class="day"><?php the_time('j'); ?></span>
            </div>
            
            
            <div class="out-thumb">
				<header class="entry-header">
					<h3 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				</header><!-- .entry-header -->
			</div><!--.out-thumb-->
            
			
</article><!-- #post-## -->