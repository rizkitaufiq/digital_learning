<body>
    <div class="p-md-2 second-bg mt-3">
        <div class="text-dark ">
            <div class="d-flex justify-content-center align-items center text-center">
                <!-- <?php foreach ($data_bab as $item) { ?>
                    <h4>Materi <?php echo $item->bab ?></h4>
                <?php } ?> -->
            </div>
            <div class="row align-items-center p-5">
                <div class="col-4 text-left">
                    <div class="left-element">
                        <a class="btn btn-info" style="border:1px solid black; border-radius: 25px;" href="<?= site_url('Admin/Materi/LatihanSoal/Add') ?>">+ Latihan Soal</a>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="center-element">
                        <h4>Latihan Soal</h4>
                    </div>
                </div>
            </div>

            <div class="mt-2 mx-5">
                <div class="p-md-2 main-bg">
                    <div class="row mx-5">

                        <div class="col-sm-6 col-md-12 mt-4">

                            <?php if (!empty($data)) { ?>

                                <?php foreach ($data as $item) { ?>
                                    <div class="second-bg col-12 d-flex justify-content-between mt-2" style="border-radius: 25px;height:9vh;">
                                        <div class="m-3">
                                            <p class="d-flex justify-content-center align-items-center text-center"><?php echo $item->soal ?></p>
                                        </div>

                                        <div class="d-flex justify-content-center align-items-center m-3">
                                            <a href="<?php echo base_url('Admin/Materi/LatihanSoal/Update/') . $item->id_soal ?>" class="btn btn-info fas fa-pencil m-1" style="border-radius: 8px;"></a>
                                            <a href="<?php echo base_url('Admin/Materi/LatihanSoal/Page/ViewSoal/') . $item->id_soal ?>" class="btn btn-info fas fa-eye m-1" style="border-radius: 8px;"></a>
                                            <a href="<?php echo base_url('Admin/Materi/LatihanSoal/Delete/Process/') . $item->id_soal ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-info fas fa-trash m-1" style="border-radius: 8px;"></a>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($links)) { ?>
                                    <?php echo $links ?>
                                <?php } ?>

                            <?php } else { ?>

                                <div class="second-bg col-12 d-flex justify-content-between" style="border-radius: 25px;height:9vh;">
                                    <div class="m-3">
                                        <p class="d-flex justify-content-center align-items-center text-center">Belum ada materi yang ditambahkan</p>
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