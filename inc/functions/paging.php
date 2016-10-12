<?php
/*
 * POST Archive paging.
 */
if ( ! function_exists( 'dtdsh_paging' ) ) :
function dtdsh_paging( $pages = '', $range = 4 ) {
	$showitems = ( $range * 2 ) + 1;
	global $paged;
	if ( empty( $paged ) ) $paged = 1;
	if ( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( ! $pages ) {
			$pages = 1;
		}
	}
	if ( 1 != $pages ) {
		echo '<div class="l-paging pagination">';
		if ( $paged < $pages ) {
			echo '<p><a href="' . get_pagenum_link( $paged + 1 ) . '" class="waves-effect" aria-label="' . ( $paged + 1 ) . '" title="次の' . $wp_query->post_count . '件を見る">次の' . $wp_query->post_count . '件を見る<i class="fa fa-angle-right"></i></a></p>';
		}
		echo '<ul aria-label="Pagination" role="navigation">';
		if ( $paged >= 2 ) {
			echo '<li class="first"><a href="' . get_pagenum_link( 1 ) . '"><i class="fa fa-fast-backward"></i></a></li>';
		} else {
			echo '<li class="first disabled"><i class="fa fa-fast-backward"></i></li>';
		}
		if ( $paged > 1 ) {
			echo '<li class="prev pagination-previous"><a href="' . get_pagenum_link( $paged-1 ) . '" aria-label="Page ' . ( $paged - 1 ) . '"><i class="fa fa-angle-left"></i></a></li>';
		} else {
			echo '<li class="prev pagination-previous disabled"><i class="fa fa-angle-left"></i></li>';
		}
		for( $i=1; $i <= $pages; $i++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
				if ( $paged == $i ) {
					echo '<li class="current">Page ' . $i . ' of ' . $pages .'</li>';
				} else {
					echo '<li><a href="' . get_pagenum_link( $i ) . '" aria-label="Page ' . $i . '">' . $i . '</a></li>';
				}
			}
		}
		if ( $paged < $pages ) {
			echo '<li class="next pagination-next"><a href="' . get_pagenum_link( $paged + 1 ) . '" aria-label="Page ' . ( $paged + 1 ) .'"><i class="fa fa-angle-right"></i></a></li>';
		} else {
			echo '<li class="next pagination-next disabled"><i class="fa fa-angle-right"></i></li>';
		}
		if ( $paged < $pages ) {
			echo '<li class="last"><a href="' . get_pagenum_link( $pages ) . '" aria-label="Page ' . $pages . '"><i class="fa fa-fast-forward"></i></a></li>';
		} else {
			echo '<li class="last disabled"><i class="fa fa-fast-forward"></i></li>';
		}
		echo '</ul></div>';
	}
}
endif;