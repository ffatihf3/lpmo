<!DOCTYPE html>
<html>
  
  <head>
    <link rel="icon" href="ikon.png">
    <title>Login | LPMO</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <img class="wave1" src="img/wave1.png" />

    <div class="container">
      <div class="img"></div>
      <div class="login-content">

        <form class="user" method="post" action="cek_login.php">
          <img src="ikon.png" width="150" height="200"/>
         
          <h2>Selamat Datang DI</h2>
          <h3 class="title">Laporan Pengaduan Masyarakat Online</h3>

          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="form-group">      
              <input type="text" name="username" class="form-control form-control-user" placeholder="Username" />
            </div>
          </div>

          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control form-control-user" placeholder="Password" />
            </div>
          </div>

          <input type="submit" class="btn" value="Login" />
          <a href="register.php"> <input type="button" class="btn" value="Daftar Sekarang!" /> </a>

          <hr>
          <div class="i">
           <a href="index2.php" > <p> <i class="fas fa-headset"> Masuk Sebagai Admin/Patugas </i> </p> </a> 
          </div>
      
        </form>

      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>


