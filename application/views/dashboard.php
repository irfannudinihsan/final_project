
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

        <div class="col-sm-8">
        <h2>Tugas Akhir</h2>
        <hr>
        <center><h3 class="text-white">Dokumentasi Tugas Akhir</h3></center>
        <h5>Pencarian</h5>
            <form action="<?= base_url('Dashboard') ?>" method="post">
			    <div class="input-group col-sm-6">
	                <input type="text" class="form-control" name="keyword" placeholder="Masukan Keyword" autocomplete="off" autofocus>
	                <div class="input-group-btn">
	                    <input class="btn btn-primary btn-xl" type="submit" name="submit" value="Cari">
                    </div>
	            </div>
        	</form>
          <br>
                    <br/>
                    <table border="1" class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Dosen Pembimbing</th>
                        <th>Konsentrasi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($tugasakhir)) : ?>
                            <tr>
                                <td colspan="6">
                                    <div class="alert alert-danger" role="alert">
                                    Data Tidak Ditemukan!
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php
                    $count = 0 ;
                    foreach($tugasakhir as $row) {
                        $count = $count + 1;

               
                    ?>
                    <tr>
                        <td> <?php echo ++$start ?> </td>
                        <td><?php echo $row['nama']  ?></td>
                        <td><?php echo $row['nim']  ?></td>
                        <td><?php echo $row['pembimbing']  ?></td>
                        <td><?php echo $row['konsentrasi']  ?></td>
                        <td><a class="btn btn-success btn-xl" href="<?php echo base_url(); ?>dashboard/detail/<?php echo $row['id']; ?>">Detail</a>
                        <a class="btn btn-danger btn-xl" href="<?php echo base_url(); ?>dashboard/fungsiDelete/<?php echo $row['id']; ?>">Hapus</a>
                    </tr>
                    <?php
                       }
                      ?>
                      </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                    <a class="btn btn-success btn-xl" data-toggle="modal" data-target="#exampleModal">Input Dokumentasi Tugas Akhir</a>
                    <a href="<?php echo base_url() ?>" class="btn btn-primary btn-xl">Lihat Semua</a>
                    </div>
                </div>
        <hr>
    </div>
    </div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="modal-title" id="exampleModalLabel">Form Dokumentasi Tugas Akhir</h2>
      </div>
      <div class="modal-body">
      <div class="panel panel-default">
                <div class="panel-heading" align="left">Identitas Mahasiswa</div>
                <div class="panel-body">
      <form action=" <?php echo base_url('dashboard/fungsiTambah') ?> " method="post" enctype="multipart/form-data" >
                    <h5 align="left">Nama Lengkap</h5>
                    <input class="form-control" type="text" name="nama" placeholder="Masukan Nama" alt="nama" required="required"/>
                    <h5 align="left">NIM</h5>
                    <input class="form-control" type="text" name="nim" placeholder="Masukan NIM - Exp : 20.01.XXXX" alt="nim" required="required"/>
                    <h5 align="left">Tahun Angkatan</h5>
                    <td><select class="form-control" name="tahun" alt="tahun">
                        <option value="#">Pilih - Tahun Angkatan</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select></td>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" align="left">Tugas Akhir Mahasiswa</div>
                    <div class="panel-body">
                        <h5 align="left">Judul</h5>
                        <input class="form-control" type="text" name="judul" placeholder="Masukan Judul" alt="judul" required="required"/>
                        <h5 align="left">Konsentrasi</h5>
                        <td><select class="form-control" name="konsentrasi" alt="konsentrasi">
                        <option value="#">Pilih - Konsentrasi</option>
                        <option value="Pemograman Web">Pemograman Web</option>
                        <option value="Animasi">Animasi</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                </select></td>
            <h5 align="left">Dosen Pembimbing</h5>
            <td><select class="form-control" name="pembimbing" alt="pembimbing">
                <option value="#">Pilih - Dosen Pembimbing</option>
                <option value="Ria Andriani, M.Kom">Ria Andriani, M.Kom</option>
                <option value="Firman Asharudin, S.Kom, M.Kom">Firman Asharudin, S.Kom, M.Kom</option>
                <option value="Moch Farid Fauzi, M.Kom">Moch Farid Fauzi, M.Kom</option>
                <option value="Ikmah, M.Kom">Ikmah, M.Kom</option>
                <option value="Dwi Rahayu, S.Kom., M.Kom">Dwi Rahayu, S.Kom., M.Kom</option>
                <option value="Erni Seniwati, S.Kom, M.Cs">Erni Seniwati, S.Kom, M.Cs</option>
                <option value="Toto Indriyatmoko, M.Kom">Toto Indriyatmoko, M.Kom</option>
                <option value="Ahlihi Masruro, M.Kom">Ahlihi Masruro, M.Kom</option>
            </select></td>
            <h5 align="left">Waktu Mulai</h5>
            <input class="form-control" type="date" name="waktu_mulai" placeholder="Waktu Mulai" alt="waktu_mulai" required="required"/>
            <h5 align="left">Waktu Selesai</h5>            
            <input class="form-control" type="date" name="waktu_selesai" placeholder="Waktu Selesai" alt="waktu_selesai"/>
            <h5 align="left">Status Mahasiswa</h5>
            <td><select class="form-control" name="status" alt="status">
                <option value="#">Pilih</option>
                <option value="Sudah Magang">Sudah Magang</option>
                <option value="Belum Magang">Belum Magang</option>
            </select></td>
            <h5 align="left">Dokumen Tugas Akhir</h5>
            <input class="form-control" type="file" name="dokumen" accept="application/pdf" >
            <br>
            </center>
            <input class="btn btn-primary btn-xl" type="submit" name="input" value="Input Dokumentasi" alt="input">
            <a class="btn btn-danger btn-xl" data-dismiss="modal" type="button">Cancel</a></div>
            </form>
      </div>
    </div>
  </div>
</div>