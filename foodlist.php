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
			width: 300px;
			margin: 10px auto;
			padding: 10px;
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
			text-decoration: none; /* 링크 밑줄 제거*/
			color: inherit; /* 링크 색상 제거*/
		}
		ul{

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
		<a href="shoplist.php">가게 리스트</a>
	</nav>

	<!-- 메인페이지에 DB 배열로 받아오는 부분 그대로 넣으시면 돼요-->
	<?php
	$menu = array(
			array(
			"category" => 'cat', "shopname" => '고양이'),
			array(
			"category" => 'cat', "shopname" => 'cat'),
			array(
			"category" => 'cat', "shopname" => '고양이?'),
			array(
			"category" => 'rabit', "shopname" => '토끼'),
			array(
			"category" => 'rabit', "shopname" => 'rabit'),
			array(
			"category" => 'dog', "shopname" => '개'),
			array(
			"category" => 'dog', "shopname" => 'dog'),
			array(
			"category" => 'a', "shopname" => '에이'),
			array(
			"category" => 'b', "shopname" => '비'),
			array(
			"category" => 'c', "shopname" => '씨'),
			array(
			"category" => 'd', "shopname" => '디'),
			array(
			"category" => 'e', "shopname" => '이'),
			array(
			"category" => 'f', "shopname" => '에프'),
			array(
			"category" => 'g', "shopname" => '쥐'),
			array(
			"category" => 'h', "shopname" => '에이치'),
			array(
			"category" => 'i', "shopname" => '아이'),
			array(
			"category" => 'j', "shopname" => '제이'),
			array(
			"category" => 'k', "shopname" => '케이'),
			array(
			"category" => 'l', "shopname" => '엘'),
			array(
			"category" => 'm', "shopname" => '엠'),
			array(
			"category" => 'n', "shopname" => '엔'),
			array(
			"category" => 'o', "shopname" => '오'),
			array(
			"category" => 'p', "shopname" => '피'),
			array(
			"category" => 'q', "shopname" => '큐'),
			array(
			"category" => 'r', "shopname" => '알'),
		);

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
	</aside>

	<footer>
		
	</footer>
</body>
</html>