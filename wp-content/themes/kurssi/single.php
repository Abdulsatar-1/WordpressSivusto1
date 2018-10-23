<?php get_header(); ?>
<div class="content-row">
<?php get_sidebar(); ?>

	
	<main>
        <div <?php post_class();?>>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile;	?>
	<?php endif; ?>
	</div>
	<h3 class="sininen">Katsotuimmat</h3>
        <?php wpp_get_mostpopular('wpp_start=" "&wpp_end=" "&thumbnail_width=150&thumbnail_height=200&excerpt_length=100&limit=5&post_html="<article><a href=\'{url}\'>{thumb_img}<h4>{text_title}</h4><p>{summary}</p></a></article>"'); ?>
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
main  h2{
	margin-top:0;
    color:rgb(44,62,80);
}

main > h3{
	font-weight:normal;
	font-size:1em;
	padding:0.5em 1em;
	color:rgb(236,240,241);
	border-radius:8px 8px 0 0;
	margin-bottom:0.3em;
    float:left;
    width: 100%;
    box-sizing: border-box;
}

.post p{
    width: 50%;
    float:right;
    padding-left: 1em;
    box-sizing: border-box;
    margin-top: 0;
    }    
.post p:nth-of-type(1){
    float:left;
    padding: 0;    
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