<!DOCTYPE html>
<html>
    <head>
    	<title> <?php wp_title('|',True , 'Right');bloginfo('name');?> </title>
    	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css"/>
    	<script src="<?php bloginfo('template_url'); ?>/JS/java.js""></script>
        <?php wp_head();?>
    </head>

<body> 
		<!-- Navigation Menu Start -->
			<div class="nav_menu">
				<a>
					<ul>
						<center>	
							<b>
								<li><a href="#img1" class="nav_menu_a" >الرئيسية</a></li>
								<li><a href="#img2" class="nav_menu_a" >مختارات أدبيبة</a></li>
								<li><a href="#img3" class="nav_menu_a" >أغانِ</a></li>
								<li><a href="#img4" class="nav_menu_a" >قصص الأغانِ</a></li>
								<li><a href="#img5" class="nav_menu_a" >لها و له</a></li>
							</b>
						</center>
					</ul>
				</a>
			</div>
		<!-- Navigation Menu End -->

<!--Scrolling images and Texts Start -->
<table>
	<tr class="header_Title1">
		<td>ارئيسية</td>
	</tr>

	<tr class="header_Title2">
		<td>مختارات أدبية</td>
	</tr>

	<tr class="header_Title3">
		<td>أغان</td>
	</tr>

	<tr class="header_Title4">
		<td>قصص أغان</td>
	</tr>

	<tr class="header_Title5">
		<td>لها وله</td>
	</tr>

</table>


	<div id="img1" class="img1 images"></div>
		<center><a href="#" class="header_Title1">Title</a></center>
			<div class="tex1 texts">
						<h3>Here it goes the content you want the world to see.</h3>
			</div>



	<div id="img2" class="img2 images"></div>
		<center><a href="#" class="header_Title2">Title</a></center>	
			<div class="tex2 texts">
						<h3>Here it goes the content you want the world to see.</h3>
		</div>



	<div id="img3" class="img3 images"></div>
		<center><a href="#" class="header_Title3">Title</a></center>
			<div class="tex3 texts">
						<h3>Here it goes the content you want the world to see. </h3>
		</div>



	<div id="img4" class="img4 images"></div>
		<center><a href="#" class="header_Title4">Title</a></center>
			<div class="tex4 texts">
						<h3>Here it goes the content you want the world to see. </h3>
		</div>



	<div id="img5" class="img5 images"></div>
		<center><a href="#" class="header_Title5">Title</a></center>	
			<div class="tex5 texts">
						<h3>Here it goes the content you want the world to see. </h3>
		</div>
<!--Scrolling images and Texts End -->