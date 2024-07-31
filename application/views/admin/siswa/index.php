
    <div class="col-md-12 d-flex justify-content-center align-items-center text-center">
    <h2>Daftar Siswa</h2>
    </div>
    <a href="<?= site_url('admin/siswa/add') ?>" class="btn btn-info d-flex align-items-center justify-content-center text-center m-2" style="border-radius: 24px; width:25vh;height:7vh;font-weight:bold;">+ Tambah Siswa</a>
    <input type="text" id="search" class="form-control mb-3" style="border: 1px solid #D9D9D9" placeholder="Search...">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>Tempat Lahir</th>
                <th>Tanggal, Bulan, Tahun Lahir</th>
                <th>JK</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="items-table">
            <!-- Data Siswa -->
        </tbody>
    </table>
    <div id="pagination-links"></div>
    <div id="loading" class="loading d-none">Loading...</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
            let limit = 5;
            let start = 0;
            let search = '';
            let action = 'inactive';

            function load_data(limit, start, search) {
                $.ajax({
                    url: "<?php echo base_url(); ?>admin/siswa/page/fetch_data",
                    method: "POST",
                    data: {limit: limit, start: start, search: search},
                    dataType: "json",
                    success: function(data) {
                        let html = '';
                        for (let i = 0; i < data.data.length; i++) {
                            html += '<tr>';
                            html += '<td>' + data.data[i].nama + '</td>';
                            html += '<td>' + data.data[i].nisn + '</td>';
                            html += '<td>' + data.data[i].kelas + '</td>';
                            html += '<td>' + data.data[i].tempat_lahir + '</td>';
                            html += '<td>' + data.data[i].tanggal_lahir + '</td>';
                            html += '<td>' + data.data[i].jenis_kelamin + '</td>';
                            html += '<td>' + data.data[i].agama + '</td>';
                            html += '<td>' + data.data[i].alamat + '</td>';
                            html += '<td>';
                            html += '<a href="<?php echo base_url('admin/siswa/update/'); ?>' + data.data[i].id_siswa + '" class="btn btn-info fas fa-pencil btn-sm"></a> ';
                            html += '<a href="<?php echo base_url('admin/siswa/delete/process/'); ?>' + data.data[i].id_siswa + '" class="btn btn-info fas fa-trash btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')"></a>'; 
                            html += '</td>';
                            html += '</tr>';
                        }
                        $('#items-table').html(html);

                        let pagination = '<ul class="pagination justify-content-end">';
                        let total_pages = Math.ceil(data.total_records / limit);
                        for (let i = 1; i <= total_pages; i++) {
                            pagination += '<ul class="pagination">';
                            pagination += '<li class="page-item">';
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

            // Delete
            // $(document).on('click', '.delete', function() {
            //     let id = $(this).data('id');
            //     if (confirm('Are you sure you want to delete this item?')) {
            //         $.ajax({
            //             url: "<?php echo base_url(); ?>admin/siswa/delete",
            //             method: "POST",
            //             data: {id: id},
            //             success: function(data) {
            //                 if (data.status) {
            //                     load_data(limit, start, search);
            //                 } else {
            //                     alert('Failed to delete item');
            //                 }
            //             }
            //         });
            //     }
            // });

        });
</script>
</body>

</html>