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

	<!-- Blog -->
	<div id="blog" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<?php if(have_posts()): while(have_posts()):the_post(); ?>
					<!-- <div class="footer-logo">
	          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
	        </div> -->

          <table class="table">
            <tbody>
              <tr>
                <td>会社名</td>
                <!-- <td><?php the_field( 'name' ); ?></td> -->
								<td>株式会社Whitepaper</td>
              </tr>
              <tr>
                <td>本社所在地</td>
                <!-- <td><?php the_field( 'place' ); ?></td> -->
								<td>〒530-0017<br/>大阪市北区角田町1番12号<br/>阪急ファイブアネックスビル2F</td>
              </tr>
              <tr>
                <td>創設</td>
								<td>2018年8月</td>
                <!-- <td><?php the_field( 'stand' ); ?></td> -->
              </tr>
              <tr>
                <td>資本金</td>
                <!-- <td><?php the_field( 'capital' ); ?></td> -->
								<td>10万円</td>
              </tr>
              <tr>
                <td>従業員数</td>
                <!-- <td><?php the_field( 'employee' ); ?>人</td> -->
								<td>3人</td>
              </tr>
            </tbody>
          </table>

					<!-- <?php the_field('google_map'); ?> -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.0419482067014!2d135.49888881489883!3d34.70412189054339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e693847ee0d1%3A0x60f72b15a8dfccc3!2z44CSNTMwLTAwMTcg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy66KeS55Sw55S677yR4oiS77yR77ySIOmYquaApeODleOCoeOCpOODluOCouODjeODg-OCr-OCuQ!5e0!3m2!1sja!2sjp!4v1532513025271" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</main>
				<!-- /Main -->
				<?php endwhile; endif; ?>
			</div>
			<!-- /Row -->

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
