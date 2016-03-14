<?php get_header(); ?>

	<div id="primary" class="content-area">

		<div class="cover">	
			<div class='cover-content container'>
				<img src="<?php the_field('logo') ?>" alt="">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		        <h3><?php the_content(); ?></h3>

		        <?php endwhile; // end the loop?>

			</div>
			<div class="coverOverlay">
				<ul>
					
				</ul>
			</div>

		</div>
		<!-- end of cover -->

		<main class='main-portfolio' id='main-portfolio'>
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
			
					                <section id="<?php echo $post->post_name; ?>" class='portfolioItem clearfix' >
														<div class='portfolio-bg' style='background-image:url(<?php $imgURL = hackeryou_get_thumbnail_url($post);?><?php echo $imgURL ?>); '></div>

					                	<div class='portfolio-words'>
					                		<h4><?php the_title(); ?></h4>
					                		<p class='portfolio-subtitle'><?php the_field('subtitle'); ?></p>
					                		<div class='portfolio-image'>
					                			<img src="<?php $imgURL = hackeryou_get_thumbnail_url($post);?><?php echo $imgURL ?>" alt="portfolioImage">
					                		</div>
					                		<p><?php the_content(); ?></p>
					                		<p class='tags small'><?php the_tags('', ' ', ''); ?></p>
					                		<a target='_blank' class='portfolio-url' href="<?php echo the_field('url') ?> "><i class="fa fa-stop"></i>View Me Live</a>
					                	</div>
					                	
					                </section>
			
			
					        <?php endwhile; ?>
			
					        <?php wp_reset_postdata(); ?>
			
			
				<?php else:  ?>
					<p>Hey, your portfolio is empty.</p>
				<?php endif; ?>
			</div>
		
		</main>
		<!-- end of portfolio -->

		<div class="aboutme" id='aboutme'>
			<div class='aboutMeWrapper '>
				<h2>ABOUT</h2>
				<div class='aboutMeContent clearfix'>
					<div class="profileAndIcons">
						<?php $image = get_field('profile_picture'); $imageUrl = $image['sizes']['medium_large'] ?>
						<img class='profileImage' src="<?php echo $imageUrl ?> " alt="">
						<div class="skillset">
							<?php while(has_sub_field('skillset')) : ?>
								<div class='oneSkill'>
									<div class='iconContainer'>
										<i class='<?php the_sub_field('skill_icon') ?>'></i>
									</div>
									<p><?php the_sub_field('skill_name') ?></p>
								</div>
							<?php endwhile ?>
							<div class="oneSkill">
								<div class="iconContainer">
										<img class='skillIconImg' src="<?php bloginfo('template_directory')?>/images/indesign.png" alt="indesign">
								</div>
									<p>Indesign</p>
							</div>
					
							<div class="oneSkill">
								<div class="iconContainer">
					
										<img class='skillIconImg' src="<?php bloginfo('template_directory')?>/images/sketch.png" alt="sketch">
								</div>
									<p>Sketch</p>
							</div>
						</div>
					</div>
								
					<div class='aboutme-bio'>
						<h5><?php echo get_field('profile_biography') ?></h5>
					</div>
				</div>
			</div>
		</div> 
		<!-- end of about -->

		<div class="contact" id='contact'>
			<h2>CONTACT</h2>
			<p class='contactIntro'><?php echo get_field('contact_paragraph') ?> </p>
			<div class='contactWrapper clearfix'>
				<div class='contact-form'>

					<form action="http://www.focuspocus.io/magic/coral.xinting.he@gmail.com" method="POST">
			        	<input type="text" placeholder="Your Name" name="name" class="" required="">
			        	<input type="email" placeholder="Email Address" name="_replyto" required="">
			        	<textarea rows="10" placeholder="Message" name="message" required=""></textarea>
			        	<div class="submit">
			        		<input type="submit" value="Send" class="button">
			        	</div>
				   </form>

				</div>
				<div class='contact-emailSocial'>
					<h3><?php echo get_field('email') ?> </h3>
					<div class="socialmedia">
						<?php while(has_sub_field('social_media')) : ?>
						<div class='iconContainer'>
							<div class='icon45'>
								<a target='_blank' href="<?php the_sub_field('social_media_icons_name') ?> ">
								<i class='<?php the_sub_field('social_media_icons') ?>'></i></a>
							</div>
						</div>
						<?php endwhile ?>
					</div>
				</div>
			</div>
		</div>
		<!-- end of contact -->

	
	</div><!-- #primary -->

<?php get_footer(); ?>