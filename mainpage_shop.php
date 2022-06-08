<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>남대 맛집 추천!</title>
	<link href="mainpage_layout.css" rel="stylesheet">
</head>
<body>
	<!-- 상단 헤더 -->
	<header>
		<a href="mainpage.php"><h1>남대 맛집 추천!</h1></a>
	</header>

	<!-- 메뉴 네비게이션-->
	<nav>
		<a href="shoplist.php">가게 리스트</a> &nbsp;|&nbsp;
		<a href="foodlist.php">음식 리스트</a>
	</nav>

	<!-- 메인 내용 들어갈 aside-->
	<aside>
		<?php
		// DB에서 데이터들 배열로 저장
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

			shuffle($shop); //배열 무작위로 섞음, 섞은 후 배열 0 ~ 8번까지 9개 출력

			for($i=0; $i<9; $i++){
				echo "<figure class='snip1361'>
					<img src='".$shop[$i]["photo"]."' />
					<figcaption>
					  <h3>".$shop[$i]["name"]."</h3>
					  <p>".$shop[$i]["time"]."</p>
					  <p>".$shop[$i]["adr"]."</p>
					  <p>".$shop[$i]["tel"]."</p>
					</figcaption>
					  <a href='shopinfo.php?name=".$shop[$i]["name"]."'></a>
				</figure>";

				if(($i+1)%3 == 0){
					echo "<br>";
				}
			}
		?>
		<br>
		<button type="button" onClick="location.href='mainpage.php'">음식 추천!</button>
		<button type="button" onClick="window.location.reload()">새로고침</button>
		<button type="button" onClick="location.href='mainpage_shop_mobile.php'">모바일 버전</button>
	</aside>

	<!-- 최하단 footer-->
	<footer>
		Develop by 박경태, 이승민, 정우석
	</footer>
</body>
</html>
