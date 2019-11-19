<?php 
/*
    Template Name: ingrotel-page
		This is the header template

		@package tony_ngash_everydayapps
*/
get_header();  ?>
<!--------==============================================--------->
<section class="ingrotel-image-fader-background">
  <img src="<?php bloginfo('template_url'); ?>/img/image-1" class="ingrotel-fader-image-1">
  <img src="<?php bloginfo('template_url'); ?>/img/image-2" class="ingrotel-fader-image-2">
  <img src="<?php bloginfo('template_url'); ?>/img/image-3" class="ingrotel-fader-image-3">
  <img src="<?php bloginfo('template_url'); ?>/img/image-4" class="ingrotel-fader-image-4">
  <div class="ingrotel-image-fader-overlay"></div>
  <div class="ingrotel-page-title-container"> 
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="ingrotel-page-title-heading-container">
                  <div class="ingrotel-page-title-heading-bg">
                  </div>
                  <div class="ingrotel-page-title-heading">
                    <h1>About</h1>
                  </div>
                  <ul class="breadcrumbs-links">
                    <li><a href="#">home</a></li>
                    <li><a href="#">about</a></li>
                  </ul>
              </div><!-- .ingrotel-page-title-heading-container -->
              <div class="ingrotel-page-text-container">
                  <p class="ingrotel-page-text">
                    Ingrotel is a provider of products and solutions in Satcom broadband, 
                    data cabling , Microwave components and television distribution. We carry 
                    only quality products from leading European manufacturers. This enables us 
                    to be a supplier to our customers in a very reliable terms. We only sell the 
                    products to distributors, installers, cable TV companies of radio, television 
                    and electronic equipment.
                  </p>
              </div><!-- .ingrotel-page-text-container -->
          </div><!-- .col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .ingrotel-page-title-container -->
  <div class="ingrotel-image-fader-blend-area"></div>
</section><!-- .ingrotel-image-fader-background -->
<p>
                  <?php 
                    if (have_posts()) : while (have_posts()) : the_post(); 
                  ?>
                  <?php the_content();?>
                  <?php endwhile; ?>
                  <?php else:
                        echo "no content found";
                   ?>
                <?php endif; ?>
          </p>

<?php get_footer();  ?>