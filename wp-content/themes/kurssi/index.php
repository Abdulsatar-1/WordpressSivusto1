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

<style>
main{
	width:85%;
	float:left;
	padding:0 1em;
	box-sizing:border-box;
}
main > h2{
	margin-top:0;
}

main > h3{
	font-weight:normal;
	font-size:1em;
	padding:0.5em 1em;
	color:rgb(236,240,241);
	border-radius:8px 8px 0 0;
	margin-bottom:0.3em;
}

.post img{
	max-width:100%;
	height:auto;
}
.post p{
		width:50%;
		float:right;
		padding-left:1em;
		box-sizing:border-box;
		margin-top:0;
	}
.post p:nth-of-type(1){
		float:left;
		padding:0;
	}
	
@media screen and (min-width:641px) and (max-width:999px) {
	article{
		width:33.3%;
	}
}
article{
	width:20%;
	float:left;
    height:320px;
}
article a{
	display:block;
	max-width:156px;
	padding:3px;
	margin:auto;
	text-decoration:none;
	color:inherit;
}
article img{
	display:block;
	margin:auto;
	max-width:100%;
	height:auto;
	box-shadow:0px 1px 3px #888;
}
article h4{
	font-weight:normal;
	margin:0.2em 0;
	padding:0 0.2em;
}
article p{
	font-size:0.7em;
	margin:0.5em 0;
	padding:0 0.2em;
}
article a:hover{
	background-color:rgb(237,240,241,0.2);
}

</style>