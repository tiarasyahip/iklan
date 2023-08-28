<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iklan | Struk</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
</head>

<body>
    <!-- <div class="wrapper">
        <section class="invoice">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <i class="fas fa-globe"></i> Iklan
                        <small class="float-right">Date: 2/10/2014</small>
                    </h2>
                </div>
            </div> -->
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-9 invoice-col items-center justufy-center">
                    <center>
                    <h2>DINAS KOMUNIKASI DAN INFORMATIKA</h2><br>
                    <h1><b><u>KOTA SALATIGA</u></b></h1><br>
                    Jl. Letjend Sukowati No. 51 Salatiga, Jawa Tengah 50724<br>
                    Telp. :(0298) 326767, Fax : (0298) 321398<br>
                    Email : diskominfo@salatiga.go.id<br>
                    Website : https://diskominfo.salatiga.go.id/
                    </center>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                    <h2><b>BULAN</b></h2><br>
                    <b>........ </b>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="card-body table-responsive p-0">
                <table id="table_pelanggan" class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nominal</th>
                            <th>Keterangan</th>
                            <th>Waktu</th>
                            <th>Pilihan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_pelanggan as $d) : ?>
                        <tr>
                            <td><?= $d['id'] ?></td>
                            <td><?= $d['nama']; ?></td>
                            <td>Rp. <?= number_format($d['nominal'], 0, ',', '.'); ?></td>
                            <td><?= $d['keterangan']; ?></td>
                            <td><?= $d['time']; ?></td>
                            <td><?= $d['pilihan']; ?></td>                    
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-9">
                </div>
                <!-- /.col -->
                <div class="col-3">
                    <p>Salatiga, 2/22/2014</p>
                    <br>
                    <br>
                    (................................)
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>