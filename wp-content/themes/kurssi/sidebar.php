<?php
wp_nav_menu(array('container' => 'nav','container_class' =>'left-nav'));

if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('vimpaimet'));
?>





<style>
body, ul{
	margin:0;
	padding:0;
	
}

.left-nav{
	width:10%;
	float:left;
}

.left-nav li{
	width:100%;
	
}
.left-nav li:nth-of-type(1){
	display:none;
}


@media screen and (min-width:641px){
	.left-nav li{
		display:inline-block !important;
	}
	.left-nav > ul > li:nth-of-type(1){
		display:none !important;
	} 
	
	.post p{!important
		width:50%;
		float:right;
		padding-left:1em;
		box-sizing:border-box;
		margin-top:0;
	}
	.post p:nth-of-type(1){!important
		float:left;
		padding:0;
	}

}




@media screen and (min-width:641px) and (max-width:999px) {
	article{
		width:33.3%;
	}
}

@media screen and (max-width:640px){
	.post img!important{
		display:block;
		margin:auto;
	}
	
	
	.banner{
		display:none;
	}
	
	.left-nav{
		width:100%;
		text-align:center;
	}
	
	article{
		width:50%;
	}
	
	.tunnus{
		width:100%;
	}
	
	.main-header{
		height:auto;
	}
	
	
	
	main{
		width:100%;
	}
	
	.left-nav li{
	display:none;
	
	}
	
	
	.left-nav > ul > li:nth-of-type(1){
		display:inline-block;
	}

	}

.left-nav a{
	text-decoration:none;
	width:100%;
	line-height:1em;
	color:black;
	display:block;
	padding:0.5em 0 0.5em 0.5em;
	border-top:#CCC solid 1px;
}
.left-nav a:hover{
	background-color:rgb(237,240,241,0.2);
}

.left-nav li:last-child a {
	border-bottom:#CCC solid 1px;
}

.sub-menu{
	display:none;
	font-size:0.9em;
}

.sub-menu a{
	margin-left:1em;
}

.sub-menu li:last-child a {
	border-bottom:none;
}

.current-menu-item > a,.current-category-ancestor > a,.current-post-ancestor > a{
	font-weight:bold;
	color:	rgb(0, 179, 179);
}
.current-menu-item > ul, .current-category-ancestor > ul,.current-post-ancestor > ul{
	display:block;
}
</style>