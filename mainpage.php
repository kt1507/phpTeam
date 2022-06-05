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
			margin-top: 10px;
			margin-bottom: 50px;
			padding: 10px;
			text-align: center;
		}
		footer{
			font-family: 'EarlyFontDiary';
			height: 50px;
			margin-top: 10ox;
			padding: 15px;
			background-color: dimgray;
			font-size: 10px;
			color: whitesmoke;
		}
		img{
			width = 500px;
			height = 400px;
		}
		a{
			text-align: center;
			text-decoration: none; /* 링크 밑줄 제거*/
			color: inherit; /* 링크 색상 제거*/
		}
		button{
			font-family: 'EarlyFontDiary';
		}
		@import url(https://fonts.googleapis.com/css?family=Oswald);
		@import url(https://fonts.googleapis.com/css?family=Quattrocento);
		.snip1361 {
		  font-family: 'EarlyFontDiary';
		  position: relative;
		  overflow: hidden;
		  margin: 10px;
		  min-width: 270px;
		  max-width: 355px;
		  width: 180px;
		  height: 220px;
		  color: #141414;
		  text-align: left;
		  line-height: 1.4em;
		  font-size: 16px;
		  display: inline-block;
		}
		.snip1361 * {
		  -webkit-box-sizing: border-box;
		  box-sizing: border-box;
		  -webkit-transition: all 0.35s ease;
		  transition: all 0.35s ease;
		}
		.snip1361 img {
		  max-width: 100%;
		  vertical-align: top;
		}
		.snip1361 figcaption {
		  position: absolute;
		  top: calc(80%);
		  width: 100%;
		  background-color: #fffffd;
		  padding: 15px 25px 65px;
		}
		.snip1361 figcaption:before {
		  position: absolute;
		  content: '';
		  z-index: 2;
		  bottom: 100%;
		  left: 0;
		  width: 100%;
		  height: 50px;
		  background-image: -webkit-linear-gradient(top, transparent 0%, #fffffd 100%);
		  background-image: linear-gradient(to bottom, transparent 0%, #fffffd 100%);
		}
		.snip1361 h3,
		.snip1361 p {
		  margin: 0 0 10px;
		}
		.snip1361 h3 {
		  font-weight: 300;
		  font-size: 1.4em;
		  line-height: 1.2em;
		  font-family: 'Oswald', Arial, sans-serif;
		  text-transform: uppercase;
		}
		.snip1361 p {
		  font-size: 0.9em;
		  letter-spacing: 1px;
		  opacity: 0.9;
		}
		.snip1361 a {
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  z-index: 2;
		}
		.snip1361:hover figcaption,
		.snip1361.hover figcaption {
		  top: 80px;
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
		<a href="shopList">가게 리스트</a> &nbsp;|&nbsp;
		<a href="foodList">음식 리스트</a>
	</nav>

	<!-- 메인 내용 들어갈 aside-->
	<aside>
		<?php
		// DB에서 데이터들 배열로 저장
			

			$shop = array();

			


			$conn = mysqli_connect("localhost","root","","web");

			$select_query = "SELECT smallCategory, pic FROM smallCategory";

			$result_set = mysqli_query($conn, $select_query);

			
			while ($row = mysqli_fetch_array($result_set)){

				array_push($shop, array(
					"name" => $row['smallCategory'], "photo" => $row['pic'], "ins" => $row['smallCategory'].'입니다.'
				));

		
			}

			mysqli_close($conn);




			shuffle($shop); //배열 무작위로 섞음, 섞은 후 배열 0 ~ 8번까지 9개 출력

			echo "<figure class='snip1361'>
					<img src='".$shop[0]["photo"]."' />
					<figcaption>
					  <h3>".$shop[0]["name"]."</h3>
					  <p>".$shop[0]["ins"]."</p>
					</figcaption>
					  <a href='shopinfo.php?name=".$shop[0]["name"]."'></a>
				</figure>";
			echo "<figure class='snip1361'>
					<img src='".$shop[1]["photo"]."' />
					<figcaption>
					  <h3>".$shop[1]["name"]."</h3>
					  <p>".$shop[1]["ins"]."</p>
					</figcaption>
					  <a href='#'></a>
				</figure>";
			echo "<figure class='snip1361'>
					<img src='".$shop[2]["photo"]."' />
					<figcaption>
					  <h3>".$shop[2]["name"]."</h3>
					  <p>".$shop[2]["ins"]."</p>
					</figcaption>
					  <a href='#'></a>
				</figure>";

			echo "<br>";

			echo "<figure class='snip1361'>
					<img src='".$shop[1]["photo"]."' />
					<figcaption>
					  <h3>".$shop[1]["name"]."</h3>
					  <p>".$shop[1]["ins"]."</p>
					</figcaption>
					  <a href='#'></a>
				</figure>";
			echo "<figure class='snip1361'>
					<img src='".$shop[2]["photo"]."' />
					<figcaption>
					  <h3>".$shop[2]["name"]."</h3>
					  <p>".$shop[2]["ins"]."</p>
					</figcaption>
					  <a href='#'></a>
				</figure>";
			echo "<figure class='snip1361'>
					<img src='".$shop[0]["photo"]."' />
					<figcaption>
					  <h3>".$shop[0]["name"]."</h3>
					  <p>".$shop[0]["ins"]."</p>
					</figcaption>
					  <a href='#'></a>
				</figure>";

			echo "<br>";

			echo "<figure class='snip1361'>
					<img src='".$shop[2]["photo"]."' />
					<figcaption>
					  <h3>".$shop[2]["name"]."</h3>
					  <p>".$shop[2]["ins"]."</p>
					</figcaption>
					  <a href='#'></a>
				</figure>";
			echo "<figure class='snip1361'>
					<img src='".$shop[0]["photo"]."' />
					<figcaption>
					  <h3>".$shop[0]["name"]."</h3>
					  <p>".$shop[0]["ins"]."</p>
					</figcaption>
					  <a href='#'></a>
				</figure>";
			echo "<figure class='snip1361'>
					<img src='".$shop[1]["photo"]."' />
					<figcaption>
					  <h3>".$shop[1]["name"]."</h3>
					  <p>".$shop[1]["ins"]."</p>
					</figcaption>
					  <a href='#'></a>
				</figure>";
			echo "<br>";
		?>
		<br>
		<button type="button">음식 추천!</button>
		<button type="button" onClick="window.location.reload()">새로고침</button>

	</aside>

	<!-- 최하단 footer-->
	<footer>
		footer
	</footer>
</body>
</html>