<html>
    <head>
        <title>HOŞGELDİNİZ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand mb-1" href="index.html">HOŞGELDİNİZ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="hakkinda.html">Hakkında</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="form-inline my-2 my-lg-0">
              <a class="navbar-item" href="https://www.linkedin.com/in/yasemin-%C3%A7elik-67a9b41b3/"><img src="img/linkedin.png" width="30" height="30" alt="LinkedIn"></a>
              <a class="nav-link active" href="login.html">Kullanıcı Girişi</a>
            </li>
          </ul>
        </div>
      </nav>
      <header class="login_background">
        <main class="text-center container d-flex h-100 align-items-center">
          <div class="mx-auto col-2mx-auto">
            <h1>
                <?php
                if(($_POST["email"] == "b191210057@sakarya.edu.tr") && ($_POST["password"] == "123"))
                {
                    echo "<h1 class=\"login_yazi\">Hoşgeldiniz \"b191210057\"</h1> <br><br> <a class=\"btn bg-light\" href=\"index.html\">Ana Sayfa</a>";
                }
                else
                {
                    echo "<h1 class=\"login_yazi\">Giriş bilgileriniz hatalı. Lütfen tekrar deneyiniz.</h1> <br><br> <a class=\"btn bg-light\" href=\"login.html\">Giriş</a>";
                }
                ?>
            </h1>
          </div>
        </main>
      </header>
  </body>
</html>