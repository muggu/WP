<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?>Rob Page</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   	<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:100' rel='stylesheet' type='text/css'>
	<!--&#91;if lt IE 9&#93;>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<!&#91;endif&#93;-->
	<?php wp_head(); ?>
</head>

<body>

		<nav id="NavBar">
          <ul >
            <li><a href="#home" >Home<br><!--<img id="homeicon" src="icons/menu-home.png">--></a></li>
			<li> <a href="#about" >About<br><!--<img id="abouticon" src="icons/menu-about.png">--></a></li>
			<li> <a href="#portfolio" >Portfolio<br><!--<img id="portfolioicon" src="icons/menu-portfolio.png">--></a></li>
			<li> <a href="#blog" >Blog<br><!--<img id="blogicon" src="icons/menu-blog.png">--></a></li>
			<li> <a href="#contact" >Contact<br><!--<img id="contacticon" src="icons/menu-contact.png">--></a></li>
        </ul>
        </nav>  

		