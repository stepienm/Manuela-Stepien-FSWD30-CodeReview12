<?php get_header(); ?>


<div class="container">
	<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card text-center">
							<div class="blog-post">
								<h2 class="blog-post-title">
						   			<?php the_title(); // blog post title ?>
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
						    	<p><?php the_content(); // blog post content ?></p>

								<?php comments_template(); ?>

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


<?php get_footer(); ?>