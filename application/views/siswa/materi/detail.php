<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Siswa | Detail Materi </title>

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
    <div class="p-md-2">
        <?php

        $colors = ['color-1', 'color-2', 'color-3', 'color-4', 'color-5', 'color-6', 'color-7', 'color-8', 'color-9', 'color-10'];
        $color_index = 0;

        ?>
        <div class="text-dark">

            <?php foreach ($data as $item) { ?>
                <div class="container mt-4 <?php echo $colors[$color_index++]; ?>" style="border-radius:25px;border:1px solid black;height: max-content;">
                    <div class="row mt-4">
                        <div class="col-4 text-left">
                            <i class="fas fa-chevron-left"></i>
                        </div>

                        <div class="col-4 text-center">
                            <p><?php echo $item->judul ?></p>
                        </div>

                    </div>
                    <div class="mx-auto" style="border-top: 1px solid black;width:96%;"></div>

                    <div class="p-4 m-4 w-full" style="width: 100vh;height:100vh;">
                        <iframe src="<?php echo base_url('upload/materi/teks/') . $item->isi ?>" style="width: 160%;height:100%"></iframe>
                    </div>

                    <?php if (empty($visit)) { ?>

                        <div class="row m-4">
                            <div class="d-flex justify-content-end gap-2">
                                <form action="<?php echo site_url('Siswa/Materi/Detail/Visit/') ?>" method="post">
                                    <input type="hidden" name="id_materi" value="<?php echo $item->id_materi ?>">
                                    <input type="checkbox" name="selesai" value="selesai">
                                    <button type="submit" class="btn btn-secondary">Selesai</button>
                                </form>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            <?php } ?>

        </div>


    </div>
</body>

</html>