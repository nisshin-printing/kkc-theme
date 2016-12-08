<?php
/*
 * Form part creator.
 */
function dtdsh_make_formpart( $id, $value, $switch = 'top' ) {
	if ( 'top' === $switch ) {
		$dtdsh = get_option( 'dtdsh_top' );
	} else {
		$dtdsh = get_option( 'dtdsh_event' );
	}
	if ( 0 === $id ) {
		$val = ( isset( $dtdsh[esc_attr( $value['fn'] )] ) ) ? $dtdsh[esc_attr( $value['fn'] )] : '';
	} else {
		$val = get_post_meta( $id, $value['fn'], true );
	}
	$istextarea = ( 'textarea' === $value['type'] ) ? 'nis_mn_textarea' : '';
	if ( 'help' === $value['type'] ) {
		$op = '<tr class="nis-table_row"><th class="nis-table_title nis-mn-help-part">ヘルプ</th><td class="nis-table_data">';
	} else {
		if ( isset( $value['desc'] ) ) {
			$op = '<tr class="nis-table_row"><th class="nis-table_title has-nis_helper"><span class="nis-table_helper">?<em>' . $value['desc'] . '</em></span><span class="nis-options_title">' . $value['name'] . '</span></th><td class="nis-table_data">';
		} else {
			$op = '<tr class="nis-table_row"><th class="nis-table_title"><span class="nis-options_title">' . $value['name'] . '</span></th><td class="nis-table_data">';
		}
	}
	
	switch ( $value['type'] ) {
		case 'input':
			$valu = ( '' !== $val ) ? $val : $value['def'];
			$op .= '<input type="text" name="' . $value['fn'] . '" class="nis-formpart_input" value="' . esc_attr( $valu ) . '">';
			break;
			
		case 'textarea':
			$valu = ( '' !== $val ) ? $val : $value['def'];
			$op .= '<textarea name="' . $value['fn'] . '" rows="5" class="nis-formpart_textarea">' . stripslashes( $valu ) . '</textarea>';
			break;

		case 'imagemanager':
			$valu = ( '' !== $val ) ? $val : $value['def'];
			$op .= '<input class="js-toggle-imgmng nis-formpart_imgmng ' . $value['fn'] . '" type="text" name="' . $value['fn'] . '" value="' . esc_url($valu) . '" rel="' . $value['fn'] . '"><span class="nis-formpart_imgclear js-clear-input">クリア</span>';
			break;

			//create and innitialize the colorpicker
		case 'colorpicker':
			$valu = ( '' !== $val ) ? $val : $value['def'];
			$op .= '<input type="text" class="js-color-pickme nis-formpart_pickme ' . $value['fn'] . '" name="' . $value['fn'] . '" value="' . esc_attr( $val ) . '" size="29" style="background: ' . $val . ';" rel=".' . $value['fn'] . '">';
			break;
			
		case 'date':
			$valu = ( '' !== $val ) ? $val : $value['def'];
			$op .= '<input type="date" name="' . $value['fn'] . '" value="' . $val . '" class="nis-formpart_date">';
			break;
			
		case 'time':
			$valu = ( '' !== $val ) ? $val : $value['def'];
			$op .= '<input type="time" name="' . $value['fn'] . '" value="' . esc_attr( $val ) . '" class="nis-formpart_time" step="1800">';
			break;

		case 'help':
			$op .= '
					<span class="nis-formpart_help">このテーマの作成者は日進印刷株式会社です。<br>ご不明点について、気軽に聞いてください。</span><br><br>
					<span class="nis-help-subtitle">日進印刷株式会社</span><br>
					<span class="nis-help-discussion">電話番号： 082-237-1611<br>FAX番号： 082-237-1622<br>E-Mail： nisshin@dtdsh.com</span><br>チャットワーク： <a href="https://chatwork.com/nisshin-dtdsh" target="_blank">https://chatwork.com/nisshin-dtdsh</a><br>
					<span class="nis-help-itemlink"><a href="http://dtdsh.com/">オンラインのヘルプファイルも準備中です。</a></span>
				';
			break;
	}
	return $op .= '</td></tr>';
}