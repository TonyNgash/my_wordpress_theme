<?php 

	/*
		@package tony_ngash_everydayapps

		-----------Standard Post Format
	*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
			//the_title(string $before, string $after, bool $echo);
			the_title( '<h1 class="entry-title">', '</h1>' ); 
		 ?>

		 <div class="entry-meta">
		 	<?php echo eda_posted_meta();  ?>
		 </div>
		
	</header>

	<div class="entry-content">

		<?php if( has_post_thumbnail() ): ?>

			<div class="standard-featured"><?php the_post_thumbnail(); ?></div>

		<?php endif; ?>

		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>
		
	</div><!-- .entry-content -->

</article>

