<style>
    .color-1 {
        background-color: #FFF1F1;
    }

    .color-2 {
        background-color: #E2D346;
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

<body>
    <div class="p-md-2 main-bg mt-2">
        <div class="text-dark">
            <div class="mt-2 mx-5">
                <div class="row mx-5">

                    <?php

                    $colors = ['color-1', 'color-2', 'color-3', 'color-4', 'color-5', 'color-6', 'color-7', 'color-8', 'color-9', 'color-10'];
                    $color_index = 0;

                    $images = ['word.png', 'pc.png', 'laptop.png', 'mouse.png', 'paper.png', 'keyboard.png', 'list.png', 'abc.png', 'globe.png', 'gmail.png',];
                    $image_index = 0;

                    ?>

                    <?php foreach ($data as $item) { ?>
                        <div class="col-sm-6 col-md-2 m-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="<?= site_url('Admin/Materi/MateriTeks/MateriBab/') . $item->id_bab; ?>" class="box-bab <?php echo $colors[$color_index++]; ?> d-flex" style="border-radius: 10px; width:120px;height:130px;">
                                    <div class="d-flex row">
                                        <div class="d-flex justify-content-center text-center">
                                            <div class="row mt-3">
                                                <div class="d-flex justify-content-center align-items-center" style="height: 50px;">
                                                    <img src="<?php echo base_url('assets/image/siswa/') . $images[$image_index++] ?>" alt="image" style="width: 65px">
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <p class="mb-4 mt-3"><?php echo $item->bab ?></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                        </div>
                    <?php } ?>

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