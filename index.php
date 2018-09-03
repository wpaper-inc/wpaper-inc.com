<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?php wp_title(); ?></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<?php get_header(); ?>

	<!-- About -->
	<div id="about" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Whitepaperについて</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Fully Customizible</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Awesome Features</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Fully Responsive</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">サービス</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6 col-centered">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>Clapp</h3>
						<p>QRコードによる取引をベースとした、本人認証型チケット発行/店舗決済サービス。これまでのレジ導入型サービスのコストを見直し、ユーザーと加盟店をスマートフォン端末のみで繋ぎます。</p>
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">チーム</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="https://scontent-nrt1-1.xx.fbcdn.net/v/t31.0-8/19221657_1159663367471525_3336628171149824477_o.jpg?_nc_cat=0&oh=3ee07bdc25fa8f874f2a2e124cfe7dbb&oe=5BC9A451" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/kousuke.takeuhi"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/TakeuchiKousuke"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>竹内 宏佑</h3>
							<span>代表取締役 / Programmer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="https://i1.wp.com/www.v-com.org/wp-content/uploads/2018/02/naohiro_hayaishi.jpg?resize=200%2C212&ssl=1" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/hayaishi"><i class="fa fa-facebook"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>早石 直広</h3>
							<span>取締役 CTO</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="https://scontent-nrt1-1.xx.fbcdn.net/v/t31.0-8/10562542_537769366349773_6249727517636213584_o.jpg?_nc_cat=0&oh=3351302aa95c8f1dc8b1170a4dbb724d&oe=5BD449AA" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/takuji.onoue"><i class="fa fa-facebook"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>尾ノ上 拓史</h3>
							<span>執行役 広報担当</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">最新記事</h2>
				</div>
				<!-- /Section header -->

				<?php
					$args = array( 'posts_per_page' => 5 );
					$posts = get_posts( $args );
					foreach ( $posts as $post ) : setup_postdata( $post ) ?>

					<!-- blog -->
					<div class="col-md-4">
						<div class="blog">
							<div class="blog-content">
								<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
								<ul class="blog-meta">
									<li><i class="fa fa-clock-o"></i><?php the_date( 'Y年n月j日' ); ?></li>
								</ul>
								<h3><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>">続きを読む</a>
							</div>
						</div>
					</div>
					<!-- /blog -->

				<?php endforeach;
				wp_reset_postdata();?>

			</div>
			<!-- /Row -->

			<a href="#"><button class="main-btn">もっと見る</button></a>

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->


	<?php get_footer(); ?>

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>

</html>
