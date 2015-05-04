<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package PeekWP
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php if (peekwp_option('footer-text') != '') {
					echo peekwp_option('footer-text');
				} else { ?>	
				<h4>Created by <a href="http://braginteractive.com">Brad Williams</a> - &copy; <?php _e('Copyright', 'peekwp'); ?> <?php echo date('Y'); ?></h4>
				<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</main> <!-- .cd-main -->

	<div class="cd-folding-panel">
		
		<div class="fold-left"></div> <!-- this is the left fold -->
		
		<div class="fold-right"></div> <!-- this is the right fold -->
		
		<div class="cd-fold-content">
			<!-- content will be loaded using javascript -->
		</div>

		<a class="cd-close" href="#0"></a>
	</div> <!-- .cd-folding-panel -->

<?php wp_footer(); ?>

</body>
</html>
