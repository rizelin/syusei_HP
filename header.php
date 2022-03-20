<?php
/*
パーツ：ヘッダ
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="" />
	<meta property="fb:app_id" content="">
	<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
	<link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Kosugi|Kosugi+Maru|M+PLUS+1p|M+PLUS+Rounded+1c|Noto+Sans+JP|Noto+Serif+JP|Sawarabi+Gothic|Sawarabi+Mincho" rel="stylesheet">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
		<?php if ( is_front_page() ) { ?>
			<body id="top" <?php body_class(); ?>>
		<?php }else if(is_category('information') ){ ?>
			<body id="category" <?php body_class(); ?>>
		<?php }else {?>
			<body <?php body_class(); ?>>
		<?php }?>

  <!-- header_line -->

				<div id="wrap">
	      <div id="header"><div id="title"><a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a> </div>

	        	<dl id="main_menu" ontouchstart="">
						<dt><a  title="守成クラブとは">守成クラブとは</a></dt>
						<dd>
							<dl class="sub_menu menu_b" id="sub_menu1 top">
								<dd><a href="/守成クラブとは/ " title="守成クラブとは">守成クラブとは</a></dd>
								<dd><a href="/仕事バンバンプラザ/" title="仕事バンバンプラザ" class="profile">仕事バンバンプラザ</a></dd>
								<dd><a href="/守成山梨について/" title="守成山梨について">守成山梨について</a></dd>
								<dd><a href="/会員になるには/" title="会員になるには">会員になるには</a></dd>
							</dl>
						</dd>
						<dt><a title="プロフィール">プロフィール</a></dt>
						<dd>
							<dl class="sub_menu menu_b menu_b1" id="sub_menu2 top">
								<dd><a href="/代表挨拶・創設者プロフィール/" title="創設者プロフィール・代表挨拶" class="profile">創設者・代表挨拶</a></dd>
								<dd><a href="/世話人紹介/" title="世話人紹介">世話人紹介</a></dd>
<!-- 								<dd><a title="/歴代世話人" href="/歴代世話人">歴代世話人</a></dd> -->
			       			 </dl>
						</dd>
						<dt>
							<a href="/category/information/" title="お知らせ・ブログ" title="お知らせ">お知らせ</a>
						</dt>
						<dt>
							<a href="/お問い合わせ-2/" title="お問い合わせ">お問い合わせ</a>
						</dt>
						<dt>
							<a href="/お申込み/" title="お申込み">お申込み</a>
						</dt>
	        	</dl>

				<!-- header end -->
	      </div>

	      <div id="body">
