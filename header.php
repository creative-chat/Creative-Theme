<!DOCTYPE html>
<html lang="zh">
<head>

<!-- Page title -->
<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="豪源主题">
<meta name="keywords" content="豪源主题">
<meta name="author" content="豪源主题">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">

<!-- Style -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme.css">

<!-- TODO: Predefined Schemes (select one of the presented) -->
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-persimmon.css" title="theme-persimmon">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-atomic-tangerine.css" title="theme-atomic-tangerine">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-yellow-sea.css" title="theme-yellow-sea">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-rio-grande.css" title="theme-rio-grande">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-vida-loca.css" title="theme-vida-loca">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-mountain-meadow.css" title="theme-mountain-meadow">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-java.css" title="theme-java">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-mariner.css" title="theme-mariner">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-medium-purple.css" title="theme-medium-purple">
<link rel="alternate stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme-lavender-magenta.css" title="theme-lavender-magenta">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.2.0.min.js"></script>
<script>
	// $(document).ready(function(){
	// 	$(".menu-item").hover(function(){
 //    		$(".sub-menu").css("display","block");
	// 	});
	// });
</script>

</head>
<body>

<!-- Header -->
<header id="home" class="header">

<!-- Navigation -->
<nav id="navigation" class="navbar affix">

	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<!-- Navigation Header -->
				<div class="navbar-header">

					<!-- Toggle Button -->
					<button type="button"
							class="navbar-toggle collapsed"
							data-toggle="collapse"
							data-target="#main-menu"
							aria-expanded="false"
							aria-controls="main-menu">

						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

					</button>
					<!-- /Toggle Button -->

					<!-- Brand -->
					<a href="<?php echo get_option('home'); ?>" class="brand">

						<!-- Logo Big -->
						<h2 class="section-title logo-big"><span class="text-theme"></span> <?php bloginfo('name'); ?></h2>
						<!-- /Logo Big -->

						<!-- Logo Small -->
						<h2 class="section-title logo-small"><span class="text-theme"></span> <?php bloginfo('name'); ?></h2>
						<!-- /Logo Small -->

					</a>
					<!-- /Brand -->

				</div>
				<!-- /Navigation Header -->

				<!-- Navigation -->
				<div id="main-menu" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">

						

						<li>
						<?php 
					      $args = array(
					        //指定显示的导航名，如果没有设置，则显示第一个   
					        'theme_location' => 'top',  
					        //导航菜单ul标签的class名   
					        'menu_class' => 'nav navbar-nav navbar-right',   
					        
					      );
					    ?>
					    <?php wp_nav_menu(  $args );?>
					    </li>
						
						<!-- <li><a href="about.html">About</a></li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">豪源产品</a>
							<ul class="dropdown-menu">
								<li><a href="http://yuan.network/" target="_blank">豪源</a></li>
								<li><a href="http://yuan.network/int/system" target="_blank">豪源CMS</a></li>
								<li><a href="/?page_id=3153">豪源模板</a></li>
								<li><a href="/?page_id=2806">豪源Env</a></li>
							</ul>
						</li>
						
					</ul>
				</div>
				<!-- /Navigation -->

			</div>
		</div>

	</div>
</nav>
<!-- /Navigation -->

</header>
<!-- /Header -->

<?php wp_head(); ?>