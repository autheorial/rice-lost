<?php // Do not delete these lines
     if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
     die ('Please do not load this page directly. Thanks!');

     if ( post_password_required() ) { ?>
             <div><div>

	<?php
		return;
	}
		/* This variable is for alternating comment background */
$oddcomment = 'alt';
?>

<div id="comments">
	<?php if ( have_comments() ) : ?>
   	<h4>
     <?php comments_number('No comments', 'Comments', 'Comments' );?>
   	</h4>

	<?php foreach( $comments as $comment ) :?>

	<div class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>" style="clear: both;">

			<div class="info">

			<?php echo get_avatar( $comment, $size = '100', $default = 'http://i855.photobucket.com/albums/ab118/babygirlsaranghae/gravatar_zps3d6e486c.jpg' ); ?>
			
			<a href="<?php comment_author_url(); ?>" class="author" target="_blank"><?php comment_author(); ?></a>
   				<br />
 				<a href="#comment-<?php comment_ID() ?>"><div class="commentmeta"> <?php comment_date('F dS, Y') ?>at <?php comment_time() ?></a>
 				<?php edit_comment_link('Edit',' ▲ ',''); ?></div>
 			</div>

			<?php if ($comment->comment_approved == '0') : ?>
			<i><?php _e('<span style="color:#ae1923">Your comment is awaiting moderation.</span>'); ?></i>
			<?php endif; ?>
   
   			<?php comment_text(); ?>
</div>

	<?php if ('alt' == $oddcomment) $oddcomment = '';	else $oddcomment = 'alt';?>
	

<?php endforeach;  ?>

<?php else : ?>

	<?php if ('open' == $post->comment_status) : ?>
	 <?php else : // comments are closed ?>
		
	<?php endif; ?>

<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<div class="cancel-comment-reply">
<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<h5>
<?php comment_form_title( 'Leave a comment', 'Leave a comment to %s' ); ?>
</h5>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<h5>
<?php comment_form_title( 'Leave a comment', 'Leave a comment to %s' ); ?>
</h5>

<div id="type">

<p align="center"><input type="text" name="author" id="author" placeholder="Name <?php if ($req) echo " *"; ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /></p>

<p align="center"><input type="text" name="email" id="email" placeholder="Email<?php if ($req) echo " *"; ?> (will not be published)" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /></p>

<p align="center"><input type="text" name="url" id="url" placeholder="Website" tabindex="3" /></p>

<?php endif; ?>

<p align="center"><textarea name="comment" id="comment" cols="60%" rows="8" tabindex="4" placeholder="Write your comment here...">
</textarea></p>


<p align="center"><input name="submit" type="submit" id="submit" style="width:83%;" tabindex="5" value="Submit"/>
   <?php comment_id_fields(); ?>
   <?php do_action('comment_form', $post->ID); ?></p>
   

</div>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; ?>