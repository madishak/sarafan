<?php get_header() ?>

<div>  
    <section class="breadcrumbs">
      <div class="wrapper">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' > '); ?>
      </div>
    </section>
</div>



<?php get_footer() ?>