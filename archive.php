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
                <h1 class="title title-blog-n"><?php the_category(); ?></h1>
                
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

    <h2 class="archive-title">
        <?php
        if( is_category()){
            single_cat_title();
        }elseif(is_tag()){
            single_tag_title();
        }elseif(is_author()){
            the_post();
            echo 'Author Archives:'. get_the_author();
            rewind_posts();
        }elseif(is_day()){
            echo 'Daily Archives:' .get_the_date();
        }elseif(is_month()){
            echo 'Daily Archives:' .get_the_date('F Y');
        }elseif(is_year()){
            echo 'Daily Archives:' .get_the_date('Y');
        }else{
            echo 'Archives';
        } 
        ?>
    </h2>

<?php while(have_posts()) : the_post(); ?>
        
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

    <center><h2>对不起，没有找到相关内容，请搜索其他关键词</h2></center>

<?php endif; ?>   

        
    <!-- <div class="col-md-4 col-sm-6 fadeIn wow box-foreach1" data-wow-duration="1.3s">
        <a href="http://www.t.yuan.network/?p=3366" class="project-item">
            <div class="gallery-image">
                <img width="330" height="185" src="picture/20190831010612-330x185.jpg" class="attachment-product-thumbnails-search size-product-thumbnails-search wp-post-image" alt="" srcset="http://www.t.yuan.network/wp-content/uploads/2019/08/20190831010612-330x185.jpg 330w, http://www.t.yuan.network/wp-content/uploads/2019/08/20190831010612-360x202.jpg 360w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />            </div>
            <div class="info info-chain">
                <div class="h4 title">WordPress插件案例</div>
                <p class="description">2019年10月1日, 21:06:44</p>
                <div class="social">
                    <i class="fa fa-fw fa-eye"></i> 浏览：41                </div>
            </div>
        </a>
    </div> -->

                </div>
                <!-- /Project -->

            </div>
            <!-- /Blog Content -->

            <?php get_template_part( 'sidebar' ); ?>

        </div>
    </div>
</main>
<!-- /Main -->

<?php get_footer(); ?>