
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
        <h2>Dokumentasi Tugas Akhir <?php echo $row['nama']; ?></h2>
        <hr>
            <table border="0" cellpadding="6">
            <tr>
                <td size="90">Nama</td>
                <td>: <?php echo $row['nama']?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>: <?php echo $row['nim']?></td>
            </tr>
            <tr>
                <td>Tahun Angkatan</td>
                <td>: <?php echo $row['tahun']?></td>
            </tr>
            <tr>
                <td>Judul Tugas Akhir</td>
                <td>: <?php echo $row['judul']?></td>
            </tr>
            <tr>
                <td>Konsentrasi</td>
                <td>: <?php echo $row['konsentrasi']?></td>
            </tr>
            <tr>
                <td>Dosen Pembimbing</td>
                <td>: <?php echo $row['pembimbing']?></td>
            </tr>
            <tr>
                <td>Waktu Mulai</td>
                <td>: <?php echo date('d F Y', strtotime($row['waktu_mulai']))?></td>
            </tr>
            <tr>
                <td>Waktu Selesai</td>
                <td>: <?php echo date('d F Y', strtotime($row['waktu_selesai'])) ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <?php echo $row['status']?></td>
            </tr>
            <tr>
                <td>Dokumentasi File</td>
                <td>: <a href="<?= base_url('uploads/'.$row['dokumen'])?>"> <?php echo $row['dokumen']?></a></td>
                <?php if (empty($row['dokumen'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        File Dokumentasi Tidak Di Temukan!
                    </div>
                <?php endif; ?>
            </tr>
        </table>
        <br>
        <a href="<?php echo base_url(); ?>" class="btn btn-primary btn-xl">Kembali</a>
        <a href="<?php echo base_url('dashboard/edit_Tugasakhir'.'/'.$row['id']) ?>" class="btn btn-warning btn-xl">Edit Dokumentasi</a>
        <a href="<?php echo base_url('dashboard/fungsiDelete'.'/'.$row['id']) ?>" class="btn btn-danger btn-xl">Hapus Dokumentasi</a>
        <hr>
    </div>
    </div>


    </body>
    </html>
