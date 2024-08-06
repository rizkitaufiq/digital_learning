<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Siswa Add</title>

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
                <div class="m-1">
                    <h4>Tambah Siswa</h4>
                </div>

                <form action="<?= site_url('admin/siswa/update/process') ?>" method="post">
                    <?php foreach ($data as $item) { ?>
                        <input type="hidden" name="id_siswa" value="<?php echo $item->id_siswa ?>" placeholder="Nama Siswa :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        <div class="form-group">
                            <input type="text" name="nama" value="<?php echo $item->nama ?>" placeholder="Nama Siswa :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group">
                            <input type="number" name="nisn" value="<?php echo $item->nisn ?>" placeholder="NISN :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group">
                            <input type="text" name="kelas" value="<?php echo $item->kelas ?>" placeholder="Kelas :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group">
                            <input type="text" name="tempat_lahir" value="<?php echo $item->tempat_lahir ?>" placeholder="Tempat Lahir :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group">
                            <input type="date" name="tanggal_lahir" value="<?php echo $item->tanggal_lahir ?>" placeholder="Tanggal Lahir :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group">
                            <?php if ($item->jenis_kelamin == "L") { ?>
                                <select name="jenis_kelamin" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                                    <option value="L" <?php echo set_select('jenis_kelamin', 'L'); ?>>L</option>
                                    <option value="P" <?php echo set_select('jenis_kelamin', 'P'); ?>>P</option>
                                </select>

                            <?php } else { ?>
                                <select name="jenis_kelamin" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                                    <option value="P" <?php echo set_select('jenis_kelamin', 'P'); ?>>P</option>
                                    <option value="L" <?php echo set_select('jenis_kelamin', 'L'); ?>>L</option>
                                </select>
                            <?php } ?>
                        </div>

                        <div class="form-group">
                            <input type="text" name="agama" value="<?php echo $item->agama ?>" placeholder="Agama :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group">
                            <input type="text" name="alamat" value="<?php echo $item->alamat ?>" placeholder="Alamat :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group">
                            <input type="text" name="username" value="<?php echo $item->username ?>" placeholder="Username :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group">
                            <input type="text" name="password" value="<?php echo $item->password ?>" placeholder="Password :" class="form-control mb-2" style="background: #F9FAC7 ; border-radius: 0; border: 1px solid #000000">
                        </div>

                        <div class="form-group d-flex justify-content-end align-item-center">
                            <button type="submit" class="btn btn-info" style="border-radius: 20px;border: 1px solid #000000; width:16vh; height:5vh">Simpan</button>
                        </div>
                    <?php } ?>
                </form>
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