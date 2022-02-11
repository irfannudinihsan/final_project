<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>UPDATE - Dokumentasi Tugas Akhir</title>
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
        <h2>Dokumentasi Tugas Akhir <?php echo $tugas_akhir->nama ?></h2>
        <hr>
            <center>
                <form  action=" <?php echo base_url('dashboard/fungsiEdit') ?> " method="post" enctype="multipart/form-data">                            <section class="base">
                <input type="hidden" name="id" value="<?= $tugas_akhir->id ?>">
                <div class="panel panel-default">
                <div class="panel-heading" align="left">Tugas Akhir Mahasiswa</div>
                <div class="panel-body">
                    <h5 align="left">Judul</h5>
                    <input class="form-control" type="text" name="judul"  alt="judul" required="required" value="<?php echo $tugas_akhir->judul?>">
                    <h5 align="left">Waktu Selesai</h5>            
                    <input class="form-control" type="date" name="waktu_selesai" alt="waktu_selesai" value="<?php echo $tugas_akhir->waktu_selesai ?>"/>
                    <h5 align="left">Status Mahasiswa</h5>
                    <td><select class="form-control" name="status" alt="status">
                        <option value=" <?= $tugas_akhir->status ?>"><?= $tugas_akhir->status ?></option>
                        <option value="Sudah Magang">Sudah Magang</option>
                        <option value="Belum Magang">Belum Magang</option>
                    </select></td>
                    <h5 align="left">Dokumen Tugas Akhir</h5>
                    <input class="form-control" type="file" name="dokumen" accept="application/pdf"><br>
                    <a href="<?php echo base_url(); ?>" class="btn btn-danger btn-xl">Cancel</a>
                    <input class="btn btn-primary btn-xl" type="submit" name="edit" value="Update Dokumentasi" alt="input"></div>
                    </form>
                    </center>
                    </div>
                </div>
            </div>
        </header>

    </body>
    </html>
