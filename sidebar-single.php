<div class="col-md-3">

                <!-- Widget: Search -->
                <div class="widget">
                    
                    <h4 class="title">搜索</h4>
                    <div class="search">
                        <form class="form-inline" method="get" action="<?php bloginfo('url'); ?>/">
                            <div class="form-group">
                                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="  搜索的关键字" class="form-control form-control-n">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-n btn-theme" type="submit"><i class="fa fa-fw fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /Widget: Search -->

                <!-- Widget: Latest Posts -->
                <div class="widget">

                    <h4 class="title">当前分类：
                    <?php 
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                     ?>
                     </h4>
                    <ul class="sidebar-menu">
                        <li>
                            <?php 
                            $category = get_the_category();
                            $cat = $category[0]->cat_ID;
                            $posts = get_posts( "category=$cat&numberposts=30" ); ?>  
                            <?php if( $posts ) : ?>  
                            <ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?>  
                            <li>  
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>  
                            </li>  
                            <?php endforeach; ?>  
                            </ul>  
                            <?php endif; ?>

                        </li>
                    </ul>

                </div>
                <!-- /Widget: Latest Posts -->

                <!-- Widget: Categories -->
                <div class="widget">

                    <h4 class="title">总分类</h4>
                    <ul class="sidebar-menu">
                        <li><?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0'); ?></li>
                        
                    </ul>

                </div>
                <!-- /Widget: Categories -->

            </div>