<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package WordPress
* @subpackage Twenty_Nineteen
* @since 1.0.0
*/

get_header();
?>

<!-- start -->
<main class="py-4" style="min-height: 854px;">
<section class="blog_container blog_details">
	<div class="responsive_container">
		<div class="breadcrumbs">
			<a href="/">Home</a>
			<a href="<?php the_permalink() ?>" class="inner_page"><?php the_title() ?></a>
		</div>
		<div class="blogPage_details">
				<img src="/wp-content/themes/discoverleadership/images/blog-img.png" alt="" class="blogPage_img">
				<div class="blog">
					<div class="blog_main">
						<h2 class="blog_title"><?php single_post_title();  ?></h2>
						<div class="blog_info">
							<div class="blog_info_left">
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
							<div class="blog_category">Category : <span><?php

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
						?></span></div>
						</div>
						<div class="blog_content">
							<p>
								<?php

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	the_content();

	// get_template_part( 'template-parts/content/content', 'single' );

	// if ( is_singular( 'attachment' ) ) {
	// 	// Parent post navigation.
	// 	the_post_navigation(
	// 		array(
	// 			'prev_text' => _x( '<span class="meta-nav">Published in</span><br/><span class="post-title">%title</span>', 'Parent post link', 'twentynineteen' ),
	// 		)
	// 	);
	// } elseif ( is_singular( 'post' ) ) {
	// 	// Previous/next post navigation.
	// 	the_post_navigation(
	// 		array(
	// 			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
	// 				'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
	// 				'<span class="post-title">%title</span>',
	// 			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
	// 				'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
	// 				'<span class="post-title">%title</span>',
	// 		)
	// 	);
	// }

	// If comments are open or we have at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) {
	// 	comments_template();
	// }

endwhile; // End of the loop.
?>
	</p>
	<div class="post_share_wrap">
		<span>Share this post : </span>
		<a href="#"><i class="lc lc_fb"></i></a>
		<a href="#"><i class="lc lc_twitter"></i></a>
		<a href="#"><i class="lc lc_mail2"></i></a>
	</div>
</div>

<!-- comments box -->
<div class="blog_comment_wrap">
	<!-- <h3 class="blog_comment_title">Comments</h3> -->
	<!-- <ul class="blog_comment_main">

		<li class="blog_comment">
			<div class="comment_info">
				<i class="lc lc_user_icon"></i>
				<div class="comment_by">
					<span><?php ?></span>
					<span class="date">December 10, 2018 at 11:55 am</span>
				</div>
			</div>
			<p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis justo non nisi dictum, id tempus turpis blandit. Maecenas leo magna, maximus tristique quam.</p>
		</li>
	</ul> -->

	<?php
	   //  $args = array(
	   //      'user_id' => get_the_author_meta('ID'),
	   //      'number' => 10, // how many comments to retrieve
	   //      'status' => 'approve'
	   //      );

	   //  $comments = get_comments( $args );

	   //  if ( $comments )
	   //  {
	   //      $output.= '<ul class="blog_comment_main">';
	   //      foreach ( $comments as $c )
	   //      {
	   //      	$output.= '<li class="blog_comment">';
				// $output.= '<div class="comment_info">';
				// $output.= '<i class="lc lc_user_icon"></i>';
				// $output.= '<div class="comment_by">';
				// $output.= '<span>'.get_comment_author().'</span>';
				// $output.= '<span class="date">'. mysql2date("m/d/Y", $c->comment_date, $translate).'</span>';
				// $output.= '</div>';
				// $output.= '</div>';
				// $output.= '<p class="comment">'.comment_text().'</p>';
				// $output.= '</li>';


	        
	   //      }
	   //      $output.= '</ul>';

	   //      echo $output;
	   //  } else { echo "No comments made";}
	?>
</div>

<!-- comments form -->
<!-- <div class="blog_comment_input">
	<h3 class="blog_comment_title">Leave your comments</h3>
	 <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment_form">
		<textarea name="comment" class="review_textarea" cols="30" rows="8" placeholder="Type your review here"></textarea>
		<div class="comment_fields">
			<input type="text" name="author" placeholder="Name">
			<input type="email" name="email" placeholder="Email Id">
		</div>
		<button type="submit" class="baseBtn outlinedBtn lightGreyBtn" name="button">Add Comment</button>
		<?php comment_id_fields(); ?>
               
        <?php do_action('comment_form', $post->ID); ?> 
	</form>
</div> -->
</div>

<!-- sidebar box -->
<aside class="blog_sidebar">
	<div class="blog_sidebar_card">
		<h6 class="siderbar_title">Author</h6>
		<div class="sidebar_card_inner">
			<div class="author_profile">
				<img src="/wp-content/themes/discoverleadership/images/blog-author-pic.png" alt="" class="author_profile_img">
				<h3 class="author_name">
					<?php 
						if(get_the_author() != 0) {
							get_the_author(); 
						} else {
							echo "Admin";
						} 
					?>
				</h3>
				<p class="author_about">Former Director General of Police</p>
			</div>
		</div>
	</div>
	<div class="blog_sidebar_card">
		<h6 class="siderbar_title">Tags</h6>
		<div class="sidebar_card_inner">
			<ul class="sidebar_card_tags">
				<?php

					// get categories 
					$tags = get_the_tags();
					$separator = ' ';
					$output = '';
					if ( ! empty( $tags ) ) {
					    foreach( $tags as $tag ) {
					        $output .= '<li><a href="' . esc_url( get_category_link( $tag->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $tag->name ) ) . '">' . esc_html( $tag->name ) . '</a></li>' . $separator;
					    }
					    echo trim( $output, $separator );
					}
				?>
				
				
			</ul>
		</div>
	</div>

	<!-- related articles box -->
	<div class="blog_sidebar_card">
		<h6 class="siderbar_title">Related Articles</h6>
		<div class="sidebar_card_inner">
			<?php

				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );

				if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>
				 	<ul class="sidebar_articales"> 
				        <li style="margin-top: 20px;">
				        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="/wp-content/themes/discoverleadership/images/blog-articales-img.jpg" alt="" class="blog_article_img"><h4 class="articale_title"><?php the_title(); ?></h4></a>
				        </li>
				    </ul>   
			<?php } wp_reset_postdata(); ?>				
		</div>
	</div>

</aside>
</div>
<div class="blog_nav">
	<ul >
		<?php

			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
			$arrow = 0;
			if( $related ) foreach( $related as $post ) {
				$arrow++;
				if($arrow == 2) { ?>
					<li>
						<a href="<?php the_permalink() ?>">
							<span>
								<h4><?php the_title() ?></h4>
								<i class="lc lc_chevron_right"></i>
							</span>
							<img src="/wp-content/themes/discoverleadership/images/blog-nav-img.png" alt="">
						</a>
					</li>
				<?php
				} else { ?>
					
					<li>
						<a href="<?php the_permalink() ?>">
							<img src="/wp-content/themes/discoverleadership/images/blog-nav-img.png" alt="">
							<span>
								<i class="lc lc_chevron_left"></i>
								<h4 ><?php the_title() ?></h4>
							</span>
						</a>
					</li>
				<?php } setup_postdata($post); ?>
				<?php } wp_reset_postdata(); ?>
	</ul> 
</div>
</div>
</div>
</section>

<!-- Offerings box -->
<section class="webcast_cards_container">
<div class="responsive_container">
	<div class="cards_list_wrap">
		<div class="cards_type_head">
			<h3>Other offerings</h3>
		</div>
		<div class="cards_wrap bottom_containers">
			<a href="{{ route('leadership-profilers') }}" class="card_main other box_shadow">
				<i class="lc lc_skills"></i>
				<h4>Profilers</h4>
				<span>Take a profiler to become aware of your orientation.</span>
				<span class="read_more_offering">Read more</span>
			</a>
			<a href="{{ route('leadership-consulting') }}" class="card_main other box_shadow">
				<i class="lc lc_video_conference"></i>
				<h4>Expert Consulting</h4>
				<span>Choose expert consultation for your personal guidance.</span>
				<span class="read_more_offering">Read more</span>
			</a>
			<a href="{{ route('leadership-modules') }}" class="card_main other box_shadow">
				<i class="lc lc_folder"></i>
				<h4>Courses</h4>
				<span>Curated modules focused on various leadership abilities.</span>
				<span class="read_more_offering">Read more</span>
			</a>
			<a href="{{ route('leadership-webinars') }}" class="card_main other box_shadow">
				<i class="lc lc_videocall"></i>
				<h4>Webinars</h4>
				<span>Order a webinar on a topic of your choice.</span>
				<span class="read_more_offering">Read more</span>
			</a>
			<a href="#" class="card_main bg_yellow other box_shadow">
				<i class="lc lc_discovery_box"></i>
				<h4>Discovery Box</h4>
				<span>It is a tool to test for profiler recommendation.</span>
				<span class="read_more_offering">Read more</span>
			</a>
		</div>
	</div>
</div>
</section>
</main>


<?php
get_footer();
