<?php
/**
 * @var string $item_hover_animation_class
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
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/thumbnail.php';
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/title.php';
                    require OWCE_PLUGIN_PATH . '/includes/widgets/views/subtitle.php';
                echo wp_kses_post( $link_end );
				require OWCE_PLUGIN_PATH . '/includes/widgets/views/social.php';
				?>
			</div>
		<?php
		endforeach;
	endif;
endif;
