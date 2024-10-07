<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Siswa | Materi</title>

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
            background-color: #E2D346;
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

<body class="bg-yellow">
    <div class="container">
        <div class="text-dark">

            <div class="d-flex column mt-2">
                <div class="m-1">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="m-1">
                    <p>Materi Teks</p>
                </div>
            </div>

            <div class="row">
                <div class="d-flex justify-content-start align-items-start">
                    <div class="mt-1" style="margin-left: 1rem;">
                        <a style="border-bottom:2px solid black; background-color: transparent;">Materi</a>
                    </div>

                    <div class="mt-1" style="margin-left: 1rem;">
                        <a href="<?= site_url('Siswa/Materi/LatihanSoal') ?>" style="text-decoration:none;color: black;">Latihan Soal</a>
                    </div>
                </div>
                <div class="mx-auto" style="border-top: 1px solid black;width:96%;"></div>

                <?php
                $data_materi = [];

                foreach ($data as $item) {
                    $data_materi[$item->bab][] = [
                        'judul' => $item->judul,
                        'id_materi' => $item->id_materi,
                    ];
                }

                $colors = ['color-1', 'color-2', 'color-3', 'color-4', 'color-5', 'color-6', 'color-7', 'color-8', 'color-9', 'color-10'];
                $color_index = 0;

                $images = ['word.png', 'pc.png', 'laptop.png', 'mouse.png', 'paper.png', 'keyboard.png', 'list.png', 'abc.png', 'globe.png', 'gmail.png',];
                $image_index = 0;

                ?>
                <div class="row">
                    <?php foreach ($data_materi as $bab => $materis) { ?>
                        <div class="col-sm-6 col-md-2 m-3">
                            <div class="d-flex justify-content-center align-items-center" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                                <a class="box-bab <?php echo $colors[$color_index++]; ?> d-flex" style="border-radius: 10px; width:120px;height:130px;">
                                    <div class="d-flex row">
                                        <div class="d-flex justify-content-end">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        <div class="d-flex justify-content-center text-center">
                                            <div class="row">
                                                <div class="d-flex justify-content-center align-items-center" style="height: 50px;">
                                                    <img src="<?php echo base_url('assets/image/siswa/') . $images[$image_index++] ?>" alt="image" style="width: 65px">
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <p class="mb-4 mt-3"><?php echo $bab ?></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top:1px;width: 30%;">
                                <?php foreach ($materis as $materi) { ?>
                                    <a href="<?php echo base_url('Siswa/Materi/Detail/') . $materi['id_materi'] ?>" class="dropdown-item"><?php echo $materi['judul'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="form-group d-flex justify-content-end align-item-center mt-5" style="height: 20vh;">
                        <a href="<?= site_url('Siswa/Beranda/Page') ?>" class="btn btn-secondary mt-4 btn-custom" style="border-radius: 10px; height:7vh">Kembali</a>
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