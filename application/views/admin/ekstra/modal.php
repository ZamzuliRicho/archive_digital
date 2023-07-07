<!-- Surat masuk -->
<div class="modal fade" id="addsm">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Surat Masuk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    echo form_open_multipart('admin/tambahsm');
                    ?>
                <div class="card-body row">
                    <div class="col-md">
                        <div class="form-group">
                            <label>Nomor Surat</label>
                            <input type="text" name="no_suratmasuk" class="form-control" placeholder="Masukan Nomor Surat" required="">
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Primer</label>
                            <select class="form-control" name="id_indeks" id="sm_primary">
                                <option value="">---- PILIH KLASIFIKASI ----</option>
                                <?php foreach ($indeks as $i) : ?>
                                    <option value="<?php echo $i->id_indeks; ?>" id_primer="<?php echo $i->id_indeks; ?>" judul_indeks="<?php echo ($i->judul_indeks); ?>">
                                        <?php echo strtoupper($i->judul_indeks); ?>
                                    </option>
                                <?php endforeach; ?>
                                <input type="hidden" name="judul_indeks" id="judul_indeks"></input>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Klasifikasi Tersier</label>
                            <select class="form-control" name="id_tersier" id="sm_tersier">
                                <option value="">--- PILIH KLASIFIKASI TERSIER ---</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jadwal Retensi Aktif</label>
                            <select class="form-control" name="jadwal_retensi_aktif">
                                <option value="">--- Pilih Jadwal Retensi ---</option>
                                <option value="1 Tahun">1 Tahun</option>
                                <option value="2 Tahun">2 Tahun</option>
                                <option value="3 Tahun">3 Tahun</option>
                                <option value="4 Tahun">4 Tahun</option>
                                <option value="5 Tahun">5 Tahun</option>
                                <option value="6 Tahun">6 Tahun</option>
                                <option value="7 Tahun">7 Tahun</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <select class="form-control" name="keterangan">
                                <option value="">--- Pilih Keterangan ---</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Retensi</label>
                            <select class="form-control" name="jenis_retensi">
                                <option value="">--- Pilih Jenis Retensi ---</option>
                                <option value="Musnah">Musnah</option>
                                <option value="Permanen">Permanen</option>
                                <option value="Dinilai Kembali">Dinilai Kembali</option>
                                <option value="Masuk Berkas Perseorangan">Masuk Berkas Perseorangan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Perihal Surat Masuk</label>
                            <textarea class="form-control input-group-lg" style="height:124px;" name="perihal" placeholder="Tulis Perihal Surat Masuk..."></textarea>
                        </div>
                        
                    </div>
                    <div class="col-md">

                        <div class="form-group">
                            <label>Pengirim</label>
                            <input type="text" name="asal_surat" class="form-control" placeholder="Pengirim Surat" required="">
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Sekunder</label>
                            <select class="form-control" id="sm_secondary" name="id_sekunder">
                                <option value="">--- PILIH KLASIFIKASI SEKUNDER ---</option>
                                <!-- <option value="Asli">Pengajuan</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tingkat Perkembangan</label>
                            <select class="form-control" name="tingkat_perkembangan">
                                <option value="">--- Pilih Perkembangan ---</option>
                                <option value="Asli">Asli</option>
                                <option value="Tembusan">Tembusan</option>
                                <option value="Salinan">Salinan</option>
                                <option value="Petika">Petikan</option>
                                <option value="Pertinggalan">Pertinggalan</option>
                                <option value="Copy">Copy</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jadwal Retensi Inaktif</label>
                            <select class="form-control" name="jadwal_retensi_inaktif">
                                <option value="">--- Pilih Jadwal Retensi ---</option>
                                <option value="1 Tahun">1 Tahun</option>
                                <option value="2 Tahun">2 Tahun</option>
                                <option value="3 Tahun">3 Tahun</option>
                                <option value="4 Tahun">4 Tahun</option>
                                <option value="5 Tahun">5 Tahun</option>
                                <option value="6 Tahun">6 Tahun</option>
                                <option value="7 Tahun">7 Tahun</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kategori Surat</label>
                            <select class="form-control" name="kategori_surat">
                                <option value="">--- Pilih Kategori Surat ---</option>
                                <option value="Arsip Vital">Arsip Vital</option>
                                <option value="Arsip Terbuka">Arsip Terbuka</option>
                                <option value="Rahasia">Rahasia</option>
                                <option value="erbatas">Terbatas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lokasi Berkas</label>
                            <input type="text" name="lokasi_berkas" class="form-control" placeholder="Lokasi Berkas" required="">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Diterima:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" name="tanggal_diterima" value="<?php echo date('Y-m-d') ?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Dokumen surat</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="berkas_suratmasuk" class="custom-file-input">
                                    <label class="custom-file-label">Pilih dokumen</label>
                                </div>
                            </div>
                            <small class="text-danger">Format document surat doc, docx, dan pdf</small>
                        </div>
                        <!-- <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                            </div> -->
                    </div>
                </div>
                <!-- /.card-body -->
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- surat keluar -->
<div class="modal fade" id="addsk">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Surat Keluar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                <form role="form" action="<?= base_url('admin/tambahsk') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body row">
                        <div class="col-md">
                            <div class="form-group">
                                <label>Nomor Surat</label>
                                <input type="text" name="no_suratkeluar" class="form-control" placeholder="Masukan Nomor Surat" required="">
                            </div>

                            <!-- <div class="form-group">
                                    <label>No. Surat</label>
                                    <?php $today = date('d,m,Y');
                                    $pecah = explode(',', $today);
                                    $bulan = $pecah[1];
                                    $tahun = $pecah[2]; ?>
                                    <input type="text" name="no_suratkeluar" class="form-control" value=".../INSTANSI/H-<?php echo $bulan; ?>/<?php echo $tahun; ?>">
                                </div> -->
                            <!-- <div class="form-group">
                                    <label>Judul Surat Keluar</label>
                                    <input type="text" name="judul_suratkeluar" class="form-control" placeholder="Judul Surat">
                                </div> -->

                            <div class="form-group">
                                <label>Klasifikasi Primer</label>
                                <select class="form-control" name="id_indeks" id="sk_primary">
                                    <option value="">---- PILIH KLASIFIKASI ----</option>
                                    <?php foreach ($indeks as $i) : ?>
                                        <option value="<?php echo $i->id_indeks; ?>" id_primer="<?php echo $i->id_indeks; ?>" judul_indeks="<?php echo ($i->judul_indeks); ?>">
                                            <?php echo strtoupper($i->judul_indeks); ?>
                                        </option>
                                    <?php endforeach; ?>
                                    <input type="hidden" name="judul_indeks" id="judul_indekssk">
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Klasifikasi Tersier</label>
                                <select class="form-control" name="id_tersier" id="sk_tersier">
                                    <option value="">--- PILIH KLASIFIKASI TERSIER ---</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jenis Retensi</label>
                                <select class="form-control" name="jenis_retensi_sk">
                                    <option value="">--- Pilih Jenis Retensi ---</option>
                                    <option value="Musnah">Musnah</option>
                                    <option value="Permanen">Permanen</option>
                                    <option value="Dinilai Kembali">Dinilai Kembali</option>
                                    <option value="Masuk Berkas Perseorangan">Masuk Berkas Perseorangan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori Surat</label>
                                <select class="form-control" name="kategori_surat_sk">
                                    <option value=>--- Pilih Kategori Surat ---</option>
                                    <option value="Arsip Vital">Arsip Vital</option>
                                    <option value="Arsip Terbuka">Arsip Terbuka</option>
                                    <option value="Rahasia">Rahasia</option>
                                    <option value="Terbatas">Terbatas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Keluar:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" name="tanggal_keluar" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask value="<?php echo date('Y-m-d') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Perihal Surat Keluar</label>
                                <textarea class="form-control input-group-lg" style="height:124px;" name="perihal" placeholder="Tulis Perihal Surat Keluar..."></textarea>
                            </div>

                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label>Penerima</label>
                                <input type="text" name="tujuan" class="form-control" placeholder="Masukan nama Penerima">
                            </div>
                            <div class="form-group">
                                <label>Klasifikasi Sekunder</label>
                                <select class="form-control" id="sk_secondary" name="id_sekunder">
                                    <option value="">--- PILIH KLASIFIKASI SEKUNDER ---</option>
                                    <!-- <option value="Asli">Pengajuan</option> -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tingkat Perkembangan</label>
                                <select class="form-control" name="tingkat_perkembangan_sk">
                                    <option value="">--- Pilih Perkembangan ---</option>
                                    <option value="Asli">Asli</option>
                                    <option value="Tembusan">Tembusan</option>
                                    <option value="Salinan">Salinan</option>
                                    <option value="Petika">Petikan</option>
                                    <option value="Pertinggalan">Pertinggalan</option>
                                    <option value="Copy">Copy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jadwal Retensi Aktif</label>
                                <select class="form-control" name="jadwal_retensi_aktif_sk">
                                    <option value="">--- Pilih Jadwal Retensi ---</option>
                                    <option value="1 Tahun">1 Tahun</option>
                                    <option value="2 Tahun">2 Tahun</option>
                                    <option value="3 Tahun">3 Tahun</option>
                                    <option value="4 Tahun">4 Tahun</option>
                                    <option value="5 Tahun">5 Tahun</option>
                                    <option value="6 Tahun">6 Tahun</option>
                                    <option value="7 Tahun">7 Tahun</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jadwal Retensi Inaktif</label>
                                <select class="form-control" name="jadwal_retensi_inaktif_sk">
                                    <option value="">--- Pilih Jadwal Retensi ---</option>
                                    <option value="1 Tahun">1 Tahun</option>
                                    <option value="2 Tahun">2 Tahun</option>
                                    <option value="3 Tahun">3 Tahun</option>
                                    <option value="4 Tahun">4 Tahun</option>
                                    <option value="5 Tahun">5 Tahun</option>
                                    <option value="6 Tahun">6 Tahun</option>
                                    <option value="7 Tahun">7 Tahun</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select class="form-control" name="keterangan">
                                    <option value="">--- Pilih Keterangan ---</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Berkas</label>
                                <input type="text" name="lokasi_berkas" class="form-control" placeholder="Masukan lokasi berkas">
                            </div>
                            
                            <div class="form-group">
                                <label>Dokumen surat</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="berkas_suratkeluar" class="custom-file-input">
                                        <label class="custom-file-label">Pilih dokumen</label>
                                    </div>
                                </div>
                                <small class="text-danger">Dokumen surat, bisa berupa doc, docx, pdf.</small>
                            </div>
                        </div>

                        
                    </div>

                    <!-- /.card-body -->
                    </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="tambahdisp">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form" action="<?= base_url('admin/tambahdisposisi') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="id_suratmasuk" id="id_sm" value="<?php if (isset($id_suratmasuk)) {
                                                                                                echo $id_suratmasuk;
                                                                                            } ?>">
                                <div class="form-group">
                                    <label>Pengisi disposisi</label>
                                    <select name="pengisi" id="pengisi" class="form-control" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                                        <option value="Staff Tata Usaha">Staff Tata Usaha</option>
                                        <option value="Wakil Kurikulum">Wakil Kurikulum</option>
                                    </select>
                                    <small><span class="text-danger text-small" id="alertpengisi"></span></small>
                                </div>
                                <div class="form-group">
                                    <label>Diteruskan kepada</label>
                                    <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="Tujuan" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Instruksi/Informasi</label>
                                    <input type="text" name="instruksi" class="form-control" placeholder="Instruksi/Informasi diisi terlebih dahulu oleh pengisi disposisi" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <textarea name="catatan" class="form-control" placeholder="Catatan"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="editdisp">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="ajaxeditdisp"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="hapusdisp">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lanjutkan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol 'hapus' untuk menghapus disposisi ini </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a href="" class="btn btn-danger" id="hps-id-disposisi">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="cetakdisp">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div id="modalcetakdisp" class="modal-body">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" id="btncetakdisp" name="tambah" class="btn btn-success">Cetak</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="hapussm">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lanjutkan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol 'hapus' untuk menghapus surat <span id="hps-no-suratmasuk"></span> ? </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" id="hps-id-suratmasuk">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- <div class="modal fade" id="ubahsk">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="dataubahsk"></div>
        </div>
        /.modal-content
    </div>
    /.modal-dialog
</div> -->

<div class="modal fade" id="hapussk">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Surat Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin hapus surat keluar? </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a href="" class="btn btn-danger" id="hps-id-suratkeluar">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Tambah indeks -->
<div class="modal fade" id="addindeks">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                <form role="form" action="<?= base_url('admin/tambahindex') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Pilih Jenis Klasifikasi</label>
                        <select class="form-control" id="klasifikasi">
                            <option value="">--- Pilih Klasifikasi ---</option>
                            <option value="1">Primer</option>
                            <option value="2">Sekunder</option>
                            <option value="3">Tersier</option>
                        </select>
                    </div>
                    <div class="form-group" id="primary" style="display: none">
                        <label>Pilih Klasifikasi Indek Primer</label>
                        <select class="form-control" name="primary" id="id_primary">
                            <option value="">Pilih</option>
                            <?php foreach ($indeks as $i) : ?>
                                <option value="<?php echo $i->id_indeks; ?>">
                                    <?php echo strtoupper($i->judul_indeks); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group" id="secondary" style="display: none">
                        <label>Pilih Klasifikasi Indek Sekunder</label>
                        <select class="form-control" name="secondary" id="id_sekunder">
                            <option value="">--- Pilih Klasifikasi Sekunder ---</option>
                        </select>
                    </div>
                    <div class="form-group" id="name" style="display: none">
                        <label for="">Kode-Nama Indeks</label>
                        <div class="input-group">
                            <input type="text" name="judul_index" class="form-control" placeholder="Tulis Kode-Nama Indeks..." required>
                        </div>
                    </div>

                    </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="ubahindeks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="dataubahindeks"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="ubahindekssekunder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="dataubahindekssekunder"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="ubahindekstersier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="dataubahindekstersier"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="hapusindeks">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lanjutkan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol 'hapus' untuk menghapus indeks <span id="hps-judul-indeks"></span> ? </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" id="hps-id-indeks">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="hapusindekssekunder">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lanjutkan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol 'hapus' untuk menghapus indeks <span id="hps-judul-indekssekunder"></span> ? </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" id="hps-id-indekssekunder">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="hapusindekstersier">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lanjutkan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol 'hapus' untuk menghapus indeks <span id="hps-judul-indekstersier"></span> ? </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" id="hps-id-indekstersier">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- indeks -->
<div class="modal fade" id="adduser">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                <form role="form" action="<?= base_url('admin/tambahuser') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama lengkap</label>
                        <div class="input-group">
                            <input type="text" name="nama_lengkap" autocapitalize="true" class="form-control" placeholder="Nama lengkap..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <div class="input-group">
                            <input type="text" name="username" class="form-control" placeholder="Username..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <div class="input-group">
                            <input type="password" id="password" autocomplete="off" name="password" class="form-control" placeholder="Password..." required>
                        </div>
                        <span class="text-danger" id="passwordvalidasi"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi password</label>
                        <div class="input-group">
                            <input type="password" id="password2" autocomplete="off" name="password2" class="form-control" placeholder="Password..." required>
                        </div>
                        <span class="text-danger" id="passwordvalidasi"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Level</label>
                        <select class="form-control" name="level" id="">
                            <option value="2">User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" name="tambah" class="btn btn-primary tambahuser">Tambah</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="hapususer">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lanjutkan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol 'hapus' untuk menghapus user <span id="hps-nama-lengkap"></span> ? </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a href="#" class="btn btn-danger" id="hps-id-user">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="editprofil">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="dataprofil"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="gantipassword">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?php echo base_url('admin/aksigantipass') ?>" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_user" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                    <div class="form-group">
                        <label for="">Password lama</label>
                        <div class="input-group">
                            <input type="password" id="password_lama" name="password_lama" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Password baru</label>
                        <div class="input-group">
                            <input type="password" id="password_baru" name="password_baru" class="form-control" required>
                        </div>
                        <span class="text-danger" id="password_baru_message"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi password baru</label>
                        <div class="input-group">
                            <input type="password" id="password_baru2" name="password_baru2" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" id="btnubahpassword" name="ubah" class="btn btn-primary">Ubah</button>
                    <button type="submit" disabled style="display: none;" name="ubah" class="btn btn-primary btnubahpassword">Ubah</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function() {
        $("#klasifikasi").on('change', function() {
            var klasifikasi = $("#klasifikasi option:selected").attr("value");
            if (klasifikasi === "1") {
                document.getElementById('primary').style.display = 'none';
                document.getElementById('secondary').style.display = 'none';
                document.getElementById('name').style.display = 'block';
            } else if (klasifikasi === "2") {
                document.getElementById('primary').style.display = 'block';
                document.getElementById('secondary').style.display = 'none';
                document.getElementById('name').style.display = 'block';
            } else if (klasifikasi === "3") {
                document.getElementById('primary').style.display = 'block';
                document.getElementById('secondary').style.display = 'block';
                document.getElementById('name').style.display = 'block';
            } else {}
        })
    })
</script>


<script type="text/javascript">
    $("#id_primary").on('change', function() {
        var id = $("#id_primary").val();
        if (id) {
            jQuery.ajax({
                url: "ip_index/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#id_sekunder').append(
                            '<option value="' + value.id_sekunder + '">' + value.judul_sekunder + '</option>'
                        );

                    });
                }
            });
        } else {
            $('#id_sekunder').empty();
        }
        $('#id_sekunder').empty();
    })
</script>

<script type="text/javascript">
    $("#sm_primary").on('change', function() {
        var id = $("#sm_primary  option:selected").attr("id_primer");
        console.log(id);
        if (id) {
            jQuery.ajax({
                url: "ip_index/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#sm_secondary').append(
                            '<option value="' + value.judul_sekunder + '" id_sekunder="' + value.id_sekunder + '">' + value.judul_sekunder + '</option>'
                        );

                    });
                }
            });
        } else {
            $('#sm_secondary')
                .find('option')
                .remove()
                .end()
                .append('<option value="">--- PILIH KLASIFIKASI SEKUNDER ---</option>')
                // .empty();
                .val('')
        }
        $('#sm_secondary')
            .find('option')
            .remove()
            .end()
            .append('<option value="">--- PILIH KLASIFIKASI SEKUNDER ---</option>')
            // .empty();
            .val('')
    })

    $("#sm_secondary").on('change', function() {
        var id = $("#sm_secondary  option:selected").attr('id_sekunder');
        console.log(id);
        if (id) {
            jQuery.ajax({
                url: "ip_index_secondary/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#sm_tersier').append(
                            '<option value="' + value.judul_tersier + '" id_tersier="' + value.judul_tersier + '">' + value.judul_tersier + '</option>'
                        );

                    });
                }
            });
        } else {
            $('#sm_tersier')
                .find('option')
                .remove()
                .end()
                .append('<option value="">--- PILIH KLASIFIKASI TERSIER ---</option>')
                // .empty();
                .val('')
        }
        $('#sm_tersier')
            .find('option')
            .remove()
            .end()
            .append('<option value="">--- PILIH KLASIFIKASI TERSIER ---</option>')
            // .empty();
            .val('')
    })
</script>


<script type="text/javascript">
    $("#sk_primary").on('change', function() {
        var id = $("#sk_primary option:selected").attr("id_primer");
        // console.log(id);
        if (id) {
            jQuery.ajax({
                url: "ip_index/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#sk_secondary').append(
                            '<option value="' + value.judul_sekunder + '" id_sekunder="' + value.id_sekunder + '">' + value.judul_sekunder + '</option>'
                        );

                    });
                }
            });
        } else {
            $('#sk_secondary')
                .find('option')
                .remove()
                .end()
                .append('<option value="">--- PILIH KLASIFIKASI SEKUNDER ---</option>')
                // .empty();
                .val('')
        }
        $('#sk_secondary')
            .find('option')
            .remove()
            .end()
            .append('<option value="">--- PILIH KLASIFIKASI SEKUNDER ---</option>')
            // .empty();
            .val('')
    })

    $("#sk_secondary").on('change', function() {
        var id = $("#sk_secondary  option:selected").attr('id_sekunder');
        console.log(id);
        if (id) {
            jQuery.ajax({
                url: "ip_index_secondary/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#sk_tersier').append(

                            '<option value="' + value.judul_tersier + '" id_tersier="' + value.id_indeks + '">' + value.judul_tersier + '</option>'
                        );
                    });
                }
            });
        } else {
            $('#sk_tersier')
                .find('option')
                .remove()
                .end()
                .append('<option value="">--- PILIH KLASIFIKASI TERSIER ---</option>')
                // .empty();
                .val('')
        }
        $('#sk_tersier')
            .find('option')
            .remove()
            .end()
            .append('<option value="">--- PILIH KLASIFIKASI TERSIER ---</option>')
            // .empty();
            .val('')
    })
</script>

<script>
    $("#sm_primary").on('change', function() {
        var judul_indeks = $("#sm_primary option:selected").attr("judul_indeks");
        $("#judul_indeks").val(judul_indeks);
        // console.log(id);
        
    })
</script>

<script>
    $("#sk_primary").on('change', function() {
        var judul_indekssk = $("#sk_primary option:selected").attr("judul_indeks");
        $("#judul_indekssk").val(judul_indekssk);
        // console.log(id);
    })
</script>
