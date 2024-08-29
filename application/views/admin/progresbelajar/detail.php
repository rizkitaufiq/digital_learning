<body>
    <div class="p-md-2 second-bg mt-3">
        <div class="text-dark ">
            <div class="d-flex justify-content-center align-items center text-center">

            </div>
            <?php if (!empty($data)) { ?>
                <?php foreach ($data as $item) : ?>
                    <div class="m-4 mx-4">
                        <div class="row">
                            <div class="d-flex justify-content-start align-items-center gap-3">
                                <div class="d-flex justify-content-center align-items-center text-center w-25 main-bg" style="height: 15vh;border-radius:15px;border: 1px solid black;">
                                    <h3>Bab <?php echo $item->bab_id ?></h3>
                                </div>
                                <div class="flex-column w-100 justify-content-start align-items-center mt-3">
                                    <p><?php echo $item->nama ?></p>
                                    <div class="progress w-25">
                                        <div class="progress-bar" role="progressbar" style="width:<?php echo $item->persentase ?>%; background:black;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p><?php echo $item->persentase ?>%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php } else { ?>

                <div class="row d-flex justify-content-center p-4">
                    <div class="d-flex justify-content-center w-100 main-bg" style="border-radius:25px;height:9vh;">
                        <p class="d-flex justify-content-center align-items-center text-center mt-2">Belum ada Progres Belajar</p>
                    </div>
                </div>

            <?php } ?>

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="<?= base_url('assets/'); ?> js/bootstrap.bundle.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>