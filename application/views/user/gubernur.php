<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <center>
        <h1 class="h3 mb-4 text-gray-800">Pemilihan Gubernur Fakultas</h1>
    </center>
    <?php foreach ($gubernur as $g) : ?>
        <div class="card mr-5 mb-3" style="width: 18rem; display:inline-block;">
            <img src="<?= base_url('assets/img/foto_calon/') . $g['foto']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center; color: black;"><?= $g['no_urut']; ?></h5>
                <h5 class="card-text mb-5" style="text-align: center; color: black;"><?= $g['nama_ketua'] . " dan " . $g['nama_wakil']; ?></h5>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <a href="<?= base_url('user/pilihGubernur/') . $g['id']; ?>" class="btn btn-danger" onclick="return confirm ('apakah anda yakin?');">Pilih</a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <a href="<?= base_url('user/detailGubernur/') . $g['id']; ?>" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->