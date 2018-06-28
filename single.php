<?php get_header(); ?>
<div class="cerceve" style="
    background: url(http://i.hizliresim.com/3zY8b4.jpg);
">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="cercevebaslik">
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
		</div>
		<div class="yazialani">
			<?php the_content();?>
		</div>
		<?php if (get_option('etiketler')=='yes') { ?>
			<div class="ace"></div>			
			<div class="etiyiyenkediler">
				<strong>Etiketler:</strong> <?php the_tags(''); ?>
			</div>
			<?php } else { ?>
			<div class="persil"></div>
			<?php } ?>
		<?php comments_template(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>