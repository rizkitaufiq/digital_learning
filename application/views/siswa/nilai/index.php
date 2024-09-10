<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Siswa | Nilai </title>

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

            <div class="container mt-4 " style="border-radius:25px;border:1px solid black;">
                <div class="row mt-4">
                    <div class="col-4 text-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>

                    <div class="col-4 text-center">
                        <p>Daftar Nilai</p>
                    </div>

                </div>
                <div class="mx-auto" style="border-top: 1px solid black;width:96%;"></div>

                <div style="margin-top: 2rem;height: 60vh;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="background-color: #D9D9D9;">Nama Siswa</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 1</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 2</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 3</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 4</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 5</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 6</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 7</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 8</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 9</th>
                                <th style="background-color: #D9D9D9;">Pertemuan 10</th>
                                <th style="background-color: #D9D9D9;">Rata-rata</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?= $item['nama']; ?></td>
                                    <td><?= $item['bab_1']; ?></td>
                                    <td><?= $item['bab_2']; ?></td>
                                    <td><?= $item['bab_3']; ?></td>
                                    <td><?= $item['bab_4']; ?></td>
                                    <td><?= $item['bab_5']; ?></td>
                                    <td><?= $item['bab_6']; ?></td>
                                    <td><?= $item['bab_7']; ?></td>
                                    <td><?= $item['bab_8']; ?></td>
                                    <td><?= $item['bab_9']; ?></td>
                                    <td><?= $item['bab_10']; ?></td>
                                    <td><?= number_format($item['rata_rata']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php if (isset($links)) { ?>
                        <?php echo $links ?>
                    <?php } ?>
                    </p>
                </div>


            </div>

        </div>


    </div>
</body>

</html>