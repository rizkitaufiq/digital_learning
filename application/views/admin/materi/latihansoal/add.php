<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="container mt-5">
        <div class="card">
            <div class="card-body bg-card">
                <div class="d-flex justify-content-center align-items-center m-1">
                    <h4>Tambah Soal</h4>
                </div>

                <div class="main-bg p-5 mx-4" style="border: 1px solid black;">
                    <div id="container-align-left">
                        <form action="<?= site_url('Admin/Materi/LatihanSoal/Add/Process') ?>" method="post">
                            <input type="hidden" name="format" value="left">

                            <div class="form-group">
                                <label for="soal" class="mb-2">Soal</label>
                                <input type="text" name="soal" class="second-bg form-control mb-2" style="height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-start align-items-center">
                                    <p class="mt-2">opsi</p>
                                    <button type="button" class="btn btn-info fas fa-align-left w-5 m-2" id="l-button-align-left"></button>
                                    <button type="button" class="btn btn-info fas fa-align-center w-5 m-2" id="l-button-align-center"></button>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-start align-items-center">
                                    <p class="mt-2">a</p>
                                    <input type="text" name="opsi_a" class="second-bg form-control mb-2 w-50" style="margin-left:10px;height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                    <input type="radio" name="jawaban" value="a" class="m-2" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-start align-items-center">
                                    <p class="mt-2">b</p>
                                    <input type="text" name="opsi_b" class="second-bg form-control mb-2 w-50" style="margin-left:10px;height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                    <input type="radio" name="jawaban" value="b" class="m-2" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-start align-items-center">
                                    <p class="mt-2">c</p>
                                    <input type="text" name="opsi_c" class="second-bg form-control mb-2 w-50" style="margin-left:10px;height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                    <input type="radio" name="jawaban" value="c" class="m-2" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-start align-items-center">
                                    <p class="mt-2">d</p>
                                    <input type="text" name="opsi_d" class="second-bg form-control mb-2 w-50" style="margin-left:10px;height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                    <input type="radio" name="jawaban" value="d" class="m-2" required>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end align-item-center">
                                <button type="submit" class="main-bg" style="color:black;border:none;">Simpan</button>
                            </div>

                        </form>
                    </div>

                    <div id="container-align-center">
                        <form action="<?= site_url('Admin/Materi/LatihanSoal/Add/Process') ?>" method="post">
                            <input type="hidden" name="format" value="center">
                            <div class="row">
                                <div class="form-group">
                                    <label for="soal" class="mb-2">Soal</label>
                                    <input type="text" name="soal" class="second-bg form-control mb-2" style="height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <p class="mt-2">opsi</p>
                                        <button type="button" class="btn btn-info fas fa-align-left w-5 m-2" id="c-button-align-left"></button>
                                        <button type="button" class="btn btn-info fas fa-align-center w-5 m-2" id="c-button-align-center"></button>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <p class="mt-2">a</p>
                                            <input type="text" name="opsi_a" class="second-bg form-control mb-2" style="margin-left:10px;height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                            <input type="radio" name="jawaban" value="a" class="m-2" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <p class="mt-2">b</p>
                                            <input type="text" name="opsi_b" class="second-bg form-control mb-2" style="margin-left:10px;height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                            <input type="radio" name="jawaban" value="b" class="m-2" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <p class="mt-2">c</p>
                                            <input type="text" name="opsi_c" class="second-bg form-control mb-2" style="margin-left:10px;height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                            <input type="radio" name="jawaban" value="c" class="m-2" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <p class="mt-2">d</p>
                                            <input type="text" name="opsi_d" class="second-bg form-control mb-2" style="margin-left:10px;height:7vh;border-radius: 10px; border: 1px solid #000000" required>
                                            <input type="radio" name="jawaban" value="d" class="m-2" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end align-item-center" style="height: 20vh;">
                                <button type="submit" class="main-bg" style="color:black;border:none;margin-top:16vh;">Simpan</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?> js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('container-align-left').style.display = 'block';
        document.getElementById('container-align-center').style.display = 'none';
        document.getElementById('l-button-align-left').classList.add('active');

        document.getElementById('l-button-align-left').addEventListener('click', function() {
            document.getElementById('container-align-left').style.display = 'block';
            document.getElementById('container-align-center').style.display = 'none';
        });

        document.getElementById('l-button-align-center').addEventListener('click', function() {
            document.getElementById('c-button-align-center').classList.add('active');
            document.getElementById('container-align-left').style.display = 'none';
            document.getElementById('container-align-center').style.display = 'block';
        });

        document.getElementById('c-button-align-left').addEventListener('click', function() {
            document.getElementById('container-align-left').style.display = 'block';
            document.getElementById('container-align-center').style.display = 'none';
        });

        document.getElementById('c-button-align-center').addEventListener('click', function() {
            document.getElementById('c-button-align-center').classList.add('active');
            document.getElementById('container-align-left').style.display = 'none';
            document.getElementById('container-align-center').style.display = 'block';
        });
    </script>
</body>

</html>