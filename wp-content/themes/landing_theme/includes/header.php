<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' )?>/favicon.png" />
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<header class="hero-form">
  <h1><a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logos/logo-lima.png" alt="Logo Lima" /></a></h1>
  <div class="hero-form--form">
    <h2>Déjanos tus datos</h2>
    <p>Para más información sobre nuestro proyecto, por favor déjanos tus datos y te contactaremos lo más pronto posible.</p>
    <?php echo do_shortcode('[contact-form-7 id="4" title="Formulario de contacto 1"]'); ?>
  </div>
</header>
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
