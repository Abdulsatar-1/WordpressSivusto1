<?php get_header(); ?>
<div class="content-row">
<?php get_sidebar(); ?>

	
	<main>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile;	?>
	<?php endif; ?>
	
	<h3 class="sininen">Uutuudet</h3>
	<?php
		$uudet_artikkelit = wp_get_recent_posts(array('numberposts'=>'5'));
		//print_r($uudet_artikkelit);
		foreach ($uudet_artikkelit as $artikkeli):
	?>
	<article>
		<a href="<?php echo get_permalink($artikkeli['ID']); ?>">
			<?php echo get_the_post_thumbnail($artikkeli['ID'],'thumbnail');?>
			<h4><?php echo $artikkeli['post_title']; ?></h4>
			<p><?php echo substr($artikkeli['post_excerpt'],0,100);	?>...</p>
		
		</a>
	</article>
		<?php endforeach; ?>
	</main>
</div>	
	
	
<?php
get_footer();
?>

