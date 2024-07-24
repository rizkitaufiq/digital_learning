<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Admin | Beranda</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/blog/">

    <!-- css admin -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/admin.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="p-md-4">
        <div class="p-md-3 text-dark text-center container-header">

            <div class="row">
                <div class="col-md-12 text-container">
                    <img class="bottom-left-image image-custom" src="<?= base_url('assets/image/admin/world.png') ?>">
                </div>
            </div>

            <div class="flex-container mb-4 flex-wrap">
                <p class="display-6">Selamat Datang di Digital Learning</p>
                <p class="display-6">Mata Pelajaran Teknologi, Informasi,</p>
                <p class="display-6">dan Komunikasi (TIK)</p>
            </div>
        </div>

        <div class="mt-2">
            <div class="row col-md-14">
                <div class="btn-group group-custom">
                    
                    <a href="" class="active btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Beranda</a>

                    <a href="" class="btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Siswa</a>

                    <a href="" class="btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Nilai</a>

                    <a href="" class="btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Materi</a>

                    <a href="" class="btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Materi Video</a>

                    <a href="" class="btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Progress Belajar</a>

                    <a href="" class="btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Praktikum Siswa</a>
                    
                </div>
            </div>
        </div>

        <div class="box-area mt-2 ">
        
        </div>
        <div class="col-md-2">
            <a href="<?= site_url('login/logout')?>" class="btn btn-secondary mt-4 btn-custom" style="border-radius: 10px; height:7vh">Logout</a>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="<?= base_url('assets/') ?>js/bootstrap/bootstrap.min.js"></script>
</body>

</html>