<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_template_part( 'content', get_post_format() ); ?>

<?php comments_template(''); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php if ( $user_ID ) : ?>
</div></div>

<?php else : ?>
</div></div></div>

<?php endif; ?>

<div id="smallprevnext">

<a href="/archives" class="archive">Archives</a></span>
<br />

<?php previous_posts_link('<span class="pright">next &raquo;</span>') ?>
<?php next_posts_link('<span class="pleft">&laquo; back</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="pleft">&laquo; back </span>', 'no'); ?>   
<?php next_post('%', '<span class="pright">next &raquo;</span>', 'no'); ?><?php }?>

</div>

<?php get_footer() ?>