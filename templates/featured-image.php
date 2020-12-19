<?php
	$shutter_path = get_stylesheet_directory().'/inc/shutterstock.php';
if (file_exists($shutter_path)) include_once $shutter_path;
$featured_image = $this->get( 'featured_image' );

if ( empty( $featured_image ) ) {
	return;
}

$amp_html = $featured_image['amp_html'];
$caption = $featured_image['caption'];
echo '<!--featured'.(function_exists('has_featured_video')? ' Y':' N').(has_featured_video($this->ID)?' Y':' N').'-->';
if(function_exists('has_featured_video') && has_featured_video($this->ID)){
	$amp_html = "<a class='video-link' href='".get_the_permalink($this->ID)."'><div class='play-icon'></div>$amp_html</a>";
}


?>
<figure class="amp-wp-article-featured-image wp-caption">
	<?php if(function_exists('shutterstock_amp_logo')){
	    $shutter = shutterstock_amp_logo(get_the_ID());
	    if($shutter) echo $shutter;
    } 
    ?>
	<?php echo $amp_html; // amphtml content; no kses ?>
	<?php if ( $caption ) : ?>
		<p class="wp-caption-text">
			<?php echo wp_kses_data( $caption ); ?>
		</p>
	<?php endif; ?>
</figure>
