<?php 
/*
    Template Name: ingrotel-fader-services
		This is the header template

		@package tony_ngash_everydayapps
*/
get_header();  ?>
<!--------==============================================--------->
<section class="ingrotel-fader-section">

  <div class="ingrotel-fader-image-bg" >
    <img class="fader-image-1" src="<?php bloginfo('template_url'); ?>/img/image-10.jpg">
    <img class="fader-image-2" src="<?php bloginfo('template_url'); ?>/img/image-9.jpg">
    <img class="fader-image-3" src="<?php bloginfo('template_url'); ?>/img/image-18.jpg">
    <img class="fader-image-4" src="<?php bloginfo('template_url'); ?>/img/image-19.jpg">
    <div class="ingrotel-fader-overlay"></div>
  </div>
  
  <div class="products-decorative-columns">
    <div class="products-columns-container">
      <span class="products-decorative-column-1"></span>
      <span class="products-decorative-column-2"></span>
      <span class="products-decorative-column-3"></span>
      <span class="products-decorative-column-4"></span>
      <span class="products-decorative-column-5"></span>
      <span class="products-decorative-column-6"></span>
      <span class="products-decorative-column-7"></span>
      <span class="products-decorative-column-8"></span>
    </div>
  </div>

  <div class="ingrotel-fader-section-content">
    <div class="ingrotel-fader-section-title">
      <div class="fader-page-title-bg"></div>
      <h1><?php echo $pagename; ?></h1>
      <div class="fader-page-bread-crumbs">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href=""><?php echo "  -  ".$pagename; ?></a></li>
        </ul>
      </div>
    </div>
    <div class="ingrotel-fader-section-write-up">
      <p>
        Ingrotel is a leader in manufacturing and distribution for control cable and electro-mechanical products. We have a rich history of designing and manufacturing cost efficient and reliable Control Cables (push and push-pull), conductive cables (wiring harnesses and leads) and electro-mechanical products. Our dedicated Engineering Design team meets industry standards with efficient, scalable and economical solutions.
Ingrotel is your expert for a multitude of special products ranging from copper braids and strands to copper-based alloys and special materials, which may be bare or coated.
We are a innovative company in the field of specialty cable assembly. Our focus is on the preparation of individual assemblies of copper and fiber optic data cables. With in-house Production facilities, combined with generous storage guarantee ensures the punctual completion of our customer orders First time – Every time !! Give us a try. We look for a fruitful association with you.



      </p>
    </div>
  </div>
  <div class="the_fake_space"></div>
  

  <div class="products-unequal-bottom-boxes">
    <span class="products-unequal-box-1"></span>
    <span class="products-unequal-box-2"></span>
    <span class="products-unequal-box-3"></span>
    <span class="products-unequal-box-4"></span>
    <span class="products-unequal-box-5"></span>
    <span class="products-unequal-box-6"></span>
    <span class="products-unequal-box-7"></span>
    <span class="products-unequal-box-8"></span>
  </div>

</section>

<section class="services-section-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="services-section-heading-container">
                <h1 class="services-section-heading">
                  Services
                </h1>
            </div><!-- .services-section-heading-container -->
          <div class="services-section-text-container">
            <p>
              Ingrotel is a leader in manufacturing and distribution for control cable and electro-mechanical products. 
            We have a rich history of designing and manufacturing cost efficient and reliable Control Cables 
            (push and push-pull), conductive cables (wiring harnesses and leads) and electro-mechanical products. 
            Our dedicated Engineering Design team meets industry standards with efficient, scalable and economical solutions.
            Ingrotel is your expert for a multitude of special products ranging from copper braids and strands to copper-based 
            alloys and special materials, which may be bare or coated
            </p>
          </div>
        </div><!-- .col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
    </div><!-- .row -->
    <div class="services-section-video-container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="services-section-video-heading">
                <h1>Exceptional Quality</h1>
                <h2>Water Proof & Sturdy Audio Cables</h2>
                <p class="services-section-right">
                  We are a innovative company in the 
              field of specialty cable assembly. 
              Our focus is on the preparation of 
              individual assemblies of copper and 
              fiber optic data cables.
              <a href="#"> Learn more..</a>
                </p>
            </div><!-- .services-section-text-col-left -->
        </div><!-- .col-lg-4 col-md-4 col-sm-4 col-xs-4 -->
        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
            <div class="services-section-video-box">
                <div class="video-wrapper video-wrapper--shadow margin-zeta-bottom">
                        <div id="video-placeholder" class="video-wrapper__placeholder background-image-setup"  style="background-image: url('<?php bloginfo('template_url'); ?>/img/services-video-overlay.jpg');">
                        </div>
                        <div class="play-button">
                          <div class="play-triangle"></div>
                        </div>
                      </div>
            </div><!-- .services-section-text-col-right -->
        </div><!-- .col-lg-8 col-md-8 col-sm-8 col-xs-8 -->

      </div><!-- .row -->
    </div><!-- .services-section-text-container -->
  </div><!-- .container -->
</section><!-- .services-section-container -->

<?php get_footer();  ?>