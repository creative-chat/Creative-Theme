<?php get_header(); ?>

<!-- Header -->
<header id="home" class="header">

<!-- Navigation -->
<nav id="navigation" class="navbar affix">

	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<?php get_template_part('title'); ?>

                <?php get_template_part('menu'); ?>

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
                <h1 class="title title-blog-n">搜索：<?php the_search_query(); ?></h1>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-8">
                <ul class="breadcrumb">
                    <?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>         
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
                    
                    <?php if(have_posts()) : ?>
                    <div class="seart-result">
                        <center>
                            <h2>搜索结果：<?php the_search_query(); ?></h2>
                        </center>
                    </div>
                    <?php while(have_posts()) : the_post(); ?>
                            
                        <div class="col-md-4 col-sm-6 fadeIn wow box-foreach1" data-wow-duration="1.3s">
                            <a href="http://www.t.yuan.network/?page_id=3687" class="project-item">
                                <div class="gallery-image">
                                    <img width="330" height="185" src="picture/timg-2-330x185.jpg" class="attachment-product-thumbnails-search size-product-thumbnails-search wp-post-image" alt="" srcset="http://www.t.yuan.network/wp-content/uploads/2019/11/timg-2-330x185.jpg 330w, http://www.t.yuan.network/wp-content/uploads/2019/11/timg-2-360x202.jpg 360w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />                                </div>
                                <div class="info info-chain">
                                    <div class="h4 title">豪源</div>
                                    <p class="description">2019年12月5日, 10:46:30</p>
                                    <div class="social">
                                        <i class="fa fa-fw fa-eye"></i> 浏览：3                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endwhile; ?>

                        <!-- Pagination -->
                        <div class="col-md-12">
                            <center>
                            <ul class="pagination">
                                <li><?php echo paginate_links(); ?></li>
                            </ul>
                            </center>
                        </div>
                        <!-- /Pagination -->
                                
                        

                    <?php else : ?>

                        <div class="text-center page-404 box-404">

                            <h1 class="bounceIn wow" data-wow-duration="1.5s">OH, NO !</h1>
                            <h2><strong>没有找到</strong>你想要找的东西 :-(</h2>
                            <h3>请重新搜索<strong>相关的</strong>关键词 !</h3>

                        </div>

                    <?php endif; ?>
                                 


                                                
                       <!--  <div class="col-md-4 col-sm-6 fadeIn wow box-foreach1" data-wow-duration="1.3s">
                            <a href="http://www.t.yuan.network/?page_id=3628" class="project-item">
                                <div class="gallery-image">
                                    <img width="330" height="185" src="picture/timg-2-330x185.jpg" class="attachment-product-thumbnails-search size-product-thumbnails-search wp-post-image" alt="" srcset="http://www.t.yuan.network/wp-content/uploads/2019/11/timg-2-330x185.jpg 330w, http://www.t.yuan.network/wp-content/uploads/2019/11/timg-2-360x202.jpg 360w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />                                </div>
                                <div class="info info-chain">
                                    <div class="h4 title">豪源求生</div>
                                    <p class="description">2019年11月15日, 14:05:55</p>
                                    <div class="social">
                                        <i class="fa fa-fw fa-eye"></i> 浏览：54                                    </div>
                                </div>
                            </a>
                        </div> -->
                                 


                    
                    

                    
                </div>
                <!-- /Project -->

            </div>
            <!-- /Blog Content -->

            <?php get_template_part('sidebar'); ?>

        </div>
    </div>
</main>
<!-- /Main -->

<?php get_footer(); ?>