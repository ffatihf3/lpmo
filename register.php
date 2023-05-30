<!DOCTYPE html>
<html>
  
  <head>
    <link rel="icon" href="ikon.png">
    <title>Daftar Akun Baru | LPMO</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <img class="wave" src="img/wave2.png" />

    <div class="container">
      <div class="img"></div>
      <div class="login-content">

        <form class="user" method="post" action="simpan_masyarakat.php">
          <h2 class="title">SILAHKAN DAFTAR!</h2>

          <div class="input-div pass">
            <div class="i">
              <i class="far fa-id-card"></i>
            </div>
            <div class=>
              <input type="text" name="nik" class="form-control form-control-user" placeholder="Masukkan NIK" />
            </div>
          </div>

          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class=>      
              <input type="text" name="nama" class="form-control form-control-user" placeholder="Masukkan Nama" />
            </div>
          </div>
          
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class=>
              <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username" />
            </div>
          </div>

          <div class="input-div one">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class=>      
              <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan Password" />
            </div>
          </div>
    
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class=>      
              <input type="text" name="telp" class="form-control form-control-user" placeholder="Masukkan No Telepon" />
            </div>
          </div>
    
          <input type="submit" class="btn" value="Daftar Sekarang!" />
          
          <div class="text-center">
          Sudah Punya Akun?
          <div class="i">
           <a href="index.php" > <p>  Silahkan Login  </p> </a> 
          </div>
          </div>
          
        </form>

      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
