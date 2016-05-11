<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
		<div class="home-hero hero-wrap">
			<div class="home-hero container">
				<div class="home-hero slide-top-left">
					<h3 class="home-hero slide-top-title"><span class="home-hero opening">Be Flexible.</span> Drive results when and where you need them.</h3>
				</div>
				<div class="home-hero hero-inner">
					<h1 class="home-hero slide-title">How Do You Work?</h1>
					<p class="home-hero sub-title">Lorem Ipsum</p>
					<a href="#btn" class="home-hero btn btn-primary">Get In Touch</a>
				</div>
			</div>
		</div>
		<div class="home-page-content-top">
		</div>
		<section class="section-home container relative">

				<div class="spin-my-head-round">
					<img class="right-round" src="<?php echo get_template_directory_uri(); ?>/assets/images/old-dude.jpg">
					<div class="baby right-round"></div>
				</div>

				<div class="i-walk-the-line">
					<?php echo file_get_contents(get_template_directory_uri() .'/assets/images/dotted-line.svg'); ?>
				</div>

		</section>

		<section class="section-home gray">
			<div class="container relative">
				<div class="i-walk-the-line left">
					<?php echo file_get_contents(get_template_directory_uri() .'/assets/images/dotted-line.svg'); ?>
				</div>
				<div class="spin-my-head-round right">
					<img class="right-round" src="<?php echo get_template_directory_uri(); ?>/assets/images/old-dude.jpg">
					<div class="baby right-round"></div>
				</div>
			</div>
		</section>

    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">






        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
