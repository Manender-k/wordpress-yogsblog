<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yogsblog
 */

?>

<section>
	<div class="blog-info-area">
			<div class="container">
				<div class="row">
						<div class="col-md-12">
							<?php	$categories = get_the_category() ?>
							<?php if (!empty($categories)) : ?>
								<p class="tag-title">
									<?php
										$categoryNames = [];
										if ( ! empty( $categories ) ) {
											foreach( $categories as $category ) {
													$categoryNames[] = $category->name;
											}
										}
										echo join(' | ', $categoryNames);
									?>
								</p>
							<?php endif; ?>
								

							
							<h2><?php the_title() ?></h2>
							<p class="postedby">By <span><?php echo the_author_meta( 'user_nicename'); ?></span> on <?php echo get_the_date() ?></p>
							<?php if ( get_post_type() == 'post' || get_post_type() == 'monthly-post') : ?>
								<div class="post-blog-image"> <img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
							<?php elseif ( get_post_type() == 'video-post') : ?>
								<div class="post-blog-image video-image-block">
										<video autoplay="" class="hero-video" data-automation="VideoPlayer_video_video" loop="" muted="" playsinline="" >
											<source src="<?php echo get_field('featured_video') ?>">
										</video>
								</div>
							<?php endif; ?>

							<div class="post-small-description blog-post-content">
								<?php the_content() ?>
							</div>
							<div class="post-content-end-spacer"></div>
						</div>
							
							
						<!-- col-md-12 -->
						<div class="col-md-6">
							<?php $posttags = get_the_tags(); ?>
							<?php if($posttags) : ?>
								<ul class="tag-info-list">
									<li>Tags:</li>
									<?php foreach($posttags as $tag) : ?>
									<li><a><?php echo $tag-> name ?></a></li>
									<?php endforeach ?>
							</ul>
							<?php endif ?>
							<!-- tag-info-list -->
						</div>
						<!-- col-md-6 -->
						<div class="col-md-6">
							<ul class="social-info-list">
									<li>Share:</li>
									<li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink() ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="http://twitter.com/share?url=<?php echo get_permalink() ?>" ><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink() ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<!-- <li><a ><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
							</ul>
							<!-- social-info-list -->
						</div>
						<!-- col-md-6 -->
				</div>
			</div>
	</div>
	<!-- blog-info-area -->
</section>


