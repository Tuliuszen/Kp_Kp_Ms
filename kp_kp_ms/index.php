<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes">
		<title>KP_KP_MS</title>
		<style>
			#logo {
				text-align: center;	
			}	
			
			header {
				text-transform: uppercase;
			}
			
			hr{
				background-color: #EBEBEB;
				height: 1px;
				color: #EBEBEB;
				border: 0px;
			}
			
			article {
				text-align: center;	
				font-family: Calibri;
			}	
			
			aside {
				text-align: center;	
				font-family: Calibri;
			}	
			
			footer {
				text-align: center;	
				font-family: Calibri;
			}	
			
			nav {
				border-top-color: #EBEBEB;
				text-align: center;
				width: 100%;
				margin: auto;
				font-family: Calibri;
			}
			
			ul {
				display: inline-block;
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #FFFFFF;
			}
			
			li {
				float: left;
			}
			
			li a, .dropbtn {
				display: inline-block;
				color: black;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				}
			
			/*Przyciski, gdy się najedzie kursorem*/
			li a:hover, .dropdown:hover .dropbtn {
				text-decoration: underline;
				color: red;
			}
			
			li.dropdown {
				display: inline-block;
			}
			.dropdown-content {
				background-color: #F1F1F1;
				display: none;
				position: absolute;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}
			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
				list-style-position:inside;
				border-color: #ebebeb;
				border-bottom: 1px solid #ebebeb;	
				border-left: 1px solid #ebebeb;	
				border-right: 1px solid #ebebeb;			
			}
			.dropdown-content a:hover {background-color: #f1f1f1;}
			.dropdown:hover .dropdown-content {
				display: block;
			}	
			
			.title {
				position: relative;
				z-index: -1;
			}
			#article_header h1:before {
			    border-top: 1px solid #ebebeb;
				content:"";
				margin: 0 auto;
				position: absolute;
				top: 15px; left: 0; right: 0; bottom: 0;
				width: 100%;
				z-index: -2;
			}
			
			#article_header span { 
				background: #fff; 
				padding: 0 15px; 
			}
			
		</style>
	</head>
	<body>
		<!--
		<jdoc:include type="modules" name="top" />
		<jdoc:include type="modules" name="left" />
		<jdoc:include type="modules" name="breadcrumbs" />
		<jdoc:include type="component" />
		<jdoc:include type="modules" name="right" />
		<jdoc:include type="modules" name="footer" />
		<jdoc:include type="modules" name="debug" />
		<jdoc:include type="modules" name="bottom" />
		-->
		
		<header>
			<!-- Tu umieszczamy zawartość nagłówka strony -->
			<div id="logo">
				<h1>Logo</h1>
				<img src="">
			</div>
			<hr>
			<nav>
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#news">News</a></li>
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropbtn">Dropdown</a>
						<div class="dropdown-content">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
					</li>
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropbtn">Dropdown</a>
						<div class="dropdown-content">
							<a href="#">Link 4</a>
							<a href="#">Link 5</a>
							<a href="#">Link 6</a>
						</div>
					</li>
				</ul>
			</nav>
			<hr>
		</header>
		<article>
			<div id="article_header">
				<h1 class="title">
					<span>Kontakt</span>
				</h1>	
			<!--	Tu umieszczamy zawartość nagłówka artykułu	-->
			</div>
			<!--	Tu umieszczamy zawartość treści artykułu	-->
			<div id="footer">
			<!--	Tu umieszczamy zawartość stopki artykułu	-->
			</div>
		</article>
		<aside>
			<!--	Tu umieszczamy elementy poboczne (np. reklamy, zajawki innych artykułów)	-->
		</aside>
		<footer>
			<!--	Tu umieszczamy zawartość stopki strony	-->
		</footer>
	</body>
</html>