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
            <div class="container mt-4 bg-yellow" style="border-radius:25px;border:1px solid black;">
                <div class="row mt-4">
                    <div class="col-4 text-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>

                    <div class="col-4 text-center">
                        <p>Latihan Soal</p>
                    </div>

                </div>
                <div class="mx-auto" style="border-top: 1px solid black;width:96%;"></div>

                <div class="p-4 m-4" style="height: auto;">
                    <form action="<?php site_url('Siswa/Materi/LatihanSoal/Add') ?>" method="post">
                        <div class="row">

                            <!-- left -->
                            <?php if (!empty($data)) { ?>
                                <div class="col-md-6">

                                    <?php $no = 1 ?>

                                    <?php foreach (array_slice($data, 0, 5) as $item) : ?>
                                        <div class="row mb-4">
                                            <div class="form-group">
                                                <div class="d-flex">
                                                    <p style="margin-right: 0.3rem;"><?php echo $no++ ?>.</p>
                                                    <p class="mb-2"><?php echo $item->soal ?></p>
                                                </div>
                                            </div>

                                            <?php if ($item->format == 'center') { ?>

                                                <input type="hidden" name="id_soal" value="<?php echo $item->id_soal ?>" class="m-2" required>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <input type="radio" name="jawaban" value="a" class="m-2" required>
                                                            <p class="m-1" name=" opsi_a"><?php echo $item->opsi_a ?> </p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <input type="radio" name="jawaban" value="b" class="m-2" required>
                                                            <p class="m-1" name=" opsi_b"><?php echo $item->opsi_b ?> </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <input type="radio" name="jawaban" value="c" class="m-2">
                                                            <p class="m-1" name=" opsi_c"><?php echo $item->opsi_c ?> </p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <input type="radio" name="jawaban" value="d" class="m-2">
                                                            <p class="m-1" name=" opsi_d"><?php echo $item->opsi_d ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="d-flex row">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <input type="radio" name="jawaban" value="a" class="m-2" required>
                                                            <p class="m-1" name=" opsi_a"><?php echo $item->opsi_a ?> </p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <input type="radio" name="jawaban" value="b" class="m-2" required>
                                                            <p class="m-1" name=" opsi_b"><?php echo $item->opsi_b ?> </p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <input type="radio" name="jawaban" value="c" class="m-2">
                                                            <p class="m-1" name=" opsi_c"><?php echo $item->opsi_c ?> </p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start align-items-center">
                                                            <input type="radio" name="jawaban" value="d" class="m-2">
                                                            <p class="m-1" name=" opsi_d"><?php echo $item->opsi_d ?> </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- right -->
                                <div class="col-md-6">
                                    <?php $no = 6 ?>
                                    <?php foreach (array_slice($data, 5) as $item) : ?>
                                        <div class="row mb-4">
                                            <div class="form-group">
                                                <div class="d-flex">
                                                    <p style="margin-right: 0.3rem;"><?php echo $no++ ?>.</p>
                                                    <p class="mb-2"><?php echo $item->soal ?></p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" multiple name="jawaban" value="a" class="m-2" required>
                                                        <p class="m-1" name=" opsi_a"><?php echo $item->opsi_a ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" multiple name="jawaban" value="b" class="m-2" required>
                                                        <p class="m-1" name=" opsi_b"><?php echo $item->opsi_b ?> </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" multiple name="jawaban" value="c" class="m-2">
                                                        <p class="m-1" name=" opsi_c"><?php echo $item->opsi_c ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="jawaban" value="d" class="m-2">
                                                        <p class="m-1" name=" opsi_d"><?php echo $item->opsi_d ?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-end mt-2">
                            <button type="submit" class="bg-yellow" style="color:black;border:none;">
                                <p>Selesai!</p>
                            </button>
                        </div>
                    </form>



                <?php } else { ?>

                    <div class="row">
                        <div class="d-flex justify-content-start align-item-center">
                            <p>Soal Belum ditambahkan</p>

                        </div>
                    </div>

                <?php } ?>

                <!-- <div class="row mt-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <h3>Good Job !</h3>
                        </div>

                        <div class="d-flex justify-content-center align-items-center">

                            <table class="table table-bordered w-50">
                                <tr>
                                    <th style="text-align: center;vertical-align: middle;">Benar</th>
                                    <th style="text-align: center;vertical-align: middle;">Salah</th>
                                    <th style="text-align: center;vertical-align: middle;">Nilai</th>
                                </tr>

                                <tr style="height:5rem;">
                                    <td style="text-align: center;vertical-align: middle;">6</td>
                                    <td style="text-align: center;vertical-align: middle;">4</td>
                                    <td style="text-align: center;vertical-align: middle;">60</td>
                                </tr>
                            </table>
                        </div>
                    </div> -->

                </div>
            </div>


        </div>
    </div>

</body>

</html>