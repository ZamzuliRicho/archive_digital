<div class="modal-content">
    <form role="form" action="<?= base_url('admin/aksilihatsk/') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-header">
            <h4 class="modal-title">Lihat Data Surat keluar</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card-body row">
                <?php foreach ($suratkeluar as $sk) :?>
                    <div class="col-md">
                        <input type="hidden" name="id_suratkeluar" value="<?= $sk->id_suratkeluar ?>">
                        <div class="form-group">
                            <label>No. Surat</label>
                            <input type="text" name="no_suratkeluar" class="form-control" value="<?= $sk->no_suratkeluar ?>" disabled="true">
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Primer</label>
                            <select class="form-control" name="klasifikasi_sk" disabled="true">
                                <option value="<?= $sk->id_indeks ?>">
                                    <?php echo $sk->judul_indeks ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Tersier</label>
                            <select class="form-control" name="klasifikasi_sk" disabled="true">
                                <option value="<?= $sk->id_tersier ?>">
                                    <?php echo $sk->id_tersier ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Retensi</label>
                            <select class="form-control" name="jenis_retensi_sk" disabled="true">
                                <option id="jenis_retensi_sk" value="<?= $sk->jenis_retensi_sk ?>">
                                    <?php echo $sk->jenis_retensi_sk ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kategori Surat</label>
                            <select class="form-control" name="kategori_surat_sk" disabled="true">
                                <option id="kategori_surat_sk" value="<?= $sk->kategori_surat_sk ?>">
                                    <?php echo $sk->kategori_surat_sk ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Keluar:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" name="tanggal_keluar" class="form-control" value="<?= $sk->tanggal_keluar ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask value="<?php echo date('Y-m-d') ?>" disabled="true">
                            </div>
                        </div>
                        <div class="form-group">
                                <label>Perihal Surat Keluar</label>
                                <textarea class="form-control input-group-lg" disabled="true" style="height:124px;" name="perihal"><?= $sk->perihal ?></textarea>
                        </div>

                    </div>

                    <div class="col-md">
                        <div class="form-group">
                            <label>Penerima</label>
                            <input type="text" name="tujuan" class="form-control" placeholder="<?= $sk->tujuan ?>" disabled="true">
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Sekunder</label>
                            <select class="form-control" name="klasifikasi_sekunder" disabled="true">
                                <option>
                                    <?php echo $sk->id_sekunder?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tingkat Perkembangan</label>
                            <select class="form-control" name="tingkat_perkembangan_sk" disabled="true">
                                <option id="tingkat_perkembangan_sk" value="<?= $sk->tingkat_perkembangan_sk ?>">
                                    <?php echo $sk->tingkat_perkembangan_sk ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jadwal Retensi Aktif</label>
                            <select class="form-control" name="jadwal_retensi_aktif_sk" disabled="true">
                                <option >
                                    <?php echo $sk->jadwal_retensi_aktif_sk ?>
                                </option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jadwal Retensi Inaktif</label>
                            <select class="form-control" name="jadwal_retensi_inaktif_sk" disabled="true">
                                <option >
                                    <?php echo $sk->jadwal_retensi_inaktif_sk ?>
                                </option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <select class="form-control" name="keterangan" disabled="true">
                                <option id="keterangan" value="<?= $sk->keterangan ?>">
                                    <?php echo $sk->keterangan ?>
                                </option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lokasi Berkas</label>
                            <input type="text" name="lokasi_berkas" disabled="true" class="form-control" placeholder="<?= $sk->lokasi_berkas ?>" value="<?= $sk->lokasi_berkas ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Index Surat</label>
                            <select class="form-control" name="id_indeks" disabled="true">
                                <option id="id_indeks" value="<?= $sk->id_indeks ?>">
                                    <?php echo $sk->judul_indeks ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dokumen surat</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="berkas_suratkeluar" class="custom-file-input" disabled="true">
                                    <label class="custom-file-label"><?= $sk->berkas_suratkeluar ?></label>
                                </div>
                            </div>
                            <small class="text-danger">Dokumen surat, bisa berupa doc, docx, pdf, jpg dan png.</small>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="modal-footer justify-content-end">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button> -->
            <a href="<?php if ($sk->berkas_suratkeluar != "") {
                                                            echo base_url('admin/download/suratkeluar/' . $sk->berkas_suratkeluar);
                                                        } elseif ($sk->berkas_suratkeluar == "") {
                                                            echo '#';
                                                        }  ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            Download Document
                                                        </button>
                                                </a>
        </div>
    </form>
</div>