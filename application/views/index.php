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
    <!-- Main Content -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="row box-area">
            <!-- Left Content -->
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box mt-5">
                <div class="featured-image mb-3">
                    <img class="img-fluid" src="<?= base_url('assets/'); ?>image/login/icon_login.png">
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-md-6 d-flex justify-content-center align-items-center right-box mt-5">
                    <div class="row align-items-center">
                        <div class="input-group m-2">
                            <input type="text" class="form-control form-control-lg bg-white fs-6" style="border-radius: 12px;height:7.5vh" placeholder="Username">
                        </div>
                        <div class="input-group m-2">
                            <input type="password" class="form-control form-control-lg bg-white fs-6" style="border-radius: 12px;height:7.5vh" placeholder="Password">
                        </div>
                        <div class="d-flex input-group m-2 justify-content-center align-items-center rounded-sm mt-3">
                            <!-- <button class="btn btn-lg btn-secondary w-50 fs-6" style="border-radius: 12px;">Login</button> -->
                            <a href="<?= site_url('admin/beranda/page') ?>" class="btn btn-lg btn-secondary w-50 fs-8" style="border-radius: 15px; height:7.5vh">Login</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>