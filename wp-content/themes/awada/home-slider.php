<?php $awada_theme_options = awada_theme_options();
if($awada_theme_options['home_slider_enabled']==1){ ?>
<div id="slider" class="sl-slider-wrapper demo-2">
	<div class="sl-slider" >
		<?php if(isset($awada_theme_options['home_slider_posts']) && $awada_theme_options['home_slider_posts'] != "") {
			$j = 0;
			foreach ($awada_theme_options['home_slider_posts'] as $post_id) {
			$slider = get_post($post_id);
				if ($j % 2 == 0){	$orientation = 'horizontal';	}
				else{	$orientation = 'vertical';	}
			?>
				<div class="sl-slide" data-orientation="<?php echo $orientation; ?>" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
					<div class="sl-slide-inner">
						<?php echo get_the_post_thumbnail($slider->ID, 'awada_home_slider_bg_image', array('class' => 'img-responsive bg-img')); ?>
						<h2><?php echo esc_attr($slider->post_title); ?></h2>
						<blockquote><p><?php echo esc_attr(wp_trim_words($slider->post_content, 8, '...')); ?></p></blockquote>
					</div>
				</div>
		<?php $j++; //endif;
		} } else {
			$slider_title = array(__('Highly Customizable', 'awada'), __('Responsive Theme', 'awada'), __('Corporate Theme', 'awada'));
			for($j=1 ; $j<=3 ; $j++){
			if ($j % 2 == 0){	$orientation = 'horizontal';	}
				else{	$orientation = 'vertical';	} ?>
					<div class="sl-slide" data-orientation="<?php echo $orientation; ?>" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<img class="img-responsive bg-img" src="<?php echo get_template_directory_uri(); ?>/images/slider/s<?php echo $j; ?>.jpg">
							<h2><?php echo esc_attr($slider_title[$j-1]); ?></h2>
							<blockquote><p><?php _e('Lorem ipsum dolor sit amet, consectetur.', 'awada'); ?></p></blockquote>
						</div>
					</div>
		<?php } $j=3;
		} ?>
	</div><!-- /sl-slider -->
	<?php if($j>1){ ?>
	<nav id="nav-arrows" class="nav-arrows">
		<span class="nav-arrow-prev"><?php _e('Previous', 'awada'); ?></span>
		<span class="nav-arrow-next"><?php _e('Next', 'awada'); ?></span>
	</nav>
				
	<nav id="nav-dots" class="nav-dots">
		<?php for($i=1; $i<=$j; $i++) { ?>
			<span <?php echo $i==1 ? 'class="nav-dot-current"' : ""; ?>></span>
		<?php } ?>
	</nav>
	<?php } ?>

</div><!-- /slider-wrapper -->
<?php } ?>