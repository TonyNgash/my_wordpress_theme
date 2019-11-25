<?php 

	/*
		This is the footer template

		@package tony_ngash_everydayapps
	*/

?>
<div class="footer-section-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="footer-socials-container">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-instagram"></a>
						<a href="#" class="fa fa-youtube"></a>
						<a href="#" class="fa fa-linkedin"></a>
				</div><!-- .footer-socials-container -->
			</div><!-- .col-lg-6 col-md-12 col-sm-12 col-xs-12 -->
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="footer-section-menu">
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => false
						) ); 
					?>
				</div><!-- .footer-section-menu -->
			</div><!-- .col-lg-6 col-md-12 col-sm-12 col-xs-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div>
<div class="footer-section-bottom-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="footer-section-bottom-links">
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Cookies</a></li>
						<li><a href="#">Disclaimer</a></li>
					</ul>
				</div><!-- .footer-section-bottom-links -->
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="footer-section-bottom-text">
					<p>INGRÖTEL AB Lilla Bommen 6, floor 7, 411 04 Göteborg, Sverige <a href="mailto:info@ingrotel.se">Email: info@ingrotel.se</a></p>
				</div><!-- .footer-section-bottom-text -->
			</div><!-- .col-lg-6 col-md-12 col-sm-12 col-xs-12 -->
		</div>
	</div><!-- .container -->
</div><!-- .footer-section-bottom-container -->
<?php wp_footer();  ?>

</div><!-- .side-wide-wrapper -->
</body>
</html>