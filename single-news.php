<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
<?php
the_ID();
setPostViews(get_the_ID());
 ?>

 <?php
          echo getPostViews(get_the_ID());
?>
<?php get_footer(); ?>
