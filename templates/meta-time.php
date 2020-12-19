<div class="amp-wp-meta amp-wp-posted-on">
	<div class="share-wrap">
		<amp-social-share type="facebook" width="30" height="30"
		  data-param-text="<?php the_title()?>"
		  data-param-app_id="170292179281"
		  data-param-url="<?php the_permalink()?>">
		</amp-social-share>
		<amp-social-share type="linkedin" width="30" height="30"
		  data-param-text="<?php the_title()?>"
		  data-param-url="<?php the_permalink()?>">
		</amp-social-share>
		<amp-social-share type="twitter" width="30" height="30"
		  data-param-text="<?php the_title()?>"
		  data-param-url="<?php the_permalink()?>">
		</amp-social-share>
		<amp-social-share type="gplus" width="30" height="30"
		  data-param-text="<?php the_title()?>"
		  data-param-url="<?php the_permalink()?>">
		</amp-social-share>
	</div>
	<time datetime="<?php echo esc_attr( date( 'c', $this->get( 'post_publish_timestamp' ) ) ); ?>">
		<?php
		echo date('d M Y', $this->get( 'post_publish_timestamp' ));
		?>
	</time>
</div>
