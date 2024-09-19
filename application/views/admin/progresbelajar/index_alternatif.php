<body>
    <div class="p-md-2 main-bg mt-2">
        <div class="text-dark">
            <div class="mt-2 mx-5">
                <div class="row mx-5">

                    <?php foreach ($data as $item) { ?>
                        <div class="col-sm-6 col-md-4 p-5 ">
                            <div class="position-relative box-content bg-blue box-custom">
                                <div class="mt-3">
                                    <a href="<?= site_url('Admin/ProgresBelajar/Detail/') . $item->id_bab; ?>" class="btn d-flex align-items-center justify-content-center text-center m-2" style="background:#FFFFFE; border:1px solid #000000; border-radius: 20px;width:150px; height:7vh"><?php echo $item->bab ?></a>
                                </div>
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