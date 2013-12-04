<div class="page-header">
  <?php
    if(get_field('hero_headline')) $tag = "h2";
    else $tag = "h1";
  ?>
  <<?php echo $tag; ?>>
    <?php echo roots_title(); ?>
  </<?php echo $tag; ?>>
</div>