<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Admin | Digital Leaning</title>

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

                    <?php $menu    = $this->uri->segment(2); ?>

                    <a href="<?= site_url('Admin/Beranda/Page') ?>" class="<?php if ($menu == 'Beranda') {
                                                                                echo "active";
                                                                            } ?> btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Beranda</a>

                    <a href="<?= site_url('Admin/Siswa/Page') ?>" class="<?php if ($menu == 'Siswa') {
                                                                                echo "active";
                                                                            } ?> btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Siswa</a>

                    <a href="<?= site_url('Admin/Nilai/Page') ?>" class="<?php if ($menu == 'Nilai') {
                                                                                echo "active";
                                                                            } ?> btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Nilai</a>

                    <div class="<?php if ($menu == 'Materi') {
                                    echo "active";
                                } ?> btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2 dropdown" style="border-radius: 25px; height:7vh;" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                        <a class="d-flex align-items-center justify-content-center text-center" style="border-radius: 25px; height:7vh;">
                            Materi
                        </a>
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-top:1px;width: 195px;">
                        <a href="<?= site_url('Admin/Materi/MateriTeks/Page') ?>" class="dropdown-item">Materi Teks</a>
                        <a href="<?= site_url('Admin/Materi/LatihanSoal/Page') ?>" class="dropdown-item">Latihan Soal</a>
                    </div>

                    <a href="<?= site_url('Admin/MateriVideo/Page') ?>" class="<?php if ($menu == 'MateriVideo') {
                                                                                    echo "active";
                                                                                } ?> btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Materi Video</a>

                    <a href="<?= site_url('Admin/ProgresBelajar/Page') ?>" class="<?php if ($menu == 'ProgresBelajar') {
                                                                                        echo "active";
                                                                                    } ?> btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Progres Belajar</a>

                    <a href="<?= site_url('Admin/PraktikumSiswa/Page') ?>" class="<?php if ($menu == 'PraktikumSiswa') {
                                                                                        echo "active";
                                                                                    } ?> btn btn-info d-flex align-items-center justify-content-center text-center w-50 m-2" style="border-radius: 25px; height:7vh">Praktikum Siswa</a>

                </div>
            </div>
        </div>