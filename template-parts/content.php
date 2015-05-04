<?php
/**
 * @package PeekWP
 */
?>

<?php 
	$bg_style = '';
	if (rwmb_meta( 'peekwp_bg_color' ) != '') { 
	$bg_color = rwmb_meta( 'peekwp_bg_color' );
	$bg_style = 'style="background:'.$bg_color.';"';
}

	$text_style = '';
	$border_style = '';
	if (rwmb_meta( 'peekwp_text_color' ) != '') { 
	$text_color = rwmb_meta( 'peekwp_text_color' );
	$text_style = 'style="color:'.$text_color.';"';
	$border_style = 'style="border: 1px solid '.$text_color.';"';

} ?>

<li class="cd-item" <?php echo $bg_style; ?>>
	<a href="<?php echo get_permalink(); ?>">
		<div <?php echo $text_style; ?>>		
				<h2><?php the_title( ); ?></h2>
			
				<?php the_excerpt( ); ?>

				<?php if (rwmb_meta( 'peekwp_btn_text' ) != '') { 
	                $btn_text = rwmb_meta( 'peekwp_btn_text' );
	                echo '<b '.$border_style.'>' . $btn_text . '</b>';
	              } ?>

		</div>
	</a>
</li>