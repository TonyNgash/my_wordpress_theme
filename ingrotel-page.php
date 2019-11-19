<?php 
/*
    Template Name: ingrotel-page
		This is the header template

		@package tony_ngash_everydayapps
*/
get_header();  ?>
<!--------==============================================--------->
<section class="ingrotel-image-fader-background">
  <img src="<?php bloginfo('template_url'); ?>/img/image-10" class="ingrotel-fader-image-1">
  <img src="<?php bloginfo('template_url'); ?>/img/image-9" class="ingrotel-fader-image-2">
  <img src="<?php bloginfo('template_url'); ?>/img/image-18" class="ingrotel-fader-image-3">
  <img src="<?php bloginfo('template_url'); ?>/img/image-19" class="ingrotel-fader-image-4">
  
<!--   <div class="fg">
    
  </div> -->
  <div class="ingrotel-image-fader-overlay"></div>
  <div class="ingrotel-page-title-container"> 
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="ingrotel-page-title-heading-container">
                  
                  <div class="ingrotel-page-title-heading-bg">
                    <div class="ingrotel-page-title-heading">
                      <h1><?php echo $pagename; ?></h1>
                    </div>
                    <ul class="breadcrumbs-links">
                      <li><a href="#">home</a></li>
                      <li><a href="#"><?php echo $pagename; ?></a></li>
                    </ul>
                  </div>
                  
              </div><!-- .ingrotel-page-title-heading-container -->
              <div class="ingrotel-page-text-container">
                  <p class="ingrotel-page-text">
                    Ingrotel is a provider of products and solutions in Satcom broadband, 
                    data cabling , Microwave components and television distribution. 
                    <br>
                    <br>
                    We carry 
                    only quality products from leading European manufacturers. This enables us 
                    to be a supplier to our customers in a very reliable terms. 
                    <br>
                    <br>
                    We only sell the 
                    products to distributors, installers, cable TV companies of radio, television 
                    and electronic equipment.
                  </p>
              </div><!-- .ingrotel-page-text-container -->
          </div><!-- .col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .ingrotel-page-title-container -->
  <!-- <div class="ingrotel-image-fader-blend-area"></div> -->
  <div class="unequal-bottom-boxes">
    <div class="unequal-box-1"></div>
    <div class="unequal-box-2"></div>
    <div class="unequal-box-3"></div>
    <div class="unequal-box-4"></div>
    <div class="unequal-box-5"></div>
    <div class="unequal-box-6"></div>
    <div class="unequal-box-7"></div>
    <div class="unequal-box-8"></div>
  </div>
  <div class="grid-columns">
    <span class="grid-column-1"></span>
    <span class="grid-column-2"></span>
    <span class="grid-column-3"></span>
    <span class="grid-column-4"></span>
    <span class="grid-column-5"></span>
    <span class="grid-column-6"></span>
    <span class="grid-column-7"></span>
    <span class="grid-column-8"></span>
  </div>
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