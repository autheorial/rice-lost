<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="post">

<h1><?php the_title(); ?></h1></a>

<div class="entry">

<?php the_content(); ?>

<?php edit_post_link('Edit', '', ''); ?> 

</div>

<?php comments_template(''); ?>
<?php endwhile; ?>

<?php endif; ?>

</div>

</div>

<div id="smallprevnext">

<a href="/archives" class="archive">Archives</a></span>
<br />

<?php previous_posts_link('<span class="pright">next &raquo;</span>') ?>
<?php next_posts_link('<span class="pleft">&laquo; back</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="pleft">&laquo; back </span>', 'no'); ?>   
<?php next_post('%', '<span class="pright">next &raquo;</span>', 'no'); ?><?php }?>

</div>

</div>


<?php get_footer() ?>