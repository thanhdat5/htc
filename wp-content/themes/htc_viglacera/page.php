<?php
/**
 * Template Name: Trang mặc định
 * Description: Mẫu Trang mặc định
 *
 */

get_header();

the_post();
?>
<div class="htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h1 class="htc-page-title"><?php echo get_the_title(); ?></h1>
		</div>
	</div>
	<div class="htc-page-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php
get_footer();
