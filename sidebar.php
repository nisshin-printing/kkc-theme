<?php
if ( ! is_active_sidebar( 'l-sidebar_main' ) ) {
	return;
}
?>
<aside class="l-sidebar" role="complementary">
	<?php dynamic_sidebar( 'l-sidebar_main' ); ?>
</aside>
