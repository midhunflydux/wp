<?php
$args = array(
  'category_name'    => 'news',
  'order'    => 'DESC'
);
// The Query
query_posts( $args );
while( have_posts() ):the_post();
?>
