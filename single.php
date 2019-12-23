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
                <h1 class="title title-blog-n"><ul class="post-categories">
	<li><a href="http://www.t.yuan.network/?cat=26" rel="category"><?php the_category(); ?></a></li></ul></h1>
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

                <!-- Post -->
                <article class="blog-post">

                    <!-- Post Title -->
                    <h2 class="title"><?php the_title(); ?></h2>
                    <!-- /Post Title -->

                    <!-- Post Metadata -->
                    <ul class="list-inline meta">
                        <li><?php bloginfo('name'); ?>  <?php the_author(); ?>, <?php the_time('Y年n月j日, G:i:s'); ?> 发布</li>

                        

                        <li>分类：
                            <?php 
                            $categories = get_the_category();
                            $separator = ", ";
                            $output = '';

                            if($categories)
                            {
                                foreach ($categories as $key => $category) 
                                {
                                    $output .= '<a href="' . get_category_link($category->term_id) . ' ">' . $category->cat_name . '</a>'. $separator;
                                }

                                echo trim($output, $separator);

                            }
                            ?>
                        </li>
                        
                        <li>
                            <i class="fa fa-fw fa-eye"></i> 浏览：<?php get_post_views($post -> ID); ?>                    
                        </li>
                        <!-- <li><a href="#">12 Comments</a></li> -->
                    </ul>
                    <!-- /Post Metadata -->

                    <!-- Post Content -->
                    <div class="content1">

                        <?php 
                        if(have_posts()):
                            while(have_posts()): the_post(); 

                                the_content();

                            endwhile;
                        else:
                            // something can say this is nothing
                        endif;
                        ?>

                        <?php previous_post_link('上一页： %link'); ?><br/>
                        <?php next_post_link('下一页： %link'); ?><br/><br/>
                        
                    </div>
                    <!-- /Post Content -->

                    <!-- Additional -->
                    <div class="row information">

                        <div class="col-sm-6">
                            
                        </div>

                        <div class="col-sm-6">
                            <ul class="social-inline">
                                
                            </ul>
                        </div>

                    </div>
                    <!-- /Additional -->



                </article>
                <!-- /Post -->

                <!-- Comments -->
                <?php 
                if(comments_open() || get_comments_number()):
                    comments_template();
                endif;
                ?>
                <!-- /Comments -->

            </div>
            <!-- /Blog Content -->

            <?php get_template_part( 'sidebar' ); ?>

        </div>
    </div>
</main>
<!-- /Main -->

<?php get_footer(); ?>
