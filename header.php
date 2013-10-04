
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

	<title><?php wp_title(' | ', true, 'right'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top">
						<div class="usernav">  
						<button type="button" data-toggle="modal" href="#myModal" class="btn btn-primary btn-sm ">
						<span class="icon-user"></span>&nbsp;Login</button>
						
</div>

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/logo.png" /><?php //bloginfo('name'); ?></a>
        </div>
       
		<?php wp_nav_menu( array( 
	'container' => 'div',
	'container_class' => 'navbar-collapse collapse pull-right',
	'theme_location' => 'primary',
	'menu_class' => 'nav navbar-nav',
	'walker' => new Bootstrap_Walker(),									
	) );

	?>

        </div><!--/.navbar-collapse -->

      </div>
    </div>
