<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 ml-4 mb-4 text-gray-800">Detail DPM Fakultas</h1>
    <div class="container">
        <center>
            <div class="card mb-3 col-lg">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/img/foto_calon/') . $dpmf['foto']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title mb-3">No. Urut <?= $dpmf['no_urut']; ?></h4>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td>: <?= $dpmf['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fakultas</th>
                                        <td>: <?= $dpmf['fakultas']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jurusan</th>
                                        <td>: <?= $dpmf['jurusan']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        <center>
            <h3 class="card-text">Visi</h3>
            <h5 class="card-text"><?= $dpmf['visi']; ?></h5>
            <h3 class="card-text mt-5">Misi</h3>
            <h5 class="card-text"><?= $dpmf['misi']; ?></h5>
        </center>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->