<?php get_filename(); ?>

<div id="comments">

	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php echo( 'Эта страница защищена паролем. Введите пароль для просмотра комментариев.' ); ?></p></div>
	<?php
		return;
		endif;
	?>

	<?php if ( have_comments() ) : ?>
		<h3 id="comments-title"><?php comments_number( 'Нет комментариев', 'Один комментарий', 'Комментариев: %' ); ?></h3>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<?php if (function_exists('wp_corenavi_comments')) wp_corenavi_comments(); ?>
		<?php endif; ?>
		<ol class="commentlist"><?php wp_list_comments(); ?></ol>
		<?php else : if ( ! comments_open() ) : ?>
			<p class="nocomments"><?php echo( 'Комментарии закрыты.' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>
	<?php comment_form( array (
								'comment_field' => '<p class="comment-form-comment"><label>Комментарий</label><textarea id="comment" name="comment"></textarea></p>',
								'must_log_in' => '<p class="must-log-in">' . sprintf( 'Вы должны <a href="%s">войти</a> для написания комментария.' , wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
								'logged_in_as' => '<p class="logged-in-as">' . sprintf( 'Вошли как <a href="%1$s">%2$s</a>. <a href="%3$s">Выйти?</a>', admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
								'comment_notes_before' => '<p class="comment-notes">Ваш e-mail не будет опубликован.'  . ( $req ? $required_text : '' ) . '</p>',
								'comment_notes_after' => '',
								'id_form' => 'commentform',
								'id_submit' => 'submit',
								'title_reply' => 'Оставить комментарий',
								'title_reply_to' => 'Оставить комментарий к %s',
								'cancel_reply_link' => 'Отменить комментарий',
								'label_submit' => 'Отправить',
								'fields' => apply_filters( 'comment_form_default_fields', array(
									'author' => '<p class="comment-form-author"><label>Имя</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></p>',
									'email' => '<p class="comment-form-email"><label>E-mail</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' /></p>',
									'url'  => '<p class="comment-form-url"><label>Сайт</label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></p>'
									))
							  )
					  );
	?>

</div>

<?php get_filename(); ?>