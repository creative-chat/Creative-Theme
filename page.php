<?php get_header(); ?>

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">
            
            <!-- Page Title -->
            <div class="col-md-4">
                <h1 class="title title-blog-n"><?php the_title(); ?></h1>
                豪源 <?php the_author(); ?> <?php the_time('Y年n月j日, G:i:s'); ?> 发布
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-8">
                <ul class="breadcrumb">
                    <?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
                    <i class="fa fa-fw fa-eye"></i> 浏览：<?php get_post_views($post -> ID); ?>
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

            <!-- Post Content -->
            <div class="content-top-10">

                <?php
                if(have_posts()) :
                    while (have_posts()) : the_post(); ?>
                    
                    <?php the_content(); ?>
                    
                    <?php endwhile;
                    else :
                        // echo '<p>No content found</p>';
                    endif;
                    
                ?>

                

            </div>
            <!-- /Post Content -->

        </div>

    </div>
</main>
<!-- /Main -->

<?php get_footer();