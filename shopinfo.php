<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>남대 맛집 추천!</title>
	<link rel="stylesheet" type="text/css" href="shopinfo_layout_mobile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- 상단 헤더 -->
	<header>
		<a href="mainpage.php"><h1>남대 맛집 추천!</h1></a>
	</header>

	<!-- 메뉴 네비게이션-->
	<nav>
		<a href="mainpage.php">음식 추천!</a> &nbsp;|&nbsp;
		<a href="mainpage_shop.php">가게 추천!</a> &nbsp;|&nbsp;
		<a href="shoplist.php">가게 리스트</a> &nbsp;|&nbsp;
		<a href="foodlist.php">음식 리스트</a>
	</nav>

	<?php
		

		$shop = array();
		$shop_menu = array();

		$conn = mysqli_connect("localhost","root","","web");

		$select_query = "SELECT store, pic, tel, time, address FROM store";

		$result_set = mysqli_query($conn, $select_query);

		
		while ($row = mysqli_fetch_array($result_set)){

			array_push($shop, array(
				"name" => $row['store'], "photo" => './data/store/'.$row['pic'], "tel" => $row['tel'], "time" => $row['time'], "adr" => $row['address']
			));
		}
		$select_query = "SELECT store, name_food, price_food, pic_food FROM food_store";
		$result_set = mysqli_query($conn, $select_query);

		while ($row = mysqli_fetch_array($result_set)){
			array_push($shop_menu, array(
				"name" => $row['store'], "photo" => './data/menu/'.$row['pic_food'], "menu_name" => $row['name_food'], "price" => $row['price_food']
			));
		}
	?>

	<?php
		$getName = $_GET["name"];
		$getValue = 0;
		$findValue = 0;
		foreach ($shop as $value) {
			if($getName == $value["name"]){
				$getValue = $findValue;
			}
			$findValue += 1;
		}
	?>
	<aside> <!-- 가게 사진 및 정보-->
		<div class="shop">
			<div class="shopLeft">
				<img class="shopImage" src="<?php echo $shop[$getValue]["photo"] ?>">
			</div>

			<div class="shopRight">
				<h2 class="shopInfo"><?php echo $shop[$getValue]["name"]?></h2>
				<hr>
				<p><?php echo $shop[$getValue]["tel"]?></p>
				<hr>
				<p><?php echo $shop[$getValue]["time"]?></p>
				<hr>
				<p><?php echo $shop[$getValue]["adr"]?></p>
			</div>
		</div>

	</aside>

	<aside> <!-- 가게 메뉴들-->
		<?php 
		foreach($shop_menu as $value) { 
			if($value["name"] == $shop[$getValue]["name"]){ ?>
				<div class="menu">
					<hr>
					<div class="menuLeft">
						<img class="menuImage" src="<?php echo $value["photo"] ?>" alt="아직 이미지가 없어요"/>
					</div>

					<div class="menuRight">
						<h3 class="menuInfo"><?php echo $value["menu_name"]?></h3>
						<p><?php echo $value["price"] ?>원</p>
					</div>
				</div>
		<?php  
			}
		}?>
	</aside>

	<footer>
		Develop by 박경태, 이승민, 정우석
	</footer>
</body>
</html>
