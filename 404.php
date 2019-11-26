<?php get_header(); ?>

<!-- Main -->
<main class="main-container">
    <div class="container">

        <div class="row">
            <div class="full-wh">

                <div class="text-center page-404">

                    <h1 class="bounceIn wow" data-wow-duration="1.5s">OH, NO !</h1>
                    <h2><strong>404</strong> 没有找到</h2>
                    <h3>对不起， 这里<strong>没有</strong> 你想找的东西 :-(</h3>

                    <div>
                        <a href="<?php echo get_option('home'); ?>" class="btn btn-theme">回到首页</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</main>
<!-- /Main -->

<?php get_footer();