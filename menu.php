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
	    	wp_nav_menu($args); ?>
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