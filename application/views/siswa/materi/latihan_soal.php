<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Siswa | Latihan Soal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/blog/">

    <!-- css admin -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/siswa.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>font-awesome/css/all.min.css">
    <style>
        .color-1 {
            background-color: #FFF1F1;
        }

        .color-2 {
            background-color: #FBF6CF;
        }

        .color-3 {
            background-color: #E5E5E3;
        }

        .color-4 {
            background-color: #A5D2EB;
        }

        .color-5 {
            background-color: #E99090;
        }

        .color-6 {
            background-color: #D7E4C7;
        }

        .color-7 {
            background-color: #FFE1B4;
        }

        .color-8 {
            background-color: #E7B5FF;
        }

        .color-9 {
            background-color: #B0FFE3;
        }

        .color-10 {
            background-color: #B7C3E1;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-dark">
            <div class="mt-2">
                <div class="row">
                    <div class="d-flex justify-content-start align-items-start">
                        <div class="mt-4" style="margin-left: 1rem;">
                            <a href="<?= site_url('Siswa/Materi/Page') ?>" style="text-decoration:none;color: black;">Materi</a>
                        </div>

                        <div class="mt-4" style="margin-left: 1rem;">
                            <a href="" style="text-decoration:none; border-bottom:2px solid black; background-color: transparent;color: black;">Latihan Soal</a>
                        </div>
                    </div>
                    <div class="mx-auto" style="border-top: 1px solid black;width:96%;"></div>

                    <?php
                    $data_materi = [];

                    $colors = ['color-1', 'color-2', 'color-3', 'color-4', 'color-5', 'color-6', 'color-7', 'color-8', 'color-9', 'color-10'];
                    $color_index = 0;

                    ?>
                    <div class="row">
                        <?php foreach ($data as $item) { ?>
                            <div class="col-4 mt-4">
                                <div class="m-2">
                                    <a href="<?php echo base_url('Siswa/Materi/LatihanSoal/Soal/') . $item->id_bab ?>" class="btn <?php echo $colors[$color_index++]; ?> d-flex justify-content-center align-items-center text-center w-100" style="height:10vh;border-radius:10px;"><?php echo $item->bab ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?> js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>