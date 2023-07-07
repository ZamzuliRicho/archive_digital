
<div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/sidebar'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php $this->load->view('templates/topbar'); ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"> Manajemen Indeks</h1>
                <div class="card card-success">
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                            <div class="col-md-auto">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#addindeks">Tambah indeks</button>
                            </div>
                        </div>
                        <br>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link nav-justified active" data-toggle="tab" href="#primer">Primer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-justified" data-toggle="tab" href="#sekunder">Sekunder</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-justified" data-toggle="tab" href="#tersier">Tersier</a>
                            </li>
                        </ul>
                        <br>

                        <div class="tab-content">

                            <!-- INDEKS PRIMER -->
                            <div class="tab-pane active" id="primer" role="tabpanel" aria-labelledby="primer-tab">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode-Nama Indeks Primer</th>
                                            <?php if ($user == 'superadmin') { ?>
                                                <th>Aksi</th>
                                            <?php } else {
                                            } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($indeks as $i) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $i->judul_indeks; ?></td>
                                                <?php if ($user == 'superadmin') { ?>
                                                    <td>
                                                        <a href="javascript:;" data-id-indeks="<?= $i->id_indeks ?>" data-toggle="modal" data-target="#ubahindeks"><span class="badge badge-primary d-block">Edit</span></a>
                                                        <br>

                                                        <a href="#" data-id-indeks="<?= $i->id_indeks ?>" data-judul-indeks="<?= $i->judul_indeks ?>" data-toggle="modal" data-target="#hapusindeks"><span class="badge badge-danger d-block">Hapus</span></a><br>
                                                    </td>
                                                <?php } else {
                                                } ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- INDEKS SEKUNDER -->
                            <div class="tab-pane" id="sekunder" role="tabpanel" aria-labelledby="sekunder-tab">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode-Nama Indeks Sekunder</th>
                                            <?php if ($user == 'superadmin') { ?>
                                                <th>Aksi</th>
                                            <?php } else {
                                            } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($indeks_sekunder as $i) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $i->judul_sekunder; ?></td>
                                                <?php if ($user == 'superadmin') { ?>
                                                    <td>
                                                        <a href="javascript:;" data-id-indekssekunder="<?= $i->id_sekunder ?>" data-toggle="modal" data-target="#ubahindekssekunder"><span class="badge badge-primary d-block">Edit</span></a>
                                                        <br>

                                                        <a href="#" data-id-indekssekunder="<?= $i->id_sekunder ?>" data-judul-indekssekunder="<?= $i->judul_sekunder ?>" data-toggle="modal" data-target="#hapusindekssekunder"><span class="badge badge-danger d-block">Hapus</span></a><br>
                                                    </td>
                                                <?php } else {
                                                } ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Indeks Tersier -->
                            <div class="tab-pane fade" id="tersier" role="tabpanel" aria-labelledby="tersier-tab">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode-Nama Indeks Tersier</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($indeks_tersier as $s) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $s->judul_tersier; ?></td>
                                                <td>
                                                    <a href="javascript:;" data-id-indekstersier="<?= $s->id_tersier ?>" data-toggle="modal" data-target="#ubahindekstersier"><span class="badge badge-primary d-block">Edit</span></a>
                                                    <br>
                                                    <a href="#" data-id-indekstersier="<?= $s->id_tersier ?>" data-judul-indekstersier="<?= $s->judul_tersier ?>" data-toggle="modal" data-target="#hapusindekstersier"><span class="badge badge-danger d-block">Hapus</span></a><br>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <?php $this->load->view('admin/ekstra/modal') 
        ?>
        <!-- Footer -->
        <?php $this->load->view('templates/copyright') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

    
    