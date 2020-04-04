<?php get_header(  ) ?>



<hr class="p-2 my-0 bg-info" >
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <?php get_template_part( 'template-parts/contants'); ?>
        </div>
        <div class="col-md-4 ">
            <?php get_sidebar(  ) ?>
        </div>
    </div>
</div>
<hr class="p-2 my-0 bg-info" >

<?php get_template_part( 'template-parts/footer_widgets'); ?>

















<?php get_footer(  ) ?>