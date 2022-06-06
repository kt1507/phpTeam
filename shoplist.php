<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>남대 맛집 추천!</title>
	<style>
		@font-face {
		    font-family: 'EarlyFontDiary';
		    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_220508@1.0/EarlyFontDiary.woff2') format('woff2');
		    font-weight: normal;
		    font-style: normal;
		}
		body{
			font-family: 'EarlyFontDiary';
		}
		header{
			height: 50px;
			padding: 10px;
			padding-bottom: 30px;
			text-align: center;
		}
		nav{
			height: 25px;
			margin-top: 10px;
			padding: 15px 0 10px 0;
			text-align: center;
			border-top: darkgray 2px solid;
			border-bottom: darkgray 2px solid;
		}
		aside{
			min-height: 350px;
			margin-top: 10px;
			margin-bottom: 10px;
			padding: 10px;
			text-align: center;
		}
		footer{
			height: 50px;
			margin-top: 10ox;
			padding: 15px;
			background-color: dimgray;
			font-size: 10px;
			color: whitesmoke;
		}
		a{
			text-align: center;
			text-decoration: none; /* 링크 밑줄 제거*/
			color: inherit; /* 링크 색상 제거*/
		}
		.shop{
			width: 800px;
			height: 150px;
			margin: 0 auto;
			display: flex;
			font-size: 15px;
			padding: 10px;
			margin-bottom: 10px;
		}
		.shopLeft{
			float: left;
			width: 50%;
		}
		.shopImage{
			float: right;
			height: 150px;
			width: 230px;
			margin : 10px;
		}
		.shopRight{
			float: right;
			width: 40%;
			padding-left: 15px;
		}
		.shopInfo{
			float: left;
			width: 100%;
			text-align: left;
			padding-top: 10px;
			margin: 10px;
		}
		h2{
			padding-top: 20px;
			font-size: 25px;
		}
		hr{
			color: lightgray;
		}
		hr.small{
			width: 50%;
			float: left;
		}
		p{
			text-align: left;
			margin-left: 10px;
			margin: 10px;
		}
		.v-line{
			border-left: solid black 1px;
			height: 180px;
			float: left;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<!-- 상단 헤더 -->
	<header>
		<h1>남대 맛집 추천!</h1>
	</header>

	<!-- 메뉴 네비게이션-->
	<nav>
		<a href="mainpage.php">음식 추천!</a> &nbsp;|&nbsp;
		<a href="mainpage_shop.php">가게 추천!</a> &nbsp;|&nbsp;
		<a href="foodList">음식 리스트</a>
	</nav>

	<!-- 메인페이지에 DB 배열로 받아오는 부분 그대로 넣으시면 돼요-->
	<?php


		$shop = array();

		$conn = mysqli_connect("localhost","root","","web");

		$select_query = "SELECT name, pic, tel, time, address FROM store";

		$result_set = mysqli_query($conn, $select_query);

		
		while ($row = mysqli_fetch_array($result_set)){

			array_push($shop, array(
				"name" => $row['name'], "photo" => './data/store/'.$row['pic'], "tel" => $row['tel'], "time" => $row['time'], "adr" => $row['address']
			));

	
		}

		mysqli_close($conn);

		sort($shop); // 배열 정렬
		?>
	<aside> <!-- 가게 사진 및 정보-->
		<?php 
		foreach ($shop as $value) { ?>
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
		<?php  }?>
	</aside>

	<footer>
		
	</footer>
</body>
</html>