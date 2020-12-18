<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yogsblog
 */

?>

<div class="container post-container mb-3">
	<div class="row post-row">
		<div class="col-lg-4">
			<div class="post-blog-image post-thumbnail m-2"> 
				<img src="<?php echo get_the_post_thumbnail_url() ?>">
			</div>
		</div>
		<div class="col-lg-8">
			<div class="post-details m-2">
				<a class="link-no-decoration" href="<?php echo get_permalink() ?>">
					<div class="post-blog-block">
						<!-- post-blog-image -->
						<p class="tag-title">
							<?php
								$categories = get_the_category();
								$categoryNames = [];
								if ( ! empty( $categories ) ) {
									foreach( $categories as $category ) {
											$categoryNames[] = $category->name;
									}
								}
								echo join(' | ', $categoryNames);
							?>
						</p>
						<p class="post-main-title"><?php echo get_the_title() ?></p>
						<p class="post-small-description"><?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?></p>
						<p class="postedby">By <span><?php echo the_author_meta( 'user_nicename'); ?></span> on <?php echo get_the_date() ?></p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

