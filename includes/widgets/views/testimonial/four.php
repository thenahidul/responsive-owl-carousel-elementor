<?php
/**
 * @var string $item_hover_animation_class
 * @var string $field_prefix
 */
if ( ! empty( $settings ) ) :
	if ( $settings['items_list'] ) :
		$item_count = 0;
		foreach ( $settings['items_list'] as $item ) : ?>
			<?php
			$link_start = '';
			$link_end   = '';
			if ( ! empty( $item['item_url']['url'] ) ) {
				$this->add_link_attributes( 'item_url' . $item_count, $item['item_url'] );
				$link_attrs = $this->get_render_attribute_string( 'item_url' . $item_count );

				if ( ! empty( $link_attrs ) ) {
					$link_start = '<a class="owl-link" ' . wp_kses_post( $link_attrs ) . '>';
					$link_end   = '</a>';
				}
			}
			$item_count++;
			?>
			<div class="item carousel-item-<?php echo esc_attr( $item['_id'] . ' ' . $item_hover_animation_class ); ?>">
				<?php
				echo wp_kses_post( $link_start );
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/quote.php';
                    ?>
                    <div class="owl-testimonial-header">
                        <div class="owl-testimonial-header-left">
                            <?php
                            require OWCE_PLUGIN_PATH . '/includes/widgets/views/title.php';
                            require OWCE_PLUGIN_PATH . '/includes/widgets/views/subtitle.php';
                            require OWCE_PLUGIN_PATH . '/includes/widgets/views/rating.php';
                            ?>
                        </div>
                        <div class="owl-testimonial-header-right">
                            <?php
                            require OWCE_PLUGIN_PATH . '/includes/widgets/views/thumbnail.php';
                            ?>
                        </div>
                    </div>
                    <?php
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/content.php';
				echo wp_kses_post( $link_end );
				?>
			</div>
		<?php
		endforeach;
	endif;
endif;
