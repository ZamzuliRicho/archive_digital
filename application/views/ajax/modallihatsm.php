<div class="modal-content">
    <form action="<?= base_url('admin/aksiubahsm/') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
            <h4 class="modal-title">Lihat Data Surat Masuk</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card-body row">
                <?php foreach ($suratmasuk as $sm) : ?>
                    <input type="hidden" id="id_suratmasuk" name="id_suratmasuk" value="<?= $sm->id_suratmasuk ?>">
                    <div class="col-md">
                        <div class="form-group">
                                <label>Nomor Surat</label>
                                <input type="text" name="no_suratmasuk" class="form-control" value="<?= $sm->no_suratmasuk ?>" required="" disabled="true">
                        </div>
                        
                        <div class="form-group">
                            <label>Klasifikasi Primer</label>
                            <select class="form-control" name="id_indeks" disabled="true">
                                <option id="id_indeks" value="<?= $sm->id_indeks ?>">
                                    <?php echo $sm->judul_indeks ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Tersier</label>
                            <select class="form-control" name="id_sekunder" disabled="true">
                                <option id="id_sekunder" value="<?= $sm->id_tersier ?>">
                                    <?php echo $sm->id_tersier ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jadwal Retensi Aktif</label>
                            <select class="form-control" name="jadwal_retensi_aktif" disabled="true">
                            <option id="jadwal_retensi_aktif" value="<?= $sm->jadwal_retensi_aktif ?>">
                                    <?php echo $sm->jadwal_retensi_aktif ?>
                            </option>
                        
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <select class="form-control" name="keterangan" disabled="true">
                            <option id="keterangan" value="<?= $sm->keterangan ?>">
                                    <?php echo $sm->keterangan ?>
                            </option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Retensi</label>
                            <select class="form-control" name="jenis_retensi" disabled="true">
                            <option id="jenis_retensi" value="<?= $sm->jenis_retensi ?>">
                                    <?php echo $sm->jenis_retensi ?>
                            </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Perihal Surat Keluar</label>
                            <textarea class="form-control input-group-lg" style="height:124px;" name="perihal" placeholder="" disabled="true"><?= $sm->perihal ?></textarea>
                        </div>
                        
                    </div>
                    <div class="col-md">
                        
                        <div class="form-group">
                                <label>Pengirim</label>
                                <input type="text" name="asal_surat" class="form-control" value="<?= $sm->asal_surat ?>" required="" disabled="true">
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Sekunder</label>
                            <select class="form-control" name="id_sekunder" disabled="true">
                                <option id="id_sekunder" value="<?= $sm->id_sekunder ?>">
                                    <?php echo $sm->id_sekunder ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tingkat Perkembangan</label>
                            <select class="form-control" name="tingkat_perkembangan" disabled="true">
                            <option id="tingkat_perkembangan" value="<?= $sm->tingkat_perkembangan ?>">
                                    <?php echo $sm->tingkat_perkembangan ?>
                            </option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jadwal Retensi Inaktif</label>
                            <select class="form-control" name="jadwal_retensi" disabled="true">
                            <option id="tingkat_perkembangan" value="<?= $sm->jadwal_retensi_inaktif ?>">
                                    <?php echo $sm->jadwal_retensi_inaktif ?>
                            </option>
                        
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kategori Surat</label>
                            <select class="form-control" name="kategori_surat" disabled="true">
                            <option id="tingkat_perkembangan" value="<?= $sm->kategori_surat ?>">
                                    <?php echo $sm->kategori_surat ?>
                            </option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Diterima:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" id="tanggal_diterima" name="tanggal_diterima" value="<?= $sm->tanggal_diterima ?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask disabled="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lokasi Berkas</label>
                            <input type="text" name="lokasi_berkas" disabled="true" class="form-control" value="<?= $sm->lokasi_berkas ?>">
                        </div>
                        <div class="form-group">
                            <label>Dokumen surat</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="berkas_suratmasuk" class="custom-file-input" disabled="true">
                                    <label class="custom-file-label"><?= $sm->berkas_suratmasuk ?></label>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="modal-footer justify-content-end">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button> -->
            <a href="<?php if ($sm->berkas_suratmasuk != "") {
                                                            echo base_url('admin/download/suratmasuk/' . $sm->berkas_suratmasuk);
                                    } elseif ($sm->berkas_suratmasuk == "") {
                                        echo '#';
                                } 
                            ?>">
                            <button type="button" class="btn btn-primary">
                                Download Document
                            </button>
            </a>
            <!-- <button type="submit" name="ubah" class="btn btn-primary">Ubah</button> -->
        </div>
    </form>
</div>