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
    <div class="container-background">
        <div class="container-content-img">
            <div class="content-img">
                <img class="image" src="<?= base_url('assets/'); ?>image/login/icon_login.png" alt="">
            </div>
        </div>

        <div class="container-content-form">
            <div class="content-form">
                <input type="text" class="form-control" placeholder="Username">
                <input type="password" class="form-control" placeholder="Password">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6 rounded-pill">
                        <button class="btn btn-secondary btn-block">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>