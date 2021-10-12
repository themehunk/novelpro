<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die(__('Please do not load this page directly. Thanks!','novelpro'));
if (post_password_required()) {
    ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','novelpro'); ?></p>
    <?php
    return;
}
?>
<!-- You can start editing here. -->
<div id="commentsbox" class="post">
    <?php if (have_comments()) : ?>
        <h3 id="comments">
<?php comments_number(__('No Responses so far.','novelpro'),__('One Response so far.','novelpro'),
                    __('% Responses so far.','novelpro'));?> </h3>
        <ol class="commentlist">
    <?php wp_list_comments(array(
        'avatar_size' => 70)); ?>
        </ol>
        <div class="comment-nav">
            <div class="alignleft">
                <?php previous_comments_link() ?>
            </div>
            <div class="alignright">
        <?php next_comments_link() ?>
            </div>
        </div>
    <?php else : // this is displayed if there are no comments so far ?>
    <?php if (comments_open()) : ?>
            <!-- If comments are open, but there are no comments. -->
        <?php else : // comments are closed  ?>
            <!-- If comments are closed. -->
            <p class="nocomments"><?php _e('Comments are closed.', 'novelpro'); ?></p>
    <?php endif; ?>
<?php endif; ?> 
            <?php if (comments_open()) : ?>
        <div class="commentform_wrapper">
            <div id="comment-form">
        <?php  $custom_comment_field = '<p class="comment-form-comment">
        <label for="comment">'.__("Comment","novelpro") .'<span class="required">*</span></label>
        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';  //label removed for cleaner layout
        // all fields
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );       $fields =  array(
          'author' =>
            '<p class="comment-form-author"><label for="author">' . __( 'Name', 'novelpro' ) . '</label> ' .
            ( $req ? '<span class="required">*</span>' : '' ) .
            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' /></p>',

          'email' =>
            '<p class="comment-form-email"><label for="email">' . __( 'Email', 'novelpro' ) . '</label> ' .
            ( $req ? '<span class="required">*</span>' : '' ) .
            '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' /></p>',

          'url' =>
            '<p class="comment-form-url"><label for="url">' . __( 'Website', 'novelpro' ) . '</label>' .
            '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
            '" size="30" /></p>',
        );     
          comment_form(array(
               'comment_field'               => $custom_comment_field,
               'comment_notes_after'         => '',
               'logged_in_as'                => '',
               'comment_notes_before'        => '',
               'title_reply'                 => __('Leave a Reply', 'novelpro'),
               'cancel_reply_link'           => __('Cancel Reply', 'novelpro'),
               'label_submit'                => __('Post Comment', 'novelpro'),
                'fields'                    => apply_filters( 'comment_form_default_fields', $fields ),
          )); ?>
            </div>
        </div>
<?php endif; // if you delete this the sky will fall on your head   ?>
</div>