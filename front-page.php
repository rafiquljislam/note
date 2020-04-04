<?php get_header(  ) ?>


<h1>custome header logo</h1>
<?php the_custom_logo( array('class'=>'custome_logo') ) ?>
<h1>custome haeader background</h1>
<img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">

<hr class="p-3 m-0 bg-info">

<h1 class="text-danger">Query postes</h1>
<div class="container-fluid">
    <div class="row">
        <?php
            $argc = array(
                'category_name'=>'social',
            );
            $query = new WP_Query( $argc );
            if($query->have_posts()){
                while($query->have_posts()){ $query->the_post(); ?>

                <div class="col-md-4">
                    <?php the_post_thumbnail( '',array('class'=>'social_posts img-fluid') ); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
        <?php       
            };
            };
              ?>
    </div>
</div>
<hr class="p-3 m-0 bg-info">
<h1 class="text-danger">Custome post </h1>
<div class="container-fluid">
    <div class="row">
        <?php
            $argc = array(
                'post_type'=>'serves',
            );
            $query = new WP_Query( $argc );
            if($query->have_posts()){
                while($query->have_posts()){ $query->the_post(); ?>

                <div class="col-md-4">
                    <?php the_post_thumbnail( '',array('class'=>'servess_posts img-fluid') ); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
        <?php       
            };
            };
              ?>
    </div>
</div>
<hr class="p-3 m-0 bg-info">
<h1 class="text-danger">Custome post  and owl slider </h1>


<!-- Set up your HTML -->
<div class="owl-carousel">
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
</div>


<?php get_footer(); ?>