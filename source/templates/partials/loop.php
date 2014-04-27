<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-header">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
					  <?php the_title(); ?>
					</a>
				</h2>
				<p><?php the_time( __( 'F jS, Y', 'MediumTheme' ) ); ?></p>
				<p><?php the_author(); ?></p>
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php } ?>
			</div><!--end post-header-->
			<div class="entry">
				<?php the_content( __( 'Read more', 'MediumTheme' )); ?>
				<?php edit_post_link( __( 'Edit this', 'MediumTheme' ), '<p>', '</p>' ); ?>
			</div><!--end entry-->
			<div class="post-footer">
				<p><?php comments_popup_link( __( 'Leave a comment', 'MediumTheme' ), __( '1 Comment', 'MediumTheme' ), __( '% Comments', 'MediumTheme' ) ); ?></p>
			</div><!--end post-footer-->
		</div><!--end post-->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<div class="pagination index">
			<div class="alignleft">
				<?php previous_posts_link( __( '&larr; Newer entries', 'MediumTheme' )); ?>
			</div>
			<div class="alignright">
				<?php next_posts_link( __( 'Older entries &rarr;', 'MediumTheme' )); ?>
			</div>
		</div><!--end pagination-->
	<?php else : ?>
<?php endif; ?>