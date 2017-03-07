<?php
/**
 * Changelog
 */

$Awada_lite = wp_get_theme( 'Awada' );

?>
<div class="awada-lite-tab-pane" id="changelog">

	<div class="awada-tab-pane-center">
	
		<h1>awada Lite <?php if( !empty($Awada_lite['Version']) ): ?> <sup id="awada-lite-theme-version"><?php echo esc_attr( $Awada_lite['Version'] ); ?> </sup><?php endif; ?></h1>

	</div>

	<?php
	WP_Filesystem();
	global $wp_filesystem;
	$Awada_lite_changelog = $wp_filesystem->get_contents( get_template_directory().'/CHANGELOG.md' );
	$Awada_lite_changelog_lines = explode(PHP_EOL, $Awada_lite_changelog);
	foreach($Awada_lite_changelog_lines as $Awada_lite_changelog_line){
		if(substr( $Awada_lite_changelog_line, 0, 3 ) === "###"){
			echo '<h1>'.substr($Awada_lite_changelog_line,3).'</h1>';
		} else {
			echo $Awada_lite_changelog_line,'<br/>';
		}
	}

	?>
	
</div>