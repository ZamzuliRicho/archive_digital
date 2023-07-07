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
                <h1 class="h3 mb-4 text-gray-800">Surat Keluar</h1>
                <div class="card card-success">
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                            <?php if ($user == 'superadmin') { ?>
                                <div class="col-md-3">
                                    <button class="btn btn-primary btn-flat btn-block" id="tambah" data-toggle="modal" data-target="#addsk"><i class="fas fa-plus"></i> Tambah Surat Keluar </button>
                                </div>
                            <?php } else { ?>
                            <?php } ?>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Surat</th>
                                        <!-- <th>Judul Surat</th> -->
                                        <th>Indeks</th>
                                        <th>Penerima</th>
                                        <!-- <th>Tanggal Masuk</th> -->
                                        
                                        <!-- <th>Keterangan</th> -->
                                        <!-- <th>Klasifikasi</th> -->
                                        <!-- <th>Jenis Retensi</th> -->
                                        <!-- <th>Perkembangan</th> -->
                                        <!-- <th>Jadwal Retensi</th> -->
                                        <th>Perihal</th>
                                        <th>Tanggal Dikirim</th>
                                        <!-- <th>Berkas</th> -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($suratkeluar as $sk) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $sk->no_suratkeluar; ?></td>
                                            <td><?= $sk->judul_indeks; ?></td>
                                            <td><?= $sk->tujuan; ?></td>
                                            
                                            <td><?= $sk->perihal; ?></td>
                                            <td><?php $date = date_create($sk->tanggal_keluar);
                                                echo date_format($date, 'd/m/Y'); ?></td>
                                            

                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#lihatsk" data-id-lihatsk="<?= $sk->id_suratkeluar ?>"><span class="badge badge-info d-block">Lihat</span></a>
                                                <div class="modal fade" id="lihatsk">
                                                    <div class="modal-dialog modal-lg">
                                                        <div id="datalihatsk"></div>
                                                    </div>
                                                </div>

                                                <br>
                                                <?php if ($user == 'superadmin') { ?>
                                                <a href="#" data-toggle="modal" data-target="#ubahsk" data-id-sk="<?= $sk->id_suratkeluar ?>"><span class="badge badge-primary d-block">Edit</span></a>
                                                <div class="modal fade" id="ubahsk">
                                                    <div class="modal-dialog modal-lg">
                                                        <div id="dataubahsk"></div>
                                                    </div>
                                                </div>
                                                <br>
                                                <a href="#" data-id-sk="<?php echo $sk->id_suratkeluar; ?>" data-toggle="modal" data-target="#hapussk"><span class="badge badge-danger d-block">Hapus</span></a>
                                                <?php } else {
                                                } ?>
                                                <br>
                                                
                                            </td>

                                            


                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <!-- modal tambah -->
        <?php $this->load->view('admin/ekstra/modal'); ?>
        <!-- Footer -->
        <?php $this->load->view('templates/copyright') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>