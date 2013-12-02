<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Bootstrap -->
	<link href="../lib/css/bootstrap.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
		
	<link href="../assets/css/main.css" rel="stylesheet">
	
</head>
<body>
	<!-- Navigation Bar -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">后台管理</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#/login">登录</a></li>
					<li><a href="#/main">主页</a></li>
					<li><a href="#">其他</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Content -->
	<div class="container viewcenter">
	</div>
	
	<!-- Footer -->
	<div id="footer" class="navbar-fixed-bottom">
		<div class="container">
			<p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
		</div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../lib/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../lib/js/bootstrap.js"></script>
	<script src="../lib/js/jquery.ba-hashchange.js"></script>

	<!-- Application -->
	<script src="lib/js/dispatch.js"></script>
</body>
</html>
