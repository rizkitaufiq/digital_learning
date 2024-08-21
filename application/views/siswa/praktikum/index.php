<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Siswa | Soal </title>

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
            background-color: #FDD8D8;
            ;
        }

        .color-2 {
            background-color: #DDD9BC;
            ;
        }

        .color-3 {
            background-color: #FFE1B4;
            ;
        }

        .color-4 {
            background-color: #E5E5E3;
        }

        .color-5 {
            background-color: #E99090;
        }

        .color-6 {
            background-color: #D7E4C7;
        }

        .color-7 {
            background-color: #A5D2EB;
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
    <div class="p-md-2">
        <?php

        $colors = ['color-1', 'color-2', 'color-3', 'color-4', 'color-5', 'color-6', 'color-7', 'color-8', 'color-9', 'color-10'];
        $color_index = 0;

        ?>
        <div class="text-dark">
            <div class="container mt-4 bg-yellow" style="border-radius:25px;border:1px solid black;">
                <div class="row mt-4">
                    <div class="col-4 text-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>

                    <div class="col-4 text-center">
                        <h1>Praktikum</h1>
                    </div>

                </div>
                <div class="mx-auto" style="border-top: 1px solid black;width:96%;"></div>

                <div class="p-4 m-4" style="height: auto;">

                    <?php foreach ($data as $item) { ?>
                        <div class="row d-flex">

                            <div class="row d-flex mb-2">
                                <div class="d-flex justify-content-start" style="width: 40%;">
                                    <p class="m-0" style="text-align: left;">Praktikum <?php echo $item->praktikum ?></p>
                                </div>

                                <div class="d-flex justify-content-center" style="width: 30%;">
                                    <p class="m-0" style="text-align: left;">Unggah File</p>
                                </div>

                                <div class="d-flex justify-content-center" style="width: 30%;">
                                    <p class="m-0" style="text-align: left;">Status</p>
                                </div>
                            </div>

                            <div class="box-content bg-pink mb-4" style="border: 1px solid #FADEDE ;border-radius: 25px;">
                                <div class="row d-flex">
                                    <div class="d-flex justify-content-start" style="width: 40%;">
                                        <div class="mt-3">
                                            <p class="m-0" style="text-align: left;"><?php echo $item->soal ?></p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-start" style="width: 30%;">
                                        <div class="mt-3">
                                            <form action="<?php echo site_url('Siswa/Praktikum/Add/Process') ?>" method="post" enctype="multipart/form-data">
                                                <div class="d-flex flex-column justify-content-start">
                                                    <input type="hidden" name="id_praktikum" value="<?php echo $item->id_praktikum ?>">
                                                    <input name="file_praktikum" type="file" accept="application/pdf">
                                                    <button class="btn btn-secondary w-25 mt-2 p-1" type="submit">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center" style="width: 30%;">
                                        <div class="mt-3">
                                            <p class="m-0">Completed</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    <?php } ?>

                </div>


            </div>
        </div>
</body>

</html>