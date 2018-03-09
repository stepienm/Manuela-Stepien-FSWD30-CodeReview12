<?php get_header(); ?>


<div class="container">
	<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="card text-center">
							<div class="blog-post">
								<h2 class="blog-post-title">
						    		<a href="<?php the_permalink(); // href to a specific blog post ?>">
						   				<?php the_title(); // blog post title ?>
						    		</a>
								</h2>

						    	<p class="blog-post-meta"><?php the_time('d.m.Y G:i'); // blog post date and time ?> by
						    		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"> <?php the_author(); // blog post author ?>
						    		</a>
						    	</p>
								
								<?php if(has_post_thumbnail()) : ?>
									<div class="post-thumb">
						            	<?php the_post_thumbnail(); ?>
						    		</div>

						    	<?php endif; ?>
						    	<p><?php the_excerpt(); // blog post content ?></p>
		            		</div><!-- /.blog-post -->
					    </div>
					</div>
		        <?php endwhile; else:  ?>
		        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card text-center">
							<div class="blog-post">
								<h2 class="blog-post-title"><?php echo('No Posts Found'); ?></h2>
 							</div><!-- /.blog-post -->
 					 	</div>
					</div>
				<?php endif; ?>
	</div>
</div>
              
                
           
            </div> 
<div class="container">
	<div class="text-center">
<?php 
	 if(is_active_sidebar('sidebar')):
       dynamic_sidebar('sidebar');
       endif;
?>
</div>
</div>
<?php get_footer(); ?>