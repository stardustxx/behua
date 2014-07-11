<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MissBehua</title>
<script type = "text/javascript" src = "js/jquery.js"></script>
<script type = "text/javascript" src = "js/masonry.pkgd.min.js"></script>
<script type = "text/javascript" src = "js/bootstrap.js"></script>
<script type = "text/javascript" src = "js/lightbox.min.js"></script>
<script type = "text/javascript" src = "js/someFunction.js"></script>
<script type = "text/javascript" src = "js/imagesloaded.pkgd.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "css/lightbox.css">
<link rel = "stylesheet" type = "text/css" href = "css/style.css">

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-static-top navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">MissWallFlower</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
		<li>
			<a href="index.php">
				<span class = "glyphicon glyphicon-home"></span> Home
			</a>
		</li>
		
		 <li>
			<a href="signup.php">
				<span class = "glyphicon glyphicon-asterisk"></span> Sign Up
			</a>
		</li>
		
		<!-- dynamic menu start -->
		
		<?php
			//initialize session
			session_start();
			
			//if a session exist, a member already logged in
			if(isset($_SESSION['member_id'])){
				printf (
					"<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
							<span class='glyphicon glyphicon-user'></span> ".$_SESSION['member_id']."
							<span class='caret'></span>
						</a>
						<ul class='dropdown-menu' role='menu'>
					");
				
				//if the member_id is an administrator
				if($_SESSION['member_id'] === "admin"){
					printf (
						"<li><a href='#'><span class='glyphicon glyphicon-cog'></span> Control Panel</a></li>");
				}
				
				printf (
					"<li>
						<a href='logout.php'>
							<span class='glyphicon glyphicon-remove'></span> Log Out
						</a>
					</li>
					</ul>
					</li>"
				);
			}
			//otherwise, display the login button
			else{
				printf ("<li><a href='login.php'><span class = 'glyphicon glyphicon-ok'></span> Log in</a></li>");
			}
		?>
		<!-- dynamic menu end -->
		
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>