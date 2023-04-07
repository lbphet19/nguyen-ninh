<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4">

    <!-- example react component -->
    <div id="render-react-example-here"></div>
    <!-- end example react component -->

    <div class="prose max-w-full">
      404!
        <?php
        $args_my_query = array(
            `post_type`    =>    `post`
        );
        $my_query = new WP_Query( $args_my_query );
        ?>
         <?php
        if( $my_query->have_posts() ) {
         while( $my_query->have_posts() ) { 
            $my_query->the_post();
            /*
             * Nội dung hiển thị bài viết
             */
            the_title();
          }
        }
        rewind_posts();
        // rewind -> reset query 
        while( $my_query->have_posts() ) { 
          $my_query->the_post();
          /*
           * Nội dung hiển thị bài viết
           */
          the_title();
        }
        ?>
      </div>
</div>

<?php get_footer();