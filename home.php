<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

    <title>Welcome, SIMERU</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-secondary text-white">
      <div class="container-fluid">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="home.php">Universitas Nasional</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: auto;">
          <div class="navbar-nav">
            <a class="nav-link active" href="#about">About <span class="sr-only">(current)</span></a>
            <a class="nav-link active" href="#login">Login Admin <span class="sr-only">(current)</span></a>
            <a class="nav-link active" href="#informasi">Informasi Peminjaman <span class="sr-only">(current)</span></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir navabr -->
    
    <!-- Jumbotron -->
    <div class="jumbotron text-center bg-info text-white">
      <img src="img/unas.png" weight="80" height="100">
      <h1 class="display-4">Selamat Datang di SIMERU!</h1>
      <p class="lead">Sistem Menejemen Ruangan, Universitas Nasional</p>     
    </div>
      <!-- Akhir Jumbotron -->

      <!-- about -->
    <section class="about" id="about" style="margin-bottom: 150px">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2>
          </div>
        </div>
        <div class="row">
          <div class="col"></div>
          <div class="class col-sm-8 text-justify">
            <p>SIMERU (Sistem Manajemen Ruangan) merupakan suatu sistem yang digunakan untuk melakukan peminjaman ruangan secara online dengan memberikan data sesuai dengan prosedur yang ada. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et facere praesentium vel, officia? Laboriosam, aliquid? Ipsa corrupti necessitatibus reprehenderit tenetur molestiae numquam dignissimos provident? Et, quas quod excepturi a vitae?</p>
            <p> </p>
            <p>Jika ingin meminjam ruangan klik <a href="form.html" class="badge badge-primary">Booking</a></p>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </section>
    <!-- akhir About -->


      <!-- Login admin -->
    <section class="class login" id="login" style="margin-bottom: 200px">
      <div class="container">
        <h2 class="text-center">Login Admin</h2>
        <div class="row" style="height: 15rem">
         <div class="col"></div>
          <div class="col-sm-5 bg-info text-white">
            <form method="POST" action="login.php" name="login">
              <div class="form-group" style="padding-top: 2rem">
                <label for="no">Nomor Induk</label>
                <input type="int" name="no" class="form-control" id="no" placeholder="Masukkan Nomor Induk Anda...">
              </div>
              <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" name="password" id="password1" placeholder="Masukkan Password Anda...">
              </div>
              <div class="form-group" style="padding-bottom: 2rem">
                <button type="submit" class="btn btn-primary" >Login</button>
              </div>
            </form>
          </div>
          <DIV class="col"></DIV>
        </div>
      </div>
    </section>
    <!-- akhir login -->


    <!-- Informasi -->
    <section class="informasi" id="informasi" style="margin-bottom: 200px">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Informasi Peminjaman Ruangan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col"></div>
          <div class="class col-sm-10 text-justify">
            <p>Berikut tampilan data peminjaman yang telah disubmit dalam bentuk data:</p>

            <!-- menampilkan data -->
            <table class="table table-bordered ">
              <thead class="thead-light ">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nomor Induk</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Status</th>
                  <th scope="col">Ruangan</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Lampiran</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Keterangan</th>
                </tr>

                <?php 
                  include 'config.php';
                  $no = 1;
                  $data = mysqli_query($con,"select * from peminjaman");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['no']; ?></td>
                      <td><?php echo $d['nama']; ?></td>
                      <td><?php echo $d['status']; ?></td>
                      <td><?php echo $d['ruangan']; ?></td>
                      <td><?php echo $d["tanggal"]; ?></td>
                      <td><?php echo $d["lampiran"]; ?></td>
                      <td><?php echo $d["deskripsi"]; ?></td>
                      <td><?php echo $d["ket"]; ?></td>
                    </tr>
                    <?php 
                  }
                  ?>
              </thead>
            </table>
            <!-- akhir menampilkan data -->

          </div>
          <div class="col"></div>
        </div>
      </div>
    </section>
    <!-- akhir informasi -->


    <!-- footer -->
    <footer class="footer bg-secondary text-white fixed-bottom">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <p>&copy;copyright 2020 | By. Lagi_Rajin_Belajar</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir footer -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>