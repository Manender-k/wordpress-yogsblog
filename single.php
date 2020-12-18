<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yogsblog
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		?>

		<section>
			<div class="pre-next">
					<div class="pre-next-inner">
						<div class="container border-style">
								<div class="row">
									<div class="col-md-6">
										<?php $prevLink = get_previous_post_link('%link') ?>
										<?php if (!empty($prevLink)) : ?>
											<ul class="previous-text">
												<li>
														<span class="arrow-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
														<span class="heading-text">previous article</span>
														<span class="subtitle-text"><?php echo $prevLink ?></span>
												</li>
											</ul>
										<?php endif; ?>
											<!-- previous-text -->
									</div>
									<div class="col-md-6">
										<?php $nextLink = get_next_post_link('%link') ?>
										<?php if (!empty($nextLink)) : ?>
											<ul class="next-text">
												<li>
														<span class="arrow-right"><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
														<span class="heading-text"><a href="">next article</a></span>
														<span class="subtitle-text"><?php echo $nextLink ?></span>
												</li>
											</ul>
										<?php endif; ?>
											<!-- next-text -->
									</div>
								</div>
						</div>
					</div>
					<!-- pre-next-inner -->
			</div>
			<!-- pre-next -->
		</section>

		<?php

			// If comments are open or we have at least one comment, load up the comment template.
			/* if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; */

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
