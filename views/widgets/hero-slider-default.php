<?php
/**
 * Widget template
 *
 * @var array $instance
 *
 * @var string $before_widget Page builder config. Default:
 *     <div class="pb-widget pb-widget-num-2 widget_hero-slider" data-index="1" >
 *         <div class="pb-widget-inner" >
 *
 * @var string $after_widget Page builder config. Default
 *     </div></div>
 */
?>

<?php echo $before_widget; ?>
	<div class="fade-gallery paused">
		<a href="#" class="btn-prev"><i class="icon-chevron-thin-left"></i></a>
		<a href="#" class="btn-next"><i class="icon-chevron-thin-right"></i></a>
		<ul class="gmask">
			<?php foreach ( $instance['images'] as $one_image ) : ?>
				<li class="active">
					<div class="gallery-info">
						<div class="photo"><?php rwd_attachment_image( $one_image['image'], 'hd', 'img' ); ?></div>
						<div class="description">
							<p><?php echo esc_html( $one_image['title'] ); ?></p>
							<div><?php echo esc_html( $one_image['description'] ); ?></div>
							<div><?php echo esc_html( $one_image['button_text'] ); ?></div>
							<div><?php echo esc_html( $one_image['button_link'] ); ?></div>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
<?php echo $after_widget; ?>
