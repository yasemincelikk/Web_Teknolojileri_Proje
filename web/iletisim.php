<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <style>
    input {
      width: 80%;
      align-items: center;
      padding: 10px 0px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .login-in {
      background: white;
      border: 1px hsl(0, 5%, 73%) solid;
      border-radius: 10px;
      width: 70%;
    }

    .login-h1 {
      color: #212529;
    }

    button {
      margin-left: 37%;
    }
  </style>
</head>
[15:33]
<body>
  <div class="container-fluid backgroundimg">
    <div class="row">
      <div class="col-12">
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
[15:33]
</div>
    </div>
    <div class="row">
      <div class="col-12">
        <p style="text-align: center;">
        <table class="table table-hover" style="background-color: gray; margin-bottom:15%">
          <thead>
            <tr>
              <th>Ad</th>
              <th>Email</th>
              <th>Cinsiyet</th>
              <th>Konu</th>
              <th>Mesaj</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_POST["isim"]?></td>
              <td><?php echo $_POST["email"]?></td>
              <td><?php echo $_POST["cinsiyet"]?></td>
              <td><?php echo $_POST["konu"]?></td>
              <td><?php echo $_POST["mesaj"]?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>