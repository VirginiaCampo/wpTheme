<?php
/*

@package WordPress
@subpackage wpTheme
@since wpTheme

	========================================
		ASIDE POST FORMATING
	========================================
* The main template file. It is required in all themes.
*/
?>
<!--  -->
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<time datetime=<?php the_time('Y-m-d'); ?>></time>
	<?php tha_entry_before(); ?>
		<?php get_template_part( 'template-parts/part', 'section' ); ?>
	<?php tha_entry_after(); ?>

	<div class="icon icon-lightbulb pull-left" title="<?php esc_attr_e( 'Aside', 'wpTheme' ); ?>">
	</div>
	<?php get_template_part( 'template-parts/part', 'micropostmeta' ); ?>

</article>
