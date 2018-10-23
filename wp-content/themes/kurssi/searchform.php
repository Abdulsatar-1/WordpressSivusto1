<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
				
					<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Haku" class="search-field">
					<button type="submit" id="searchsubmit" value="Hae" class="sininen"><i class="fi-magnifying-glass large"></i></button>
				
			</form>
<style>
.search-block{
	margin:0 1em 0 0;
}

.search-block form{
	float:right;
}

.search-field{
	border-radius: 10px 0 0 10px;
	border:0;
	height:26px;
	padding:5px 10px;
	display:block;
	margin:7px 0;
	float:left;
	width:80%;
	box-sizing:border-box;
}

.search-block button{
	border-radius:0 10px 10px 0;
	margin:7px 0;
	padding:5px 10px;
	color:rgb(236,240,241);
	float:left;
	height:26px;
	border:0;
	line-height:12px;
	width:20%;
	box-sizing:border-box;
}
</style>