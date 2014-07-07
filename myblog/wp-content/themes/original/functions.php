<?php
//++++++++++++++++++++++++++++++++++++++++++++
//カスタムヘッダー

add_custom_image_header('','admin_header_style');

//標準のヘッダー画像を指定
define('HEADER_IMAGE','%s/images/header.jpg');

//ヘッダー画像の横幅と高さを指定
define('HEADER_IMAGE_WIDTH','800');
define('HEADER_IMAGE_HEIGHT','200');

//標準の文字の色を指定
define('HEADER_TEXTCOLOR', '000000');

//プレビュー部分の文字のデザインを指定
function admin_header_style() {
	?>
	<style type="text/css">
		#headimg h1			{margin: 0;
							padding-top: 35px;
							padding-left: 30px;
							font-size: 34px;
							font-family: Georgia, sans-serif;}
							
		#headimg h1 a		{text-decoration: none;}

		#headimg #desc		{margin: 0;
							padding-left: 30px;
							padding-top: 8px;
							font-size: 16px;}							
	</style>
	<?php
}

//ヘッダー画像の選択肢
register_default_headers( array (
	'cat_default' => array (
		'url' => '%s/images/header.jpg',
		'thumbnail_url' => '%s/images/header_thumb.jpg',
		'description' => '猫：シルエット'
	),
	'cat_flame' => array (
		'url' => '%s/images/header_catflame.jpg',
		'thumbnail_url' => '%s/images/header_catflame_thumb.jpg',
		'description' => '猫：フレーム'
		)
) );

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//ウィジェット

register_sidebar();

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//カスタム背景

add_custom_background();

?>
