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
            <li class="nav-item active">
              <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="form-inline my-2 my-lg-0">
              <a class="navbar-item" href="https://www.linkedin.com/in/ali-nazif-koca-4a39511a5/"><img src="img/linkedin.png" width="30" height="30" alt="LinkedIn"></a>
              <a class="nav-link" href="login.html">Kullanıcı Girişi</a>
            </li>
          </ul>
        </div>
      </nav>
      <header class="standart_background">
        <main class="text-center container d-flex h-100 align-items-center">
          <div class="mx-auto col-5 mx-auto">
            <h1>
                <table class="text-center table table-dark">
                        <tr>
                        <th>İsim: </th>
                        <td><?php echo $_POST["isim"]; ?></td>
                        </tr>
                        <tr>
                        <th>Soyisim: </th>
                        <td><?php echo $_POST["soyisim"]; ?></td>
                        </tr>
                        <tr>
                        <th>E-Mail: </th>
                        <td><?php echo $_POST["email"]; ?></td>
                        </tr>
                        <tr>
                        <th>Cinsiyet: </th>
                        <td>
                            <?php 
                            if (isset($_POST["cinsiyet"]))
                            {
                                echo $_POST["cinsiyet"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                            ?>
                         </td>
                        </tr>
                        <tr>
                        <th>Şehir: </th>
                        <td><?php echo $_POST["sehir"]; ?></td>
                        </tr>
                        <tr>
                        <th>Programlama Dilleri: </th>
                        <td>
                            <?php
                            if (isset($_POST["pdil1"]))
                            {
                                echo $_POST["pdil1"]."<br>";
                            }
                            if (isset($_POST["pdil2"]))
                            {
                                echo $_POST["pdil2"]."<br>";
                            }
                            if (isset($_POST["pdil3"]))
                            {
                                echo $_POST["pdil3"]."<br>";
                            }
                            if (isset($_POST["pdil4"]))
                            {
                                echo $_POST["pdil4"];
                            }
                            ?>
                        </td>
                        </tr>
                </table>
            </h1>
          </div>
        </main>
      </header>
  </body>
</html>