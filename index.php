<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'short', get_post_format() ); ?>


<?php endwhile; ?>




<?php else : ?>

<div class="entry">

<h1>Error</h1>

<div class="post">

<p>This page does not exist! If you've clicked on a broken link, feel free to <a href="http://contact.ricetard.nu">contact me</a> :)</p>

<p>You can try looking in the <a href="/archives">archives or searching</a> if you are looking for a particular post. <a href="http://love.ricetard.nu/" target="_blank">My network</a> also branches out to my various subdomains, which are separated into web/content, fanlistings, and portfolio.</p>

</div>
</div>

<div class="entry">
<h3>Search</h3>

<div class="post">

<p>You can also try searching for whatever you're looking for.</p>

<?php get_search_form(); ?>
</div>
</div>

<hr />
<br />

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