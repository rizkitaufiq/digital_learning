<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="p-md-2 second-bg mt-3">
        <div class="text-dark">
            <div class="d-flex justify-content-center align-items center text-center">
                <?php foreach ($data_bab as $item) { ?>
                    <h4>Materi <?php echo $item->bab ?></h4>
                <?php } ?>

            </div>
            <div class="mt-2 mx-5">
                <div class="p-md-2 main-bg">
                    <div class="row mx-5">

                        <div class="col-sm-6 col-md-12 mt-4">

                            <?php if (!empty($data)) { ?>

                                <?php foreach ($data as $item) { ?>
                                    <div class="second-bg col-12 d-flex justify-content-between mt-2" style="border-radius: 25px;height:9vh;">
                                        <div class="m-3">
                                            <p class="d-flex justify-content-center align-items-center text-center"><?php echo $item->judul ?></p>
                                        </div>

                                        <div class="d-flex justify-content-center align-items-center m-3">
                                            <a class="btn btn-info fas fa-pencil m-1" style="border-radius: 8px;" data-toggle="modal" data-target="#UpdateModal" onclick="select_data(
                                                '<?= $item->id_materi ?>',
                                                '<?= $item->judul ?>',
                                                '<?= $item->isi ?>',
                                                '<?= $item->penjelasan ?>',
                                                '<?= $item->bab_id ?>',
                                            )"></a>
                                            <a href="<?php echo base_url('Admin/Materi/MateriTeks/Delete/Process/') . $item->id_materi ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-info fas fa-trash m-1" style="border-radius: 8px;"></a>
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

                            <div class="d-flex justify-content-end align-items-end mt-4">
                                <button type="button" class="btn btn-info" style="border:1px solid black; border-radius: 25px;" data-toggle="modal" data-target="#AddModal">+ Tambah Materi</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add-->
        <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog main-bg" style="border: 1px solid black;">
                <div class="modal-content main-bg" style="border-radius: 0;">
                    <div class="modal-body">
                        <form action="<?php echo site_url('Admin/Materi/MateriTeks/Add/Process'); ?>" method="post">
                            <?php foreach ($data_bab as $item) { ?>
                                <input name="id_bab" type="hidden" class="form-control" value="<?php echo $item->id_bab ?>">
                            <?php } ?>
                            <div class="form-group mt-2">
                                <label for="nama">Judul Materi</label>
                                <input name="judul" type="text" class="form-control" style="border: 1px solid black;border-radius:0;" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="isi">Isi Materi</label>
                                <textarea name="isi" type="text" class="form-control" style="border: 1px solid black;height:20vh;border-radius:0;" required></textarea>
                            </div>

                            <div class="form-group mt-2">
                                <label for="penjelasan">Penjelasan</label>
                                <textarea name="penjelasan" type="text" class="form-control" style="border: 1px solid black;height:20vh;border-radius:0;" required></textarea>
                            </div>

                            <div class="d-flex justify-content-end align-items-end mt-2">
                                <button type="submit" class="main-bg" style="color:black;border:none;">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Update-->
        <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog main-bg" style="border: 1px solid black;">
                <div class="modal-content main-bg" style="border-radius: 0;">
                    <div class="modal-body">
                        <form action="<?php echo site_url('Admin/Materi/MateriTeks/Update/Process'); ?>" method="post">

                            <input id="id_materi" name="id_materi" type="hidden" class="form-control">
                            <input id="bab_id" name="bab_id" type="hidden" class="form-control">

                            <div class="form-group mt-2">
                                <label for="nama">Judul Materi</label>
                                <input name="judul" id="judul" type="text" class="form-control" style="border: 1px solid black;border-radius:0;">
                            </div>

                            <div class="form-group mt-2">
                                <label for="isi">Isi Materi</label>
                                <textarea name="isi" id="isi" type="text" class="form-control" style="border: 1px solid black;height:20vh;border-radius:0;"></textarea>
                            </div>

                            <div class="form-group mt-2">
                                <label for="penjelasan">Penjelasan</label>
                                <textarea name="penjelasan" id="penjelasan" type="text" class="form-control" style="border: 1px solid black;height:20vh;border-radius:0;"></textarea>
                            </div>

                            <div class="d-flex justify-content-end align-items-end mt-2">
                                <button type="submit" class="main-bg" style="color:black;border:none;">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function select_data($id_materi, $judul, $isi, $penjelasan, $bab_id) {
            $("#id_materi").val($id_materi);
            $("#judul").val($judul);
            $("#isi").val($isi);
            $("#penjelasan").val($penjelasan);
            $("#bab_id").val($bab_id);
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?> js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>