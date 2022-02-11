
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Dokumentasi Tugas Akhir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1000px}
        
        /* Set gray background color and 100% height */
        .sidenav {
        background-color: #f1f1f1;
        height: 100%;
        }
        
        /* Set black background color, white text and some padding */
        footer {
        background-color: #555;
        color: white;
        padding: 15px;
        }
        
        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height: auto;} 
        }
    </style>
    </head>
    <body>

    <div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
        <h4>SIDUL</h4>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="<?php echo base_url(); ?>">Tugas Akhir</a></li>
        </ul><br>
        </div>

        <div class="col-sm-6">
        <h2>Tugas Akhir</h2>
        <hr>
        <center><h3 class="text-white">Dokumentasi Tugas Akhir</h3></center>
        <h5>Pencarian</h5>
        <form action="<?= base_url('index.php/SearchController/index/') ?>" method="get">
			    <div class="input-group">
          <input type="text" class="form-control" name="keyword" placeholder="Masukan Nama Mahasiswa">
	                <span class="input-group-btn">
	                    <button class="btn btn-primary btn-xl" type="submit">Cari</button>
                    </span>
	            </div>
        	</form>
          <br> <br>
            </form>
                    <br/>
                    <table border="1" class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Konsentrasi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count = 0 ;
                  foreach($data as $row) {
                        $count = $count + 1;

               
                    ?>
                    <tr>
                        <td> <?php echo $count ?> </td>
                        <td><?php echo $row['nama']  ?></td>
                        <td><?php echo $row['nim']  ?></td>
                        <td><?php echo $row['konsentrasi']  ?></td>
                        <td><a class="btn btn-success btn-xl" href="<?php echo base_url(); ?>dashboard/detail/<?php echo $row['id']; ?>">Detail</a>
                    </tr>
                    <?php
                       }
                      ?>
                      </tbody>
                    </table>
                    <a href="<?php echo base_url('/dashboard/tugas_akhir') ?>" class="btn btn-success btn-xl">Input Dokumentasi Tugas Akhir</a>
                    <a href="<?php echo base_url() ?>" class="btn btn-primary btn-xl">Lihat Semua</a>
                    </div>
                </div>
        <hr>
    </div>
    </div>

    </body>
    </html>