<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h3 class="entry-title">
		        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
		          <?php the_title(); ?>
		        </a>
	        </h3>
			<div class='authorAndDate'>
				<p><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename')) ?>"><?php the_author(); ?></a></p>

				<p><?php the_time( 'F j Y' ); ?></p>
				<p><i class="fa fa-comment-o"></i> <?php comments_popup_link(' 0 &raquo',' 1 &raquo',' % &raquo'); ?> </p>
			</div>
			<section class="entry-content">
				<div class="post-feature-img">
	                 <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php $imgURL = hackeryou_get_thumbnail_url($post);?>
	                <img src="<?php echo $imgURL ?>" alt="">
	                </a>
           		 </div>
				<?php the_excerpt(); ?>
			
				<?php wp_link_pages( array(
          'before' => '<div class="page-link"> Pages:',
          'after' => '</div>'
        )); ?>
			</section><!-- .entry-content -->

			<div class='blogFooter'>
				<p class='tags'><?php the_tags('', ' ', ''); ?> 
				</p>
				<p class='category'>In category of <?php the_category(', '); ?></p>
			</div>

		</article><!-- #post-## -->

		<p>//</p>
		 <?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
