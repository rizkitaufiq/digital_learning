<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Learning</title>

    <!-- css login -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/login.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="row box-area" style="border-radius:25px;border:1px solid black;">
            <!-- Left Content -->
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box mt-5">
                <div class="featured-image mb-3">
                    <img class="img-fluid" src="<?= base_url('assets/'); ?>image/login/icon_login.png" width="200">
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-md-6 d-flex justify-content-center align-items-center right-box mt-5">
                <form action="<?= site_url('login/auth'); ?>" method="post">
                    <div class="row d-flex justify-content-center align-items-center w-full">
                        <div class="d-flex justify-content-center align-items-center m-2">
                            <?php if ($this->session->flashdata('error')) : ?>
                                <div class="alert alert-danger w-100"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="input-group m-2 d-flex w-75">
                            <input type="text" name="username" class="form-control form-control-lg bg-white fs-6 w-75" style="border-radius: 12px;" placeholder="Username" required="">
                        </div>

                        <div class="input-group m-2 w-75">
                            <input type="password" name="password" class="form-control form-control-lg bg-white fs-6" style="border-radius: 12px;height:5.5vh" placeholder="Password" required="">
                        </div>

                        <div class="d-flex input-group m-2 justify-content-center align-items-center rounded-sm mt-3">
                            <button type="submit" class="btn btn-lg btn-secondary w-25 fs-6 " style="border-radius: 12px;height: 5.5vh;">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>