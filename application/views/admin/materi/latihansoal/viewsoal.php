<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Digital Learning</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap/bootstrap.min.css">

    <!-- css admin -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/admin.css">

    <!-- Custom styles for this template -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>font-awesome/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body bg-card">
                <div class="d-flex justify-content-center align-items-center m-1">
                    <h4>Soal</h4>
                </div>

                <div class="main-bg p-5 mx-4" style="border: 1px solid black;">
                    <div id="container-align-left">
                        <?php foreach ($data as $item) : ?>

                            <div class="row mb-4">
                                <div class="form-group">
                                    <div class="d-flex">
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

                        <?php endforeach ?>
                    </div>

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