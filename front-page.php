<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div class="cover">
			
			<img src="<?php the_field('logo') ?>" alt="">
			<h3 class ='cover_intro'><?php echo get_field('coverbio') ?></h3>
		</div>

		<main class='main_portfolio'>
			<h2>PORTFOLIO</h2>
			<div class="portfolio">
				<?php
			        $portfolioQuery = new WP_Query(
			    array(
			            'posts_per_page' => -1,
			            'post_type' => 'portfolio',
			            'order' => 'ASC'
			            )
			    ); ?>

			    <?php if ( $portfolioQuery->have_posts() ) : ?>

		        <?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>

		            <section id="<?php echo $post->post_name; ?>" background-image:url('<?php  the_?>')>
		                <h2><?php the_title(); ?></h2>
		                <?php the_content(); ?>
		                <p><?php the_sub_field('subtitle'); ?></p>
		                <div class="images">
		                    <?php while( has_sub_field('images') ): ?>
		                        <div class="image">
		                            <p><?php the_sub_field('caption'); ?></p>
		                            <?php $image = get_sub_field('image'); ?>
		                            <img src="<?php echo $image['sizes']['square'] ?>">
		                        </div>
		                    <?php endwhile; ?>
		                </div>
		            </section>
		        <?php endwhile; ?>

		        <?php wp_reset_postdata(); ?>

		    <?php else:  ?>
		        [stuff that happens if there aren't any posts]
		    <?php endif; ?>
			</div>
		</main>

		<div class="aboutme">
			<h2>ABOUT ME</h2>
			<div class="profileAndIcons">
			<!-- <?php $image = get_field('profile_picture'); $imageUrl = $image['sizes']['medium_large'] ?><?php print_r($image) ?> -->
			<img src="<?php echo $imageUrl ?> " alt="">
			<div class="skillset">
				<?php while(has_sub_field('skillset')) : ?>
					<i class='<?php the_sub_field('skill_icon') ?>'></i>
					<?php the_sub_field('skill_name') ?>
				<?php endwhile ?>
				</div>
			</div>
			<p><?php echo get_field('profile_biography') ?></p>
		</div>

		<div class="contact">
			<h2>CONTACT</h2>
			<p><?php echo get_field('contact_paragraph') ?> </p>
			<?php the_field('contact_form_short_code') ?>
			<h3><?php echo get_field('email') ?> </h3>
			////////<div class="socialmedia">
				
			</div>
		</div>

	
	</div><!-- #primary -->

<?php

get_footer();