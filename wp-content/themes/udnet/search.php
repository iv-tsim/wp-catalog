<?php
	get_header();
	get_filename();
?>



	<section class="container-info container-fluid z-index-10">
		<div class="container z-index-10">
			<?php get_template_part('breadcrumbs') ?>
		</div>
	</section>

	<div class="container-fluid z-index-10">
		<div class="container z-index-10">
			<div class="block-title">
				<h1 class="title">Поиск</h1>
			</div>
			<div class="container-search">
				<?php echo get_search_form(); ?>
				<div class="title-container-search">
					<?php
					$s = htmlspecialchars ( $_GET['s'] );
					if (!have_posts()) { ?> По запросу "<?php the_search_query(); ?>" ничего не найдено. <?php
					} else { ?> Результат поиска по запросу "<?php the_search_query(); ?>":  <?php }
					?>
				</div>
				<div class="list-search">
					<?php
						if (have_posts()) :
						while (have_posts()) : the_post();
					?>
					<a href="<?php the_permalink() ?>" class="link-container-search"><?php the_title() ?></a>
					<?php endwhile; endif; ?>
				</div>				
			</div>
		</div>
	</div>





<?
	get_template_part('./block/call_back');
?>


<?php
	get_filename();
	get_footer();
?>