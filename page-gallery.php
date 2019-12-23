<?php
/*
template name:内容分类
*/
?>

<?php get_header(); ?>

<!-- Header -->
<header id="home" class="header">

<!-- Navigation -->
<nav id="navigation" class="navbar affix">

	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<?php get_template_part( 'title' ); ?>

                <?php get_template_part( 'menu' ); ?>

			</div>
		</div>

	</div>
</nav>
<!-- /Navigation -->

</header>
<!-- /Header -->
<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-4">
                <h1 class="title title-blog-n"><?php the_title(); ?></h1>
                <?php bloginfo('name'); ?> <?php the_time('Y年n月j日, G:i:s'); ?> 发布
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-8">
                <ul class="breadcrumb">
                    <?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
                    <i class="fa fa-fw fa-eye"></i> 浏览：<?php get_post_views($post->ID); ?>
                </ul>
            </div>
            <!-- /Breadcrumbs -->

        </div>
    </div>
</section>
<!-- /Section: Page Header -->

<!-- Main -->
<main class="main-container">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->
            <div class="col-md-9">

                <!-- Project -->
                <div class="row">
                    
                    <div class="projects-list">
                                
                        <?php
                        $current_page = max(1, get_query_var('paged')); //当前第几页
             
                        //查询参数
                        $args = array_filter(array(
                        // 'orderby' => 'title',
                        // 'order' => 'ASC',
                        'post_type' => 'post',
                        'ignore_sticky_posts' =>  1 ,
                        'posts_per_page' => 18,
                        'paged' => $current_page, //当前页
                        ));
                     
                       //开始查询
                        $query = new WP_Query($args);
                        
                        $total_pages = $query->max_num_pages;  //总共多少页
                        
                        while ($query->have_posts()):
                        $query->the_post();
                        
                        ?>
                        
                        <div class="col-md-4 col-sm-6 fadeIn wow box-foreach1" data-wow-duration="1.3s">
                            <a href="<?php the_permalink(); ?>" class="project-item">
                                <div class="gallery-image">
                                    <?php the_post_thumbnail('product-thumbnails-search'); ?>
                                </div>
                                <div class="info info-chain">
                                    <div class="h4 title"><?php the_title(); ?></div>
                                    <p class="description"><?php the_time('Y年n月j日, G:i:s'); ?></p>
                                    <div class="social">
                                        <i class="fa fa-fw fa-eye"></i> 浏览：<?php get_post_views($post -> ID); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                                
                        <?php endwhile; ?>

                    </div>

                    <!-- Pagination -->
                    <div class="col-md-12">
                        <center>
                        <ul class="pagination">
                            <li>
                                <!-- 输出分页 -->
                                <?php echo paginate_links( array(
                                    'prev_text'          => __( '上一页', 'YChinaTours' ),
                                    'next_text'          => __( '下一页', 'YChinaTours' ),
                                    'screen_reader_text'  => null,
                                    'total' => $total_pages,  //总页数
                                    'current' => $current_page, //当前页数
                                ) ); ?>
                            </li>
                        </ul>
                        </center>
                    </div>
                    <!-- /Pagination -->

                </div>
                <!-- /Project -->

            </div>
            <!-- /Blog Content -->

            <?php get_template_part( 'sidebar' ); ?>

        </div>
    </div>
</main>
<!-- /Main -->

<!-- Footer -->
<footer class="footer section-small">
<div class="container">
	<div class="row">

		<!-- Footer Column -->
		<div class="col-md-8 col-xs-8 footer-col">

			<!-- Copyright -->
			<p class="copyright">
				Copyright &copy; 2018 - 2019. <strong>豪源主题</strong>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="http://yuan.network" target="_blank">豪源</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="https://www.weibo.com/6331885442" target="_blank">微博</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="https://space.bilibili.com/439762135" target="_blank">哔哩哔哩</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="https://www.youtube.com/channel/UCeDGMc0AyO_nlLGyfhE2d3w" target="_blank">YouTube</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="http://v.qq.com/vplus/d05f550bdbbaeee1b865a967fcf9e3f7" target="_blank">腾讯视频</a>
			</p>
			<!-- /Copyright -->

		</div>
		<!-- /Footer Column -->

		<!-- Footer Column -->
		<div class="col-md-4 col-xs-4 footer-col">

			<!-- Footer Social -->
			<ul class="social-inline">
				QQ群：<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=d51f0dd006aef9473ace3ae6855b93661e89a10a79fe27645f068d0fc1754c8e">545997586</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				version 1.0
				<!-- <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a></div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{},"image":{"viewList":["weixin","tsina","qzone","tqq","renren"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","qzone","tqq","renren"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script> -->
			</ul>
			<!-- /Footer Social -->

		</div>
		<!-- /Footer Column -->

	</div>
</div>
</footer>
<!-- /Footer -->

<!-- Scroll To Top -->
<div id="scroll-to-top" class="scroll-to-top">
<i class="icon fa fa-angle-up"></i>
</div>
<!-- /Scroll To Top -->

<!-- Modal: Result Message -->
<div class="modal fade" id="result" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				<i class="fa fa-times"></i>
			</button>
			<h4 class="modal-title">Sending message</h4>
		</div>

		<div class="modal-body">

			<div class="result-icon">
				<div class="icon-border">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" preserveAspectRatio="none">
						<circle cx="8" cy="8" r="6.215" transform="rotate(90 8 8)"></circle>
					</svg>
					<i class="icon fa fa-check"></i>
				</div>
			</div>

			<p class="modal-result h4 text-center"></p>
		</div>

	</div>
</div>
</div>
<!-- /Modal: Result Message -->

<!-- SCRIPTS -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.animatenumber.min.js"></script>
<script src="js/general.js"></script>

<script src="js/add.js"></script>

<!-- /SCRIPTS -->

</body>
</html>
