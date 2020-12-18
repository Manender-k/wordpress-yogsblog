<section>
            <div class="banner-section">
               <div class="container main-container">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="intro-blog">
                           <div class="intro-blog-post">
                              <!-- <p class="intro-blog-author">Yogesh</p> -->
                              <div class="intro-blog-area">
                                 <h2>Lorem Ipsum Dolo Amet, Consectetur Adiscing Elit.</h2>
                                 <p class="intro-sub-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 </p>
                                 <!-- <p class="intro-blog-date">23 November 2020</p> -->
                              </div>
                              <!-- intro-blog-area -->
                           </div>
                           <!-- intro-blog-post -->
                           <div class="slogan-area">
                              <p class="slogan-text">“Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...”</p>
                              <div class="link-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                           </div>
                        </div>
                        <!-- intro-blog -->
                     </div>
                     <!-- col-md-4 -->
                     <div class="col-md-8">
                        <div class="blue-block">
                           <div class="white-border">
                              <div class="ys-letter">YS</div>
                              <div class="ys-pic "><img src="<?php echo get_template_directory_uri() ?>/images/ys-pic.png"></div>
                           </div>
                        </div>
                        <!-- blue-block -->
                     </div>
                     <!-- col-md-8 -->
                  </div>
               </div>
            </div>
            <!-- banner-section -->
         </section>
         <section>
            <!-- <div class="what-hot-block">
               <div class="title-heading-main">WHAT'S HOT</div>
               <div class="container main-container">
               	<div class="row">
               	<div class="col-md-6">
               		<div class="post-blog-block">
                                  <div class="post-blog-image">
                                             <img src="images/blog-1.jpg">
               			 </div>
               			
               			 <p class="tag-title">Technology</p>
               			 <p class="post-main-title">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
               			 <p class="post-small-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
               			 <p class="postedby">By <span>Yogesh Sharma</span> on 01 December 2020</p>
               		</div>
               	
               	</div>
               
               
               	<div class="col-md-6">
               		<div class="post-blog-block">
                                  <div class="post-blog-image">
                                             <img src="images/blog-2.jpg">
               			 </div>
               			
               			 <p class="tag-title">entrepreneur</p>
               			 <p class="post-main-title">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
               			 <p class="post-small-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
               			 <p class="postedby">By <span>Yogesh Sharma</span> on 01 December 2020</p>
               		</div>
               	
               	</div>
               
               
               	</div>
               </div>
               
               </div> -->
            <!-- what-hot-block -->
            <div class="ys-block">
               <div class="title-heading-main">YOGESH’S BLOG</div>
               <div class="container main-container">
                  <div class="row">
										<?php
											$recent_posts = wp_get_recent_posts(array(
												'numberposts' => 2, // Number of recent posts thumbnails to display
												'post_status' => 'publish' // Show only the published posts
											));
										?>

										<?php foreach($recent_posts as $post) : ?>
											<div class="col-md-6">
												<a class="link-no-decoration" href="<?php echo get_permalink($post['ID']) ?>">
													<div class="post-blog-block">
														<div class="post-blog-image">
																<img src="<?php echo get_the_post_thumbnail_url($post['ID'], 'full') ?>">
														</div>
														<!-- post-blog-image -->
														<p class="tag-title">
															<?php
																$categories = get_the_category($post['ID']);
																$categoryNames = [];
																if ( ! empty( $categories ) ) {
																	foreach( $categories as $category ) {
																			$categoryNames[] = $category->name;
																	}
																}
																echo join(' | ', $categoryNames);
															?>
														</p>
														<p class="post-main-title"><?php echo get_the_title($post['ID']) ?></p>
														<p class="post-small-description"><?php echo wp_strip_all_tags( get_the_excerpt($post['ID']), true ); ?></p>
														<p class="postedby">By <span><?php echo the_author_meta( 'user_nicename' , $post['post_author'] ); ?></span> on <?php echo get_the_date('', $post['ID']) ?></p>
													</div>
												</a>
                        <!-- post-blog-block -->
                     </div>
										<?php endforeach ?>
                     
                  </div>
                  <!-- row -->	
                  <div class="read-more-btn">
										<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
											<button type="button" class="heartbeat">read more</button>
										</a>
                     
                  </div>
               </div>
               <!-- container main-container -->
            </div>

            <?php
               $monthly_posts = wp_get_recent_posts(array(
                  'post_type' => 'monthly-post',
                  'numberposts' => 1, // Number of recent posts thumbnails to display
                  'post_status' => 'publish' // Show only the published posts
               ));
            ?>
            <?php if (!empty($monthly_posts)) : ?>
               <?php $mPost = $monthly_posts[0]; ?>
               <div class="month-block">
                  <div class="container main-container">
                     <div class="row">
                        
                        <div class="col-md-7 pd-right-0">
                           <div class="month-image-block">
                              <div class="month-image">
                                 <img src="<?php echo get_the_post_thumbnail_url($mPost['ID'], 'full') ?>">
                              </div>
                              <!-- month-image -->
                           </div>
                           <!-- month-image-block -->
                        </div>
                        <div class="col-md-5 pd-left-0">
                           <div class="month-blog-text">
                              <p class="month-small-title">most popluar this month</p>
                              <p class="month-main-title">
                                 <a class="link-no-decoration" href="<?php echo get_permalink($mPost['ID']) ?>">
                                    <?php echo get_the_title($mPost['ID']) ?>
                                 </a>
                              </p>
                              <p class="month-small-description"><?php echo wp_strip_all_tags( get_the_excerpt($mPost['ID']), true ); ?></p>
                              <p class="postedby">By <span><?php echo the_author_meta( 'user_nicename' , $mPost['post_author'] ); ?></span> on <?php echo get_the_date('', $mPost['ID']) ?></p>
                           </div>
                           <!-- month-blog-text -->
                        </div>
                     </div>
                  </div>
               </div>
            <?php endif ?>
            <!-- ys-block -->
            
            <!-- month-block -->


            <?php
               $video_posts = wp_get_recent_posts(array(
                  'post_type' => 'video-post',
                  'numberposts' => 3, // Number of recent posts thumbnails to display
                  'post_status' => 'publish' // Show only the published posts
               ));
            ?>
            <?php if (!empty($video_posts)) : ?>
            
            <div class="video-image-slideblog">
               <div class="text-transparent"><img class="flicker-in-1 " src="<?php echo get_template_directory_uri() ?>/images/ys-transparent.png"></div>
               <div class="container main-container video-slide-container">

                  <?php foreach ($video_posts as $post) : ?>
                  <div class="row video-slide">
                     <div class="col-md-7">
                        <div class="video-title-heading-main">more from Yogesh</div>
                        
                        <div class="video-details">
                           <p class="video-tag">Video</p>
                           <p class="video-main-title">
                              <a class="link-no-decoration" href="<?php echo get_permalink($post['ID']) ?>">
                              <?php echo get_the_title($post['ID']) ?>
                              </a>
                           </p>
                           <p class="video-small-description"><?php echo wp_strip_all_tags( get_the_excerpt($post['ID']), true ); ?></p>
                           <p class="videopostedby">By <span><?php echo the_author_meta( 'user_nicename' , $post['post_author'] ); ?></span> on <?php echo get_the_date('', $post['ID']) ?></p>
                        </div>
                        <div class="video-click-arrow">
                           <span id="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span>
                           <span id="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="video-image-block">
                           <video autoplay="" class="hero-video" data-automation="VideoPlayer_video_video" loop="" muted="" playsinline="" >
                              <source src="<?php echo get_field( 'featured_video', $post['ID'] ) ?>">
                           </video>
                        </div>
                        <!-- video-image-block -->
                     </div>
                  </div>
                  <?php endforeach; ?>
               
               </div>
            </div>
            <?php endif; ?>
            <!-- video-image-slideblog -->
         </section>