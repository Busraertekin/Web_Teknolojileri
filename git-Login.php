<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">

	<!--------------------------------->
	<title>Web Teknoloji Projesi</title>
	<style>
		/* Yeni CSS Kuralları */
		body {
			background-color: #EBFFE6;
			color: #000;
		}







		.jumbotron h1,
		.card-title {
			color: #000;
		}

		.table-info th {
			background-color: #E60066 !important;
		}

		.bg-info {
			background-color: #E60B6D !important;
		}

		footer {
			background-color: 60B6D;
			color: #000;
		}
	</style>

</head>

<body>


	<nav class="navbar navbar-expand-sm fixed-top 
	bg-info navbar-white">

		<div class="container">
		
			<a href="index.html" class="navbar-brand text-white">
	  		  <i class="fas fa-grin-wink"></i>
	  		   Büşra
	      	</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item">
						<a href="index.html" class="nav-link active  text-white">
	      				Anasayfa
	      				</a></li>

					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active  text-white">
	      				Özgeçmiş
	      				</a></li>

	      			<li class="nav-item">
						<a href="Gonya.html" class="nav-link active  text-white">
	      				Gonya
	      				</a></li>	

					<li class="nav-item">
						<a href="mirasimiz.html" class="nav-link active  text-white">
	      				Mirasımız
	      				</a></li>

	      			<li class="nav-item">
						<a href="iletisim.html" class="nav-link active  text-white">
	      				İletişim
	      				</a></li>

	      			<li class="nav-item">
						<a href="login.php" class="nav-link active  text-white">
	      				<i class="fas fa-sign-in-alt"></i>
	      				</a></li>					
				</ul>
			</div>

		</div>
	</nav>

	<header>

		<div class="bg-info text-light jumbotron -jumbotron">

			<div class="container">

				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
				</div>

			</div>

		</div>

	</header>
	
	<main>

		<div class="container">
			
			<?php 

				include("kullanicilar.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>

	</main>


	<footer class="py-5 bg-info text-white text-center">
		Web-Teknolojileri-Projesi © 
	</footer>

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	

</body>

</html>