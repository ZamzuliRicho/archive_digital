<?php
if ($this->session->userdata('level') == 1) {
    $user = 'superadmin';
} elseif ($this->session->userdata('level') == 2) {
    $user = 'admin';
}
?>

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
                <h1 class="h3 mb-4 text-gray-800">Profil saya</h1>
                <div class="card card-success">
                    <div class="card-body">
                        <div class="table table-borderless">
                            <table width="100%">
                            <?php foreach ($profil as $p) : ?>
                                <thead>
                                    <tr>
                                        <th class="text-center">Nama Lengkap</th>
                                        <th class="text-center">Role Pengguna</th>
                                        <th class="text-center">Ganti Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><?= $p->nama_lengkap ?></td>
                                        <td class="text-center"><?php echo strtoupper($user); ?></td>
                                        <td class="editprofile text-center">
                                            <!-- <a href="#" data-id_user="<?= $p->id_user ?>" data-toggle="modal" data-target="#editprofil" class="btn btn-primary btn-flat"><i class="fas fa-edit"></i> Edit profil</a> -->
                                            <a href="#" data-id_user="<?= $p->id_user ?>" data-toggle="modal" data-target="#gantipassword" class="btn btn-primary btn-flat"><i class="fas fa-key"></i> Ganti password</a></td>
                                        <div class="editprofil">
                                            
                                        </div>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
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

</div>s