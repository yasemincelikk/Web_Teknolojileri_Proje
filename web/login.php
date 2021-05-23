<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white  static-top" style="background-color:#4674a1;">
	<div class="container">
	  <a class="navbar-brand" href="index.html">
			
		  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
	  <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="index.html">HOŞGELDİNİZ
				  <span class="sr-only"></span>
				</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="ozgecmis.html">ÖZGEÇMİŞ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="sehrim.html">ŞEHRİM</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="mirasımız.html">MİRASIMIZ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="ilgialanlarım.html">İLGİ ALANLARIM</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="iletisim.html">İLETİŞİM</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="login.html">LOGİN(GİRİŞ)</a>
		  </li>
		</ul>
	  </div>
	</div>
  </nav>

  <div class="container py-5">
    <div class="row">
      <div class="col loginMesaj">
    <?php if($_POST["mail"]=="yaseminc852@gmail.com" && $_POST["sifre"]=="b201210068")
			{
        echo"Hoşgeldiniz ".$_POST["mail"];
        echo"<br> onaylandı.";
      }
      else{
        echo " E-posta veya şifre hatalı.";
        header("refresh:3; login.html");
      }    
        ?>
        </div>
      </div>
    </div>

	

</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>

