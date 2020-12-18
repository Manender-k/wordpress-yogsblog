<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yogsblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<div class='white'>
	<div class='squares'>
			<div class='square'></div>
			<div class='square'></div>
			<div class='square'></div>
			<div class='square'></div>
			<div class='square'></div>
			<div class='square'></div>
			<div class='square'></div>
			<div class='square'></div>
			<div class='square'></div>
			<div class='square'></div>
	</div>
</div>
<div class='grey'></div>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container-fluid">
	<header>
		<div class="header-wrapper">
				<div class="container main-container">
					<div class="row">
							<div class="col">
								<div class="heading-style">
									<a class="link-no-decoration" href="<?php echo get_site_url() ?>">
										<h1>YOGESH SHARMA</h1>
										<p>CEO and Co-founder of Mamsys</p>
									</a>
								</div>
							</div>
					</div>
					<!-- row -->
				</div>
				<!-- container -->
		</div>
		<!-- header-wrapper -->
	</header>
	
