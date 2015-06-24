<?php if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post(); ?>
  	
      <?php $images = get_field('artwork_images');
	    if ($images) {
  			foreach( $images as $image ): ?>
  				<div class="col-md-4 col-sm-6">
					<div class="row-thumb">
		  				<a class="fancybox" data-fancybox-group="gallery" rel="gallery" 
		  					title="<?php echo $image['title'] ?><br><?php echo $image['caption'] ?>" 
		  					href="<?php echo $image['sizes']['large']; ?>">
							<img src="<?php echo $image['sizes']['medium']; ?>">
							</a>
						<div class="row-info">
							<a class="fancybox" data-fancybox-group="gallery" rel="gallery" 
		  					title="<?php echo $image['title'] ?><br><?php echo $image['caption'] ?>" 
		  					href="<?php echo $image['sizes']['large']; ?>">
			  					<p class="police-5">
			  						<?php echo $image['title'] ?><br>
			  						<?php echo $image['caption']?>
			  					</p>
			  				</a>
		  				</div>
	  				</div>
	  			</div>
  			<?php endforeach; 

		} else { 
		 	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
		 	<div class="col-md-4 col-sm-6">
				<div class="row-thumb">
	 				<a class="fancybox" data-fancybox-group="gallery" rel="gallery" 
	 					title="<?php echo the_title_attribute( 'echo=0' );?><br><?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>" 
	 					href="<?php echo $large_image_url[0]; ?>">
						<?php the_post_thumbnail('medium'); ?>
					</a>
					<div class="row-info">
						<a class="fancybox" data-fancybox-group="gallery" rel="gallery" 
	 					title="<?php echo the_title_attribute( 'echo=0' );?><br><?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>" 
	 					href="<?php echo $large_image_url[0]; ?>">
		      				<p class="police-5">
		      					<?php the_title(); ?><br>
		      					<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
		      				</p>
		      			</a>
	      			</div>
	      		</div>
	      	</div>
	    <?php } 
 endwhile; else: ?>
		<h4 class="none">
			<?php _e('Aucunes Oeuvres Trouvées... Veuillez recommencez votre ', 'vnh')?>
			<a href="/artwork"><?php _e('recherche')?></a>
		</h4>
<?php endif; ?>
