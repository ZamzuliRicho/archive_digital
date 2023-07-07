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
                <h1 class="h3 mb-4 text-gray-800">Surat Masuk</h1>
                <div class="card card-success">
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                            <?php if ($user == 'superadmin') { ?>
                                <div class="col-md-3">
                                    <button class="btn btn-primary btn-flat btn-block" data-toggle="modal" data-target="#addsm"><i class="fas fa-plus"></i> Tambah Surat Masuk </button>
                                </div>
                            <?php } else { ?>
                            <?php } ?>
                        </div>
                        <br>
                        <div class="table-responsive-md">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Surat</th>
                                        <!-- <th>Judul Surat</th> -->
                                        <th>Indeks</th>
                                        <th>Pengirim</th>
                                        <!-- <th>Tanggal Masuk</th> -->
                                        
                                        <!-- <th>Keterangan</th>
                                        <th>Klasifikasi</th>
                                        <th>Jenis Retensi</th>
                                        <th>Perkembangan</th> -->
                                        <!-- <th>Jadwal Retensi</th> -->
                                        <th>Perihal</th>
                                        <th>Tanggal Diterima</th>
                                        <!-- <th>Berkas</th> -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($suratmasuk as $sm) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $sm->no_suratmasuk; ?></td>
                                            <td><?= $sm->judul_indeks; ?></td>
                                            <td><?= $sm->asal_surat; ?></td>
                                            <td><?= $sm->perihal; ?></td>
                                            
                                            <td><?php $date = date_create($sm->tanggal_diterima);
                                                echo date_format($date, 'd/m/Y'); ?></td>
                                            <!-- <td><a href="<?php if ($sm->berkas_suratmasuk != "") {
                                                                echo base_url('admin/download/suratmasuk/' . $sm->berkas_suratmasuk);
                                                            } elseif ($sm->berkas_suratmasuk == "") {
                                                                echo '#';
                                                            }  ?>" class="text-success"><i class="fas fa-download"></i></a>
                                            </td> -->
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#lihatsm" data-id-lihatmasuk="<?= $sm->id_suratmasuk ?>"><span class="badge badge-info d-block">Lihat</span></a>
                                                <div class="modal fade" id="lihatsm">
                                                    <div class="modal-dialog modal-lg">
                                                        <div id="datalihatsm"></div>
                                                    </div>
                                                </div>

                                                <br>
                                                <?php if ($user == 'superadmin') { ?>
                                                <a href="#" data-toggle="modal" data-target="#ubahsm" data-id-suratmasuk="<?= $sm->id_suratmasuk ?>"><span class="badge badge-primary d-block">Edit</span></a>
                                                <div class="modal fade" id="ubahsm">
                                                    <div class="modal-dialog modal-lg">
                                                        <div id="dataubahsm"></div>
                                                    </div>
                                                </div>
                                                <br>
                                                <!-- <a href="<?= base_url('admin/disposisi/' . $sm->id_suratmasuk) ?>"><span class="badge badge-warning d-block">diposisi</span></a>
                                                <br> -->
                                                <a href="#" data-id-suratmasuk="<?php echo $sm->id_suratmasuk; ?>" data-no-suratmasuk="<?php echo $sm->no_suratmasuk; ?>" data-toggle="modal" data-target="#hapussm"><span class="badge badge-danger d-block">Hapus</span></a>
                                                <?php } else {
                                                } ?>
                                                <!-- <br>
                                                <a href="<?php if ($sm->berkas_suratmasuk != "") {
                                                            echo base_url('admin/download/suratmasuk/' . $sm->berkas_suratmasuk);
                                                        } elseif ($sm->berkas_suratmasuk == "") {
                                                            echo '#';
                                                        }  ?>"><span class="badge badge-warning d-block">download</span>
                                                </a> -->
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

<script>
    $(document).ready(function () {
        $('#lihatsm').on('show.bs.modal', function (e) {
        var id_suratmasuk = $(e.relatedTarget).data('id-lihatmasuk');

        $.ajax({
            url: 'http://localhost/e-arsip-ci/ajax/ajaxlihatsm',
            method: 'POST',
            data: 'id_suratmasuk=' + id_suratmasuk,
            success: function (data) {
                $('#datalihatsm').html(data);
            }
        })
    })
    }
</script>