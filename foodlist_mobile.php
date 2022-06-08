<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>남대 맛집 추천!</title>
	<link href="foodlist_layout.css" rel="stylesheet">
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
		<a href="shoplist_mobile.php">가게 리스트</a>
	</nav>

	<!-- 메인페이지에 DB 배열로 받아오는 부분 그대로 넣으시면 돼요-->
	<?php
		$menu = array();

			
		$conn = mysqli_connect("localhost","root","","web");

		$select_query = "SELECT category, store FROM store_category";

		$result_set = mysqli_query($conn, $select_query);

		
		while ($row = mysqli_fetch_array($result_set)){

			array_push($menu, array(
				"category" => $row['category'],"shopname" => $row['store']
			));

	
		}

		mysqli_close($conn);



		sort($menu); // 배열 정렬
		?>
	<aside> <!-- 가게 사진 및 정보-->
		<?php 
		$nowCategory = "";
		foreach ($menu as $value) { ?>
		<ul>
			<?php 
				if($nowCategory != $value["category"]){
					echo "<li><h2>
						<a name='".$value["category"]."'>".$value["category"]."</a></h2>";
					}
					$nowCategory = $value["category"];
				 ?>
				<ul>
					<li>
						<a href='shopinfo.php?name=<?php echo $value["shopname"]; ?>'><?php echo $value["shopname"]; ?></a>
					</li>
				</ul>
			</li>
		</ul>
		<?php  }?>
		<button type="button" onClick="location.href='foodlist.php'">PC 버전</button>
	</aside>

	<footer>
		Develop by 박경태, 이승민, 정우석
	</footer>
</body>
</html>