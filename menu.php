<!-- Navigation -->
<div id="main-menu" class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-right">

		<li>
			<?php
			$menu = array(
				'theme_location' => 'top',
				'menu_class' => 'nav navbar-nav navbar-right',
				'menu_id'    => '',
			);
			wp_nav_menu($menu);
			?>

		    <!-- <div class="menu-%e4%b8%bb%e8%8f%9c%e5%8d%95-container">
		    	<ul id="menu-%e4%b8%bb%e8%8f%9c%e5%8d%95" class="nav navbar-nav navbar-right"><li id="menu-item-110" class="nav navbar-nav navbar-right">
		    		<a href="http://www.t.yuan.network" aria-current="page">首页</a></li>
					<li id="menu-item-3342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3342"><a href="http://www.t.yuan.network/?page_id=112">关于</a></li>
					<li id="menu-item-126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-126"><a href="http://www.t.yuan.network/?page_id=124">内容分类</a></li>
					<li id="menu-item-3021" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3021"><a href="http://www.t.yuan.network/?page_id=3017">豪源WordPress</a></li>
					<li id="menu-item-3639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3639"><a href="http://www.t.yuan.network/?page_id=3628">豪源求生</a></li>
				</ul>
			</div>		 -->			    
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