<?php session_start();?>
<!doctype html>
<html>
<head>
	
	<?php require_once("config.php");?>
		
	<?php 
		if (!isset($_SESSION["loggedin"])){
			auto_login();
		}
	
	?>
	
	<title><?php echo $page_title; ?></title>
	<meta charset="utf-8"> 
	<meta name="keywords" content="<?php echo $page_keywords; ?>" />
	<meta name="description" content="<?php echo $page_description; ?>" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/nganh.js"></script>
	<script type="text/javascript" src="js/monhoc.js"></script>
	<script type="text/javascript" src="js/chuyennganh.js"></script>
	<script type="text/javascript" src="js/lop.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.js"></script>
	<link rel="stylesheet" 	href="css/ui-lightness/jquery-ui-1.10.2.custom.css" />
<!-- 	<link rel="stylesheet" 	href="css/jmetro/jquery-ui-1.10.2.custom.css" /> -->
    
</head>
<body>
	<div id="pageWrapper">
		<div id="header">
			
			<h1 id="siteTitle"> Hệ Thống Quản Lý Đào Tạo </h1>
			<img id="logo2" src="<?php echo IMAGES_DIR;?>/logo-fpt.png" />		
		</div> <!-- End of header -->
		
		<div id="nav"> 
		<div  id="menu" > 
			<a href="index.php">Trang chủ</a> |  
			<a href="timkiem.php">Tìm kiếm</a>	|
			<a href="gioithieu.php">Giới thiệu</a>		 
		</div>		 
		<div  id="login" > 
			<?php 
				// lấy cookie đăng nhập tự động
				 
				if (isset($_SESSION["loggedin"])){
					echo "Xin chào ". $_SESSION["HoTen"];
					echo " | <a href='login.php?logut' id='aLogout'>Thoát</a>";	
				}else {
					
					echo "<a href='login.php'>Đăng nhập</a>";
				}
			?>
		</div>
		</div> <!-- End of Navigation menu --> 
		
		<div id="contentWrapper" > 
			<div id="leftSide" > 
				<div class="group-box" id="danhmuc"> 
						<div class="title">DANH MỤC</div>  
						<div class="group-box-content">
							<ul>								
								<li> <a href="nganh.php"> Ngành</a> </li>
								<li> <a href="chuyennganh.php">Chuyên ngành</a> </li>
								<li> <a href="lop.php">Lớp</a> </li>
								<li> <a href="sinhvien.php">Sinh viên</a> </li>
								<li> <a href="monhoc.php">Môn học</a> </li>
								
							</ul>						
						</div>						
				</div>
				<div class="group-box"> 
						<div class="title">Menu</div> 
						<div class="group-box-content">
						<ul>							
							<li> <a href="index.php">Link 1</a> </li>
							<li> <a href="index.php">Link 2</a> </li>
							<li> <a href="index.php">Link 3</a> </li>
							<li> <a href="index.php">Link 4</a> </li>
							<li> <a href="index.php">Link 5</a> </li>
							<li> <a href="index.php">Link 6</a> </li>
							<li> <a href="index.php">Link 7</a> </li>
						</ul>						
						</div>						
				</div>				 
			</div> <!-- End of Left Side -->
		<div id="mainContent">
				
