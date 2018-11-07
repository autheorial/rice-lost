<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php if(the_title( '', '', false ) !='') the_title(); else echo '';?></h1></a>
	<ul id="metadata"><?php edit_post_link('<li>Edit</li>', '', ''); ?>
	<li><a href="<?php the_permalink() ?>"><?php the_time('jS F Y') ?> at <?php the_time('h:iA') ?></a></li>
	<li><?php the_category(', ') ?></li>
	<li><?php comments_popup_link('0 Comments', '1 Comment', '% Comments');?></li>
	</ul><?php the_tags('<div class="tags">',' ', '</div>'); ?>

	<div class="entry">

		<?php the_content(); ?>

	</div>