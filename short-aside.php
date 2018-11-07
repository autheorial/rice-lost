<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<ul id="metadata"><?php edit_post_link('<li>Edit</li>', '', ''); ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><?php the_time('jS F Y') ?> at <?php the_time('h:iA') ?></a></li>
	<li><?php the_category(', ') ?></li>
	</ul>

	<div class="entry">

		<h1><?php the_content(); ?></h1>

	</div>

	<div class="asidecomments"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments');?></div>


</div>