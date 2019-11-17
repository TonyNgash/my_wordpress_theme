<?php 
/* Template Name: SomePage */

/*
		This is the header template

		@package tony_ngash_everydayapps
*/
get_header();  ?>
	
<div class="YourContainer">
<?php 
  if (have_posts()) : while (have_posts()) : the_post(); 
?>
  <div class="YourContentDiv">

   <?php the_content();?>
   <h1>SomePage Pager</h1>
   <h1>SomePage Pager</h1>
   <h1>SomePage Pager</h1>
   <h1>SomePage Pager</h1>
   <h1>SomePage Pager</h1>
  </div>
  <?php endwhile; ?>
  <?php else:
        echo "no content found";
   ?>
<?php endif; ?>
 </div>

<?php get_footer();  ?>