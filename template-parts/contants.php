
<?php if(have_posts()):
        while(have_posts()):the_post(); ?>

    <div class="media">
        <?php the_post_thumbnail( 'thumbnail', array('class'=>'single_post_thum p-2') ) ?>
        <div class="media-body">
            <h5 class="mt-0"><?php the_title(); ?></h5>
            <p>Posted on <?php echo get_the_date() ?> By <?php echo get_the_author_posts_link() ?></p>
            <?php echo get_excerpt(); ?>
        </div>
    </div>

<?php endwhile;
        endif;
    ?>
<?php echo paginate_links(); ?>