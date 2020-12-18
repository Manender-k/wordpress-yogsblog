<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yogsblog
 */

?>

	<footer>
		<div class="footer-inner">
				<div class="container main-container">
					<div class="row">
							<div class="profile-pic-outer">
								<div class="profile-circle"><img src="<?php echo get_template_directory_uri() ?>/images/ys-profile.png"></div>
							</div>
							<div class="profile-name">Follow Yogesh Sharma</div>
							<div class="profile-intro">Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur. </div>
							<div class="linkedin-pic"><a href="https://www.linkedin.com/in/yogsharma/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/linkedin-icon.png"></a></div>
							<div class="email-us"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:yogesh@mamsys.com">yogesh@mamsys.com</a></div>
							<div class="copyright-text">©2020 YogeshSharma. All Rights Reserved.</div>
					</div>
				</div>
		</div>
		<!-- footer-inner -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
