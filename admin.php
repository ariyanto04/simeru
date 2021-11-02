<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <title>Welcome, Admin</title>
  </head>
<body>

	<!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-secondary text-white">
      <div class="container-fluid">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#">Universitas Nasional</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="logout.php">logout <span class="sr-only">(current)</span></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir navabr -->

	<!-- Jumbotron -->
    <div class="jumbotron text-center bg-info text-white">
      <img src="img/unas.png" weight="80" height="100">
      <h1 class="display-4">Halaman Admin SIMERU</h1>
      <p class="lead">Sistem Menejemen Ruangan, Universitas Nasional</p>     
    </div>
      <!-- Akhir Jumbotron -->


	<section class="informasi" id="informasi">
      <div class="container" style="height: 15rem; margin-top: 5rem">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Data Peminjaman Ruangan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col"></div>
          <div class="class col-sm-10 text-justify">
          	<br>
            <p>Berikut tampilan data peminjaman yang telah disubmit dalam bentuk tabel:</p>

            <!-- menampilkan data -->
            <table class="table table-bordered" style="margin-bottom: 200px">
              <thead class="thead-light">
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
                  <th scope="col">Edit</th>
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

                      	<td>
            							<form action="act_edit.php" method="POST">
                            <fieldset class="form-group">
                              <div class="form-check">
                                <input type="hidden" name="no" value="<?php echo $d['no']; ?>">
                                <input class="form-check-input" type="radio" name="ket" id="gridRadios1" value="Diterima">
                                <label class="form-check-label" for="gridRadios1">Diterima</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="ket" id="gridRadios2" value="Ditolak">               
                                <label class="form-check-label" for="gridRadios2">Ditolak</label>
                              </div>

                              <div class="form-group">
                                <button type="submit" class="btn btn-primary" >Submit</button>
                              </div>
                           </fieldset>     
                          </form>
						            </td>
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
</body>
</html>