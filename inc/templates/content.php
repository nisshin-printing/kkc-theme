<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'このページヘアクセスする権限がありません！　　　You do not have sufficient permissions to access this page!' );
}
/*
 * Page.
 */
if ( is_page() ) :
	echo '<h1>', the_title(), '</h1>';
	the_content();
elseif ( is_single() ) :
/*
 * Single POST.
 */
?>
<h1><time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"><?php the_date(); ?></time><span class="show-for-large"> | </span><?php the_title(); ?></h1>
<?php
	the_content();
elseif ( is_archive() ) :
	// Add "News!".
	$days = 3;
	$today = date_i18n('U');
	$entry = get_the_time('U');
	$elapsed = date( 'U', ( $today - $entry ) ) / 86400;
	$is_new = ( $days > $elapsed ) ? '<span class="new-label">New</span>' : '';
?>
<div class="post-list row align-middle">
	<div class="post-container column small-12">
		<p class="info-box"><time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"><?php the_date(); ?></time><?php the_category( ' ', 'multiple', false ); echo $is_new; ?></p>
		<div class="row align-middle mb2">
			<?php
			if ( has_post_thumbnail() ) :
			?>
				<div class="column small-4"><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a></div>
				<div class="column small-8"><h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3></div>
			<?php
				else:
			?>
				<div class="column"><h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3></div>
			<?php
				endif;
			?>
		</div>
	</div>
</div>
<?php
endif;