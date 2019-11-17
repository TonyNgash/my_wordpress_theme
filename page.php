<?php 
/*
		This is the header template

		@package tony_ngash_everydayapps
*/
get_header();  ?>
<!--------==============================================--------->
<section class="products-section-container-top background-image-setup" style="background-image: url('<?php bloginfo('template_url'); ?>/img/products-section-bg-img');">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="products-section-heading-container">
                <h1 class="products-section-heading">
                  Products
                </h1>
            </div><!-- .products-section-heading-container -->
            <div class="products-section-text-container">
                <p class="products-section-text">
                  Ingrotel is a provider of products and solutions in Satcom broadband, 
            data cabling , Microwave components and television distribution. We carry 
            only quality products from leading European manufacturers. This enables us 
            to be a supplier to our customers in a very reliable terms. We only sell the 
            products to distributors, installers, cable TV companies of radio, television 
            and electronic equipment.
          </p>
            </div><!-- .products-section-heading-container -->
        </div><!-- .col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
    </div><!-- .row -->
  </div>
</section><!-- .products-section-container-top -->
<section class="products-section-container-bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="product-box" style="background-image: url('<?php bloginfo('template_url'); ?>/img/product-1');">
          <div class="product-name">
            <h3>Coax Connector</h3>
          </div>
          <div class="product-box-overlay"></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="product-box" style="background-image: url('<?php bloginfo('template_url'); ?>/img/product-2');">
          <div class="product-name">
            <h3>Double Coax</h3>
          </div>
          <div class="product-box-overlay"></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="product-box" style="background-image: url('<?php bloginfo('template_url'); ?>/img/product-3');">
          <div class="product-name">
            <h3>Multi Coax</h3>
          </div>
          <div class="product-box-overlay"></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="product-box" style="background-image: url('<?php bloginfo('template_url'); ?>/img/product-4');">
          <div class="product-name">
            <h3>Balun Cable</h3>
          </div>
          <div class="product-box-overlay"></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="product-box" style="background-image: url('<?php bloginfo('template_url'); ?>/img/product-5');">
          <div class="product-name">
            <h3>Special Cable</h3>
          </div>
          <div class="product-box-overlay"></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="product-box" style="background-image: url('<?php bloginfo('template_url'); ?>/img/product-6');">
          <div class="product-name">
            <h3>Single Coax</h3>
          </div>
          <div class="product-box-overlay"></div>
        </div>
      </div>
    </div><!-- .row -->
  </div>
    <!-- </div> --><!-- .products-section-products-bg -->
  </div><!-- .container-fluid -->
</section><!-- .products-section-container -->
<!--------==============================================--------->
<section class="products-section-container-top">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="products-section-heading-container">
                <h1 class="products-section-heading">
                  Products
                </h1>
            </div><!-- .products-section-heading-container -->
            <div class="products-section-text-container">
                <p class="products-section-text">
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
            </div><!-- .products-section-heading-container -->
        </div><!-- .col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
    </div><!-- .row -->
  </div>
</section><!-- .products-section-container-top -->




<?php get_footer();  ?>