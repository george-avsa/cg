<?php 

require "libs/db.php";
require_once "handlers/session_checker.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/cg.css">
	<!-- styles for page with tasks -->
	<link rel="stylesheet" href="style/task.css">
	<!-- styles for main page -->
	<link rel="stylesheet" href="style/main.css">
	<!-- styles for creation forms -->
	<link rel="stylesheet" href="style/forms_for_adding.css">
	<!-- styles for acess data -->
	<link rel="stylesheet" href="style/add_task.css">
	<!-- styles for club control panel -->
	<link rel="stylesheet" href="style/club_control_panel.css">
	<!-- styles for preloader -->
	<link rel="stylesheet" href="style/preloader.css">
	<!-- styles for account header -->
	<link rel="stylesheet" href="style/acc_header.css">
	<title>CG</title>
<script src="libs/jquery.js"></script>
</head>
<body>	
	<script>
		$(document).ready(function() {
			$( ".task_arrow_down" ).click(function() {
				$(".task_name, .task_clubname_deadline").toggleClass( "border-bottom" );
				$(".task_extra").slideToggle();
			});
		});
	</script>
	<div class="header">
		<div class="header_logo"></div>
		<div class="header_shadow">
			
		</div>
	</div>
	<div class="wrapper">
		<div class="sidebar">
			<div href="" class="sidebar_link first_link_side" id="panel_exc"><img src="images/panel_icons/main.png" alt="" class="sidebar_link_icon"> Панель задач</div>
			<div href="" class="sidebar_link selected_link_side" id="list_exc"><img src="images/panel_icons/tasks.png" alt="" class="sidebar_link_icon"> Список задач</div>
			<div href="" class="sidebar_link" id="acc_exc"><img src="images/panel_icons/key.png" alt="" class="sidebar_link_icon"> Аккаунты</div>
			<a href="login.php">
				<div class="sidebar_logout">
					<img src="images/panel_icons/logout.png" alt="" class="sidebar_link_icon"> Выход
				</div>
			</a>
		</div>
		<div class="content">
			
		</div>
	</div>
	<style type="text/css">
		#panel_exc, #acc_exc {
			display: none;
		}
	</style>
</body>
<script>
	function loadHTML(url_header, url_content){
		$(".header_shadow").load(url_header);
		$(".content").load(url_content);
	}
	loadHTML('template/task_header.html', 'template/task.html');
	$( "#list_exc" ).click(function() {
		loadHTML("template/header_empty.html", "template/preloader.html");
		$('.selected_link_side').removeClass("selected_link_side");
		$(this).addClass("selected_link_side");
		setTimeout(loadHTML, 2000, 'template/task_header.html', 'template/task.html');
	});
	$( "#panel_exc" ).click(function() {
		loadHTML("template/header_empty.html", "template/preloader.html");
		$('.selected_link_side').removeClass("selected_link_side");
		$(this).addClass("selected_link_side");
		setTimeout(loadHTML, 2000, 'template/header_empty.html', 'template/add_task.html');
	});
	$( "#acc_exc" ).click(function() {
		loadHTML("template/header_empty.html", "template/preloader.html");
		$('.selected_link_side').removeClass("selected_link_side");
		$(this).addClass("selected_link_side");
		setTimeout(loadHTML, 2000, 'template/acc_header.html', 'template/create_club.html');
	});
</script>
<script>
		$.ajax({
		url: "handlers/check_user.php",
		cache: false,
		success: function(html){
			if (html == 2) {
				$('#panel_exc').css('display','flex');
				$('#acc_exc').css('display','flex');
			}
   			
   			$('#clubs_list_wrapper').html(full);
   		}
   	});
</script>
</html>