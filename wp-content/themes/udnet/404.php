<?php
	get_header();
	get_filename();
?>

	<section class="container-fluid container-404-decor">
		<div class="container container-404">
			<img src="<?= THEME_URL ?>/img/404.png" alt="" class="img-404">
			<h1 class="title-404">
				Страница не найдена
			</h1>
			<div class="caption-404">
				Вы ввели неверный адрес или она была удалена. Возможно, вы найдете нужную перейдя на главную страницу:
			</div>
			<a href="/" class="btn-404 btn-custom">Вернуться на главную</a>
		</div>
	</section>



<?php
	get_filename();
	get_footer();
?>