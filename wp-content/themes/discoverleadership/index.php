<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage discoverleadership
 * @since 1.0.0
 */

get_header();
?>
	
	<main class="py-4" style="min-height: 854px;">
		<section class="blog_container">
			<div class="responsive_container">
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<a href="#" class="inner_page">Blogs</a>
				</div>
				<div class="blog_head">
					<div class="blog_heading">blogs</div>
					<div class="blog_tool">
						<div class="blog_search">
							<i class="lc lc_search"></i>
						</div>
						<select class="select_box_custom" name="">
							<option>Explore by categories</option>
							<option value="0">Individual Selection</option>
							<option value="1">Program Selection</option>
						</select>
					</div>
				</div>
				<div class="blog_details">
					<div class="blog_card_wrap">

						<!-- post loop start -->
						<?php 
						global $query_string; //Need this to make pagination work 
 
						/*Setting up our custom query (In here we are setting it to show 12 posts per page and eliminate all sticky posts) */
						query_posts($query_string . '&caller_get_posts=1&posts_per_page=12');
						 
						 
						if(have_posts()) :  while(have_posts()) :  the_post(); 
						?>
						<div class="blog_card">
							<img src="/wp-content/themes/discoverleadership/images/blog-tumb.png" alt="" class="blog_thumbnail">
							<div class="blog_info_wrap">
								<h4 class="blog_title"><?php the_title(); ?></h4>
								<div class="blog_info">
									<div class="blog_author">
										<i class="lc lc_user_icon"></i>
										<span class="blog_info_title">
											<span>Author:</span>
											<span><?php 
											if(get_the_author() != 0) {
												get_the_author(); 
											} else {
												echo "Admin";
											} ?></span>
										</span>
									</div>
									<div class="blog_published_date">
										<i class="lc lc_calendar"></i>
										<span class="blog_info_title">
											<span>Published on :</span>
											<span><?php echo get_the_date(); ?></span>
										</span>
									</div>
									<div class="blog_read_time">
										<i class="lc lc_time"></i>
										<span class="blog_info_title">
											<span>4 Min Read</span>
										</span>
									</div>
								</div>
								<p class="blog_content">
									<?php echo the_excerpt(); ?>
								</p>

								<div class="blog_bottom">
									<div class="blog_category">Category : <span>
									<?php

										// get categories 
										$categories = get_the_category();
										$separator = ' ';
										$output = '';
										if ( ! empty( $categories ) ) {
										    foreach( $categories as $category ) {
										        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										    }
										    echo trim( $output, $separator );
										}
									?>
									</span></div>
									<div class="blog_tags">
										<span>Tags :</span>
										<span>
										<ul class="tags_list">
										    <?php
										    $tags = wp_get_post_tags($post->ID);
										    if ( $tags ) :
										        foreach ( $tags as $tag ) : ?>
										            <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
										        <?php endforeach; ?>

										    <?php 
										    else : ?>
										    	<li>No tags available</li>
											<?php endif; 
											?>
										</ul>

											
									</div>
									<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Monthly Events' ) ) ); ?>" class="baseBtn yellowBtn mdl-button mdl-js-button mdl-js-ripple-effect blog_read_more">Read More</a>
								</div>
							</div>
						</div>

						<?php 
							endwhile;
							endif;
						?>
						<div class="blog_card_more">
							<a href="#" class="baseBtn outlinedBtn lightGreyBtn mdl-button mdl-js-button mdl-js-ripple-effect">Load More</a>
						</div>

						<!-- post loop end -->
						
					
				</div>
			</div>
		</section>
		<section class="webcast_cards_container">
			<div class="responsive_container">
				<div class="cards_list_wrap">
					<div class="cards_type_head">
						<h3>Other offerings</h3>
					</div>
					<div class="cards_wrap bottom_containers">
						<a href="http://local.leadershipcentre.com/leadership-profilers" class="card_main other box_shadow">
							<i class="lc lc_skills"></i> 
							<h4>Profilers</h4>
							<span>Take a profiler to become aware of your orientation.</span> <span class="read_more_offering">Read more</span>
						</a>
						<a href="http://local.leadershipcentre.com/leadership-consulting" class="card_main other box_shadow">
							<i class="lc lc_video_conference"></i> 
							<h4>Expert Consulting</h4>
							<span>Choose expert consultation for your personal guidance.</span> <span class="read_more_offering">Read more</span>
						</a>
						<a href="http://local.leadershipcentre.com/leadership-modules" class="card_main other box_shadow">
							<i class="lc lc_folder"></i> 
							<h4>Modules</h4>
							<span>Curated modules focused on various leadership abilities.</span> <span class="read_more_offering">Read more</span>
						</a>
						<a href="http://local.leadershipcentre.com/leadership-webinars" class="card_main other box_shadow">
							<i class="lc lc_videocall"></i> 
							<h4>Webinars</h4>
							<span>Order a webinar on a topic of your choice.</span> <span class="read_more_offering">Read more</span>
						</a>
						<a href="http://local.leadershipcentre.com/blog#" class="card_main bg_yellow other box_shadow">
							<i class="lc lc_discovery_box"></i> 
							<h4>Discovery Box</h4>
							<span>It is a tool to test for profiler recommendation.</span> <span class="read_more_offering">Read more</span>
						</a>
					</div>
				</div>
			</div>
		</section>
	</main>

		<!-- <main id="main" class="site-main">

		<?php
		// if ( have_posts() ) {

		// 	// Load posts loop.
		// 	while ( have_posts() ) {
		// 		the_post();
		// 		get_template_part( 'template-parts/content/content' );
		// 	}

		// 	// Previous/next page navigation.
		// 	twentynineteen_the_posts_navigation();

		// } else {

		// 	// If no content, include the "No posts found" template.
		// 	get_template_part( 'template-parts/content/content', 'none' );

		// }
		?>
		
		</main> --><!-- .site-main -->
	

<?php
get_footer();
