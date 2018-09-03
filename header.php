<?php
  $args = array( 'sort_order' => 'ASC' );
  $pages = get_pages( $args );
?>

<?php if ( is_home() || is_front_page() ) : ?>

<!-- Header -->
<header id="home">
  <!-- Background Image -->
  <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/background.jpg');">
    <div class="overlay"></div>
  </div>
  <!-- /Background Image -->

  <!-- Nav -->
  <nav id="nav" class="navbar nav-transparent">
    <div class="container">

      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a href="/">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
            <img class="logo-alt" src="<?php echo get_template_directory_uri(); ?>/img/logo-alt.png" alt="logo">
          </a>
        </div>
        <!-- /Logo -->

        <!-- Collapse nav button -->
        <div class="nav-collapse">
          <span></span>
        </div>
        <!-- /Collapse nav button -->
      </div>

      <!--  Main navigation  -->
      <ul class="main-nav nav navbar-nav navbar-right">
        <li><a href="#home">Top</a></li>
        <li><a href="#about">Whitepaperについて</a></li>
        <li><a href="#service">サービス</a></li>
        <li><a href="#team">チーム</a></li>
        <li><a href="#blog">News</a></li>
        <?php foreach ( $pages as $page ): ?>
          <li><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo get_the_title( $page->ID ); ?></a></li>
        <?php endforeach; ?>

      </ul>
      <!-- /Main navigation -->

    </div>
  </nav>
  <!-- /Nav -->

  <!-- home wrapper -->
  <div class="home-wrapper">
    <div class="container">
      <div class="row">

        <!-- home content -->
        <div class="col-md-10 col-md-offset-1">
          <div class="home-content">
            <h1 class="white-text">革新はいつもここから</h1>
            <p class="white-text">
              ユーザーとデベロッパーを中心としたサービス開発スタイルにより、
              迅速に最高の製品をご提供します
            </p>
            <!-- <button class="white-btn">Get Started!</button>
            <button class="main-btn">Learn more</button> -->
          </div>
        </div>
        <!-- /home content -->

      </div>
    </div>
  </div>
  <!-- /home wrapper -->

</header>
<!-- /Header -->

<?php else: ?>

<!-- Header -->
<header>

  <!-- Nav -->
  <nav id="nav" class="navbar">
    <div class="container">

      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a href="/">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
          </a>
        </div>
        <!-- /Logo -->

        <!-- Collapse nav button -->
        <div class="nav-collapse">
          <span></span>
        </div>
        <!-- /Collapse nav button -->
      </div>

      <!--  Main navigation  -->
      <ul class="main-nav nav navbar-nav navbar-right">
        <li><a href="/#home">Top</a></li>
        <li><a href="/#about">Whitepaperについて</a></li>
        <li><a href="/#service">サービス</a></li>
        <li><a href="/#team">チーム</a></li>
        <li><a href="/#blog">News</a></li>
        <?php foreach ( $pages as $page ): ?>
          <li><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo get_the_title( $page->ID ); ?></a></li>
        <?php endforeach; ?>
      </ul>
      <!-- /Main navigation -->

    </div>
  </nav>
  <!-- /Nav -->

</header>
<!-- /Header -->

<?php endif; ?>
