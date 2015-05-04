<?php
/**
 * @package PeekWP
 */
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

			<?php /* 
			<div class="entry-meta">
				<?php peekwp_posted_on(); ?>
			</div><!-- .entry-meta -->
			*/ ?>

		</div><!-- .entry-header -->

		<div class="entry-content">

			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'peekwp' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php /*
		<footer class="entry-footer">
			<?php peekwp_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		*/ ?>
	</article><!-- #post-## -->
