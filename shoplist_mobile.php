<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>남대 맛집 추천!</title>
	<link rel="stylesheet" type="text/css" href="shoplist_layout_mobile.css">
</head>
<body>
	<!-- 상단 헤더 -->
	<header>
		<a href="mainpage_mobile.php"><h1>남대 맛집 추천!</h1></a>
	</header>

	<!-- 메뉴 네비게이션-->
	<nav>
		<a href="mainpage_mobile.php">음식 추천!</a> &nbsp;|&nbsp;
		<a href="mainpage_shop_mobile.php">가게 추천!</a> &nbsp;|&nbsp;
		<a href="foodlist_mobile.php">음식 리스트</a>
	</nav>

	<!-- 메인페이지에 DB 배열로 받아오는 부분 그대로 넣으시면 돼요-->
	<?php


		$shop = array();

		$conn = mysqli_connect("localhost","root","","web");

		$select_query = "SELECT store, pic, tel, time, address FROM store";

		$result_set = mysqli_query($conn, $select_query);

		
		while ($row = mysqli_fetch_array($result_set)){

			array_push($shop, array(
				"name" => $row['store'], "photo" => './data/store/'.$row['pic'], "tel" => $row['tel'], "time" => $row['time'], "adr" => $row['address']
			));

	
		}

		mysqli_close($conn);

		sort($shop); // 배열 정렬
		?>
	<aside> <!-- 가게 사진 및 정보-->
		<?php 
		foreach ($shop as $value) { ?>
		<a href="shopinfo.php?name=<?php echo $value["name"] ?>">
		<div class="shop">
			<div class="shopLeft">
				<img class="shopImage" src="<?php echo $value["photo"] ?>">
			</div>

			<div class="shopRight">
				<h2 class="shopInfo"><?php echo $value["name"]?></h2>
				<hr>
				<p><?php echo $value["tel"] ?></p> <!--한식,분식 등-->
				<hr>
				<p><?php echo $value["time"] ?></p>
				<hr>
				<p><?php echo $value["adr"] ?></p>
			</div>
		</div>
		</a>
		<?php  }?>
	</aside>

	<footer>
		Develop by 박경태, 이승민, 정우석
	</footer>
</body>
</html>
