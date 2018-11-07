<div id="sidebar">

<?php
if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar() ) : ?>

<?php endif; ?>

<div id="prevnext">

<a href="/archives" class="archive">Archives</a></span>
<br />

<?php previous_posts_link('<span class="pright">next &raquo;</span>') ?>
<?php next_posts_link('<span class="pleft">&laquo; back</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="pleft">&laquo; back </span>', 'no'); ?>   
<?php next_post('%', '<span class="pright">next &raquo;</span>', 'no'); ?><?php }?>

</div>


</div>