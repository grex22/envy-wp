<div class="page-header">
  <?php
    if(get_field('display_page_header')) $tag = "h2";
    else $tag = "h2";
  ?>
  <<?php echo $tag; ?>>
    <?php echo roots_title(); ?>
  </<?php echo $tag; ?>>
</div>