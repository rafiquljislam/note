<?php get_header(  ) ?>



<hr class="p-2 my-0 bg-info" >
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            


        
<?php if(have_posts()):
        while(have_posts()):the_post(); ?>

    <div class="">
        <?php the_post_thumbnail( 'full', array('class'=>'single_page_thum p-2') ) ?>
        <div class="">
            <h1 class=""><?php the_title(); ?></h1>
            <p>Posted on <?php echo get_the_date() ?> By <?php echo get_the_author_posts_link() ?></p>
            <?php the_content() ?>
        </div>
    </div>

<?php endwhile;
        endif;
    ?>





        </div>
        <div class="col-md-4 ">
            <?php get_sidebar(  ) ?>
        </div>
    </div>
</div>
<hr class="p-2 my-0 bg-info" >

<?php get_template_part( 'template-parts/footer_widgets'); ?>






<?php get_footer(  ) ?>