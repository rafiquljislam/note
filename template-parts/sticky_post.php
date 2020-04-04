
<div class="container-fluid">
    <div class="row">
    <?php 

        $args=array(
            'post__in' => get_option( 'sticky_posts' ),
        );
        $query = new WP_Query( $args );
        if($query->have_posts()):
            $i=1;
            while($query->have_posts()):$query->the_post();
                if($i==1):
            
            ?>

        <div class="col-md-12">
        <div class="silk_post_top">
            <?php the_post_thumbnail( '',array('class'=>"slick_image_top") ) ?>
            <div class="slick_image_text">
                <h1><?php the_title() ?></h1>
                <?php echo get_excerpt(); ?>
            </div>
        </div>
        </div>


        <?php elseif($i<4): ?>


        <div class="col-md-6  my-2 silk_post_top">
        <?php the_post_thumbnail( '',array('class'=>"slick_image") ) ?>
            <div class="slick_image_text">
                <h1><?php the_title() ?></h1>
                <?php echo get_excerpt(); ?>
            </div>
        </div>

        <?php
            else :
            break;
            endif;
        $i++;
            endwhile;
        endif;

    ?>

    </div>
</div>