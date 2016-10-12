<?php
dtdsh_header();
ob_start();
if ( is_archive() || is_home() ) {
	$is_layout = 'archive';
	$is_archive = ' l-archive_news';
} elseif ( is_single() ) {
	$is_layout = 'post';
	$is_archive = '';
} elseif ( is_page() ) {
	$is_layout = 'page';
	$is_archive = '';
} elseif ( is_404() ) {
	$is_layout = '404';
	$is_archive = '';
} else {
	$is_layout = 'else';
	$is_archive = '';
}
echo '<section class="layout-', $is_layout, $is_archive, '">',
		'<div class="row article-body">',
			'<div class="column small-12 large-4">', dtdsh_sidebar(),'</div>',
			'<div class="column small-12 large-8">';
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'inc/templates/content' );
				endwhile;
			else :
				get_template_part( 'inc/templates/no-content' );
			endif;
			echo '</div>';
			if ( 'archive' === $is_layout || 'post' === $is_layout ) {
				dtdsh_paging();
			}
		echo '</div>',
	'</section>';
$index = ob_get_contents();
ob_end_clean();
$index = dtdsh_html_format( $index, false );
echo $index;
dtdsh_footer();