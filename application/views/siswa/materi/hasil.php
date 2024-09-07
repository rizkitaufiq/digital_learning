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
</head>

<body>
    <div class="p-md-2">
        <div class="text-dark">
            <div class="container mt-4 bg-yellow" style="border-radius:25px;border:1px solid black;">
                <div class="row mt-4">
                    <div class="col-4 text-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>

                    <div class="col-4 text-center">
                        <h1>Latihan Soal</h1>
                    </div>

                </div>
                <div class="mx-auto" style="border-top: 1px solid black;width:96%;"></div>

                <div class="p-4 m-4" style="height: auto;">
                    <form action="<?php echo site_url('Siswa/Materi/LatihanSoal/Add') ?>" method="post">
                        <div class="row">

                            <!-- left -->
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

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="a" class="m-2" required>
                                                        <p class="m-1" name=" opsi_a"><?php echo $item->opsi_a ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="b" class="m-2" required>
                                                        <p class="m-1" name=" opsi_b"><?php echo $item->opsi_b ?> </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="c" class="m-2">
                                                        <p class="m-1" name=" opsi_c"><?php echo $item->opsi_c ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="d" class="m-2">
                                                        <p class="m-1" name=" opsi_d"><?php echo $item->opsi_d ?> </p>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } else { ?>

                                            <div class="d-flex row">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="a" class="m-2" required>
                                                        <p class="m-1" name=" opsi_a"><?php echo $item->opsi_a ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="b" class="m-2" required>
                                                        <p class="m-1" name=" opsi_b"><?php echo $item->opsi_b ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="c" class="m-2">
                                                        <p class="m-1" name=" opsi_c"><?php echo $item->opsi_c ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="d" class="m-2">
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

                                        <?php if ($item->format == 'center') { ?>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="a" class="m-2" required>
                                                        <p class="m-1" name=" opsi_a"><?php echo $item->opsi_a ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="b" class="m-2" required>
                                                        <p class="m-1" name=" opsi_b"><?php echo $item->opsi_b ?> </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="c" class="m-2">
                                                        <p class="m-1" name=" opsi_c"><?php echo $item->opsi_c ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="d" class="m-2">
                                                        <p class="m-1" name=" opsi_d"><?php echo $item->opsi_d ?> </p>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } else { ?>

                                            <div class="d-flex row">
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="a" class="m-2" required>
                                                        <p class="m-1" name=" opsi_a"><?php echo $item->opsi_a ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="b" class="m-2" required>
                                                        <p class="m-1" name=" opsi_b"><?php echo $item->opsi_b ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="c" class="m-2">
                                                        <p class="m-1" name=" opsi_c"><?php echo $item->opsi_c ?> </p>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="radio" name="<?php echo $item->id_soal ?>" value="d" class="m-2">
                                                        <p class="m-1" name=" opsi_d"><?php echo $item->opsi_d ?> </p>
                                                    </div>
                                                </div>
                                                <button type="submit"></button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </form>


                    <div class="row mt-4">
                        <div class="d-flex justify-content-center align-items-center" style="margin-left: 1rem;">
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
                                    <td style="text-align: center;vertical-align: middle;"><?php echo $benar ?></td>
                                    <td style="text-align: center;vertical-align: middle;"><?php echo $salah ?></td>
                                    <td style="text-align: center;vertical-align: middle;"><?php echo $hasil ?></td>
                                </tr>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center align-items-center gap-3 p-2" style="margin-left: 1rem;">
                            <a href="<?php echo site_url('Siswa/Materi/LatihanSoal/Repeat/') . $id_bab ?>" style="text-decoration:none; color:black">
                                Ulangi
                            </a>
                            <a href="<?php echo site_url('Siswa/Materi/LatihanSoal/Save/') . $id_nilai ?>" style="text-decoration:none; color:black">
                                Simpan
                            </a>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

</body>

</html>