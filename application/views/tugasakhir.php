<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>FORM - Dokumentasi Tugas Akhir</title>
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
        <h2>Form Dokumentasi Tugas Akhir</h2>
        <hr>
        <center>
            <div class="panel panel-default">
                <div class="panel-heading" align="left">Identitas Mahasiswa</div>
                <div class="panel-body">

                    <form action=" <?php echo base_url('dashboard/fungsiTambah') ?> " method="post">
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
            </select></td><br>
            </center>
            <input class="btn btn-primary btn-xl" type="submit" name="input" value="Input Dokumentasi" alt="input">
            <a href="<?php echo base_url(); ?>" class="btn btn-danger btn-xl">Cancel</a></div>
            </form>
        <hr>
    </div>
    </div>
    </body>
    </html>
