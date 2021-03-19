<?php get_filename(); ?>

<form method="get" id="searchform" class="section-header-search" style="display: none;" action="<?php echo home_url( '/' ); ?>">
	<input type="text" class="text-search" placeholder="Поиск" value="" name="s" id="s">
	<input type="hidden" value="post" name="post" />
	<input type="submit" id="searchsubmit" value="" class="submit-search">
</form>

<?php get_filename(); ?>