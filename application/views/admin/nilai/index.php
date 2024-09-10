<div class="col-md-12 d-flex justify-content-center align-items-center text-center">
    <h2>Nilai Siswa</h2>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th style="background-color: #D9D9D9;">Nama Siswa</th>
            <th style="background-color: #D9D9D9;">Pertemuan 1</th>
            <th style="background-color: #D9D9D9;">Pertemuan 2</th>
            <th style="background-color: #D9D9D9;">Pertemuan 3</th>
            <th style="background-color: #D9D9D9;">Pertemuan 4</th>
            <th style="background-color: #D9D9D9;">Pertemuan 5</th>
            <th style="background-color: #D9D9D9;">Pertemuan 6</th>
            <th style="background-color: #D9D9D9;">Pertemuan 7</th>
            <th style="background-color: #D9D9D9;">Pertemuan 8</th>
            <th style="background-color: #D9D9D9;">Pertemuan 9</th>
            <th style="background-color: #D9D9D9;">Pertemuan 10</th>
            <th style="background-color: #D9D9D9;">Rata-rata</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['bab_1']; ?></td>
                <td><?= $item['bab_2']; ?></td>
                <td><?= $item['bab_3']; ?></td>
                <td><?= $item['bab_4']; ?></td>
                <td><?= $item['bab_5']; ?></td>
                <td><?= $item['bab_6']; ?></td>
                <td><?= $item['bab_7']; ?></td>
                <td><?= $item['bab_8']; ?></td>
                <td><?= $item['bab_9']; ?></td>
                <td><?= $item['bab_10']; ?></td>
                <td><?= number_format($item['rata_rata']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php if (isset($links)) { ?>
    <?php echo $links ?>
<?php } ?>
<!-- <div id="pagination-links"></div> -->
<!-- <div id="loading" class="loading d-none">Loading...</div> -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/'); ?> js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>