<?php if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post(); ?>
  	<div class="col-md-4 col-sm-6">
	  	
	  	<div class="row-thumb">
	      	<a href="<?php the_permalink(); ?>">	
	      		<?php the_post_thumbnail('thumbnail'); ?>
		    </a>
	      	<div class="row-info">
	      		<a href="<?php the_permalink(); ?>">
	      			<p class="police-5"><?php the_title(); ?><br>
	      			   <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
	      		</a>
	      	</div>
	    </div>
	</div>

<?php endwhile; else: ?>
		<h4 class="none">
			<?php _e('Rien...', 'vnh')?>
		</h4>
<?php endif; ?>
