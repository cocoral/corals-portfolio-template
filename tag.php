<?php get_header(); ?>

<div class="main">
  <div class="container">

    
        <div>
        	<h1>Tag Archives: <?php single_tag_title(); ?></h1>
      	<?php get_template_part( 'loop', 'tag' ); ?>
      	</div>
    
		<div>
		  	<h3><a href="<?php echo get_option("siteurl"); ?> ">Back Home</a></h3>
		</div>  
  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>