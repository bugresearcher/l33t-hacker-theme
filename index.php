<?php get_header(); ?>
<?php $i=1; if (have_posts()) : while (have_posts($i<=get_option('posts_per_page'))) : the_post(); ?>
	<div class="animated fadeInRightBig" id="alibabaninyazisi<?php echo $i;?>">
		<div class="basliklar" style="
    background: url(&quot;http://i.hizliresim.com/3zY8b4.jpg&quot;);
">
			<span class="acilyaziacil<?php echo $i;?>"><?php the_title(); ?></span>
			<div class="yaziyagit">
				<a href="<?php the_permalink() ?>"><span style="margin-top:-2px;" class="hint--left" data-hint="<?php comments_number(__('0 Yorum'), __('1 Yorum'), __('% Yorum')); ?>"><i class="icon-arrow-right"></i></span></a>
			</div>
		</div>
		<div class="kirkharamilergeliyor<?php echo $i;?>" style="background: url(&quot;http://i.hizliresim.com/3zY8b4.jpg&quot;);border-top: 1px #27f6a4 solid;border-bottom: 1px #27f6a4 solid;box-shadow: 0 1px 4px #27f6a4;padding: 10px;">
			<div class="yazialani">
				<?php the_content();?>
			</div>
			<?php if (get_option('etiketler')=='yes') { ?>
			<div class="ace"></div>
			<?php } else { ?>
			<div class="persil"></div>
			<?php } ?>
		</div>
	</div>
<?php $i++; endwhile; else: ?>
<?php endif; ?>
<div class="animated fadeInUpBig">
<div class="right"><?php next_posts_link('Sonraki Sayfa <i class="icon-caret-right"></i>') ?></div>
<div class="left"><?php previous_posts_link('<i class="icon-caret-left"></i> Önceki Sayfa') ?></div>
</div>
<div class="persil"></div>
<?php get_footer(); ?>