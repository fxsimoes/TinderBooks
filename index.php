<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/books.css">

	<title> Tinder for Books </title>
</head>

<body>
	<!-- NAVIGATION BAR WITH SEARCH AND LOGIN -->

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a class="home" href="">FSimoes Tinder</a></li>
				<li class="navliked"><a href="#">Liked/Disliked Books</a></li>
				<li class="navstar"><a href="#">Favorites</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
			<form class="navbar-form navbar-left">	
				<div class="form-group">
					<input type="text" name='search' class="form-control" placeholder="Search">
				</div>
				<button class="btn btn-default" type="submit">
					<i class="glyphicon glyphicon-search"></i>
				</form>

			</div>
		</nav>


		<h1>Tinder for Books</h1>

		<div class="container">

			<br><br><br>	
			<div id="startPage" class='row'>
				<img src="https://media.giphy.com/media/46kl1Zvl499OE/giphy.gif" style='width: 750px; height: 550px;' id='clickimg' class='center-block'>
<!-- 	<button class='buttonStart center-block'><span> START </span></button> -->
			</div>
			<div id="endPage">
				<br>
			</div>

			<div id="bookContainer" class="bookDiv row"> 
f
			</div>	
			<div class='btn-group buttons col-xs-4 col-xs-offset-4 clearfix'>
				<button class="btn btn-primary like pull-left"> Like <span class="glyphicon glyphicon-thumbs-up"></span> </button> 
				<button class="btn btn-primary dislike pull-right"> Dislike <span class="glyphicon glyphicon-thumbs-down"></span> </button>
				<button class="star center-block classFix btn btn-custom" href="#"><span class="classFix likestar glyphicon glyphicon-star"></span></button>
				<br>
				<br>
				<br>
				<button id="restartButton" class="center-block">Finish your discovery</button>	
			</div>

		</div>

		<div id="Favs" class="container">
			<div class='row'>
				<div class="favorites col-xs-8 col-xs-offset-2">
					<div class="favspage center-block">
						<h1>Favorites</h1>
					</div>
				</div>
			</div>
		</div>
		<div id="LikeTable" class="container">
			<div class='row'>
				<div class="col-xs-8 col-xs-offset-2">
					<div class="likedbooks center-block">
						<h1>Likes / Dislikes</h1>
						<table border='1' id="myTable" class="table table-striped">
							<thead>
								<tr class='info'>
									<th>Book Title</th>
									<th>Author</th>
									<th>Like / Dislike</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						<button id="clearTable" class="btn btn-primary pull-right">  Clear Likes/Dislikes  <span class="glyphicon glyphicon-trash"></span> </button>
						<button id='Rewind' class='btn btn-primary pull-left'>Resume search</button>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="js.js"></script>
	</body>

	</html>
