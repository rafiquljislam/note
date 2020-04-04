<form  class="form-inline" action="<?php home_url( ) ?>" method="get">
    <input class="form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class="btn btn-info mx-1" type="submit" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>