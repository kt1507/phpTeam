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
			height: 300px;
			margin: 0 auto;
			display: flex;
			font-size: 15px;
			padding: 10px;
		}
		.shopLeft{
			float: left;
			width: 50%;
		}
		.shopImage{
			float: right;
			height: 300px;
			width: 400px;
			margin : 10px;
		}
		.shopRight{
			float: right;
			width: 40%;
			padding-left: 30px;
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
			font-size: 35px;
		}
		h3{
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
		.menu{
			width: 800px;
			height: 200px;
			margin: 0 auto;
		}
		.menuLeft{
			float: left;
			width: 40%;
		}
		.menuImage{
			float: right;
			height: 150px;
			width: 230px;
			margin : 10px 20px 0 0;
			padding-right: 10px;
		}
		.menuRight{
			float: right;
			width: 60%;
		}
		.menuInfo{
			float: left;
			width: 100%;
			text-align: left;
			padding: 30px 0 10px 0;
			margin: 10px;
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
		<a href="shoplist.php">가게 리스트</a> &nbsp;|&nbsp;
		<a href="foodList">음식 리스트</a>
	</nav>

	<?php
	$shop = array(
			array(
			"name" => 'cat', "photo" => 'cat.jpg', "ins" => 'This is Cat'
			),
			array(
			"name" => 'rabit', "photo" => 'rabit.jpg', "ins" => 'This is Rabit'
			),
			array(
			"name" => 'dog', "photo" => 'dog.jpg', "ins" => 'This is Dog'
			),
		);
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
				<p><?php echo $shop[$getValue]["ins"] ?></p>
				<hr>
				<p>042-123-4567</p>
				<hr>
				<p>대전 동구 오정동 어디어디 123-4</p>
			</div>
		</div>

	</aside>

	<aside> <!-- 가게 메뉴들-->
		<div class="menu">
			<hr>
			<div class="menuLeft">
				<img class="menuImage" src="<?php echo $shop[$getValue]["photo"] ?>" alt="아직 이미지가 없어요"/>
			</div>

			<div class="menuRight">
				<h3 class="menuInfo"><?php echo $shop[$getValue]["name"]?></h3>
				<p>5,000원</p>
			</div>
		</div>
	</aside>

	<footer>
		
	</footer>
</body>
</html>