<div>
    <div class="col-md-12 d-flex justify-content-center align-items-center text-center mt-4">
        <h2>Hasil Praktikum Siswa</h2>
    </div>
    <button class="btn btn-info d-flex align-items-center justify-content-center text-center mb-4" style="border-radius: 24px; width:30;font-weight:bold;" data-toggle="modal" data-target="#AddModal">+ Tambah Praktikum</button>
    <!-- <input type="text" id="search" class="form-control mb-3" style="border: 1px solid #D9D9D9" placeholder="Search..."> -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="background-color: #D9D9D9;">Nomor</th>
                <th style="background-color: #D9D9D9;">Nama Siswa</th>
                <th style="background-color: #D9D9D9;">Kelas</th>
                <th style="background-color: #D9D9D9;">Praktikum 1</th>
                <th style="background-color: #D9D9D9;">Tanggal/Bln/Thn</th>
                <th style="background-color: #D9D9D9;">Waktu</th>
                <th style="background-color: #D9D9D9;">Aksi</th>
            </tr>
        </thead>
        <tbody id="items-table">
            <!-- Data Siswa -->
        </tbody>
    </table>
    <div id="pagination-links"></div>
    <div id="loading" class="loading d-none">Loading...</div>
</div>

<!-- Modal Add-->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-4 main-bg">
        <div class="modal-content main-bg" style="border: 1px solid black;">
            <div class="modal-body">
                <form action="<?php echo site_url('Admin/PraktikumSiswa/Add/Process'); ?>" method="post">

                    <div class="form-group mt-2">
                        <label for="praktikum">Praktikum</label>
                        <input name="praktikum" type="number" class="form-control" style="border: 1px solid black;border-radius:0;" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="soal">Soal</label>
                        <textarea name="soal" type="text" class="form-control" style="border: 1px solid black;border-radius:0;" required> </textarea>
                    </div>

                    <div class="d-flex justify-content-end align-items-end mt-2">
                        <button type="submit" class="main-bg" style="color:black;border:none;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/'); ?> js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        let limit = 5;
        let start = 0;
        let search = '';
        let action = 'inactive';

        function load_data(limit, start, search) {
            $.ajax({
                url: "<?php echo base_url(); ?>Admin/PraktikumSiswa/Page/Fetch_Data",
                method: "POST",
                data: {
                    limit: limit,
                    start: start,
                    search: search
                },
                dataType: "json",
                success: function(data) {
                    let html = '';
                    for (let i = 0; i < data.data.length; i++) {
                        html += '<tr>';
                        html += '<td>' + (start + i + 1) + '</td>';
                        html += '<td>' + data.data[i].nama + '</td>';
                        html += '<td>' + data.data[i].kelas + '</td>';
                        html += '<td>' + data.data[i].praktikum + '</td>';
                        html += '<td>' + data.data[i].tanggal + '</td>';
                        html += '<td>' + data.data[i].waktu + '</td>';
                        html += '<td>';
                        html += '<a href="<?php echo base_url('Admin/PraktikumSiswa/Page/ViewPDF/'); ?>' + data.data[i].id_praktikum_siswa + '" class="btn btn-info fas fa-eye btn-sm"></a> ';
                        html += '<a href="<?php echo base_url('Admin/PraktikumSiswa/Download/Process/'); ?>' + data.data[i].id_praktikum_siswa + '" class="btn btn-info fas fa-download btn-sm"></a>';
                        html += '</td>';
                        html += '</tr>';
                    }
                    $('#items-table').html(html);

                    let pagination = '<ul class="pagination justify-content-end">';
                    let total_pages = Math.ceil(data.total_records / limit);
                    for (let i = 1; i <= total_pages; i++) {
                        pagination += '<ul class="pagination">';
                        pagination += '<li class="page-item" style="cursor:pointer;">';
                        pagination += '<a class="page-link m-1" style="color:#000;" data-page="' + i + '">' + i + '</a>';
                        pagination += '</li>';
                        pagination += '</ul>';
                    }
                    $('#pagination-links').html(pagination);
                }
            });
        }

        load_data(limit, start, search);

        $(document).on('keyup', '#search', function() {
            start = 0;
            search = $(this).val();
            load_data(limit, start, search);
        });

        $(document).on('click', '.page-link', function() {
            let page = $(this).data('page');
            start = (page - 1) * limit;
            load_data(limit, start, search);
        });

    });
</script>

</body>

</html>