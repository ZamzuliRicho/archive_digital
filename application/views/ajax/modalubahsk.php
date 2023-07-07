<div class="modal-content">
    <form role="form" action="<?= base_url('admin/aksiubahsk/') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-header">
            <h4 class="modal-title">Ubah Data Surat keluar</h4>
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
                            <input type="text" name="no_suratkeluar" class="form-control" value="<?= $sk->no_suratkeluar ?>">
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Primer</label>
                                <select class="form-control" name="id_indeks" id="sk_primary" >
                                <option value="<?= $sk->id_indeks ?>">
                                    <?php echo $sk->judul_indeks ?>
                                </option>
                                <option value="" class="text-center text-gray-500">---- PILIH KLASIFIKASI ----</option>
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
                                <option value="<?= $sk->id_tersier ?>">
                                    <?php echo $sk->id_tersier ?>
                                </option>
                                <option value="" class="text-center text-gray-500">--- PILIH KLASIFIKASI TERSIER ---</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Retensi</label>
                            <select class="form-control" name="jenis_retensi_sk">
                                <option id="jenis_retensi_sk" value="<?= $sk->jenis_retensi_sk ?>">
                                    <?php echo $sk->jenis_retensi_sk ?>
                                </option>
                                <option value="" class="text-center text-gray-500">Pilih Jenis Retensi</option>
                                <option value="Musnah">Musnah</option>
                                <option value="Permanen">Permanen</option>
                                <option value="Dinilai Kembali">Dinilai Kembali</option>
                                <option value="Masuk Berkas Perseorangan">Masuk Berkas Perseorangan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kategori Surat</label>
                            <select class="form-control" name="kategori_surat_sk">
                                <option id="kategori_surat_sk" value="<?= $sk->kategori_surat_sk ?>">
                                    <?php echo $sk->kategori_surat_sk ?>
                                </option>
                                <option value="" class="text-center text-gray-500">Pilih Kategori Surat</option>
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
                                <input type="date" name="tanggal_keluar" class="form-control" value="<?= $sk->tanggal_keluar ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask value="<?php echo date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="form-group">
                                <label>Perihal Surat Keluar</label>
                                <textarea class="form-control input-group-lg" style="height:124px;" name="perihal"><?= $sk->perihal ?></textarea>
                        </div>

                    </div>

                    <div class="col-md">
                        <div class="form-group">
                            <label>Penerima</label>
                            <input type="text" name="tujuan" class="form-control" value="<?= $sk->tujuan ?>">
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Sekunder</label>
                                <select class="form-control" id="sk_secondary" name="id_sekunder">
                                <option value="<?= $sk->id_sekunder ?>">
                                    <?php echo $sk->id_sekunder ?>
                                </option>
                                <option value="" class="text-center text-gray-500">--- PILIH KLASIFIKASI SEKUNDER ---</option>
                                
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tingkat Perkembangan</label>
                            <select class="form-control" name="tingkat_perkembangan_sk">
                                <option id="tingkat_perkembangan_sk" value="<?= $sk->tingkat_perkembangan_sk ?>">
                                    <?php echo $sk->tingkat_perkembangan_sk ?>
                                </option>
                                <option value="" class="text-center text-gray-500">Pilih Tingkat Perkembangan</option>>
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
                                <option id="jadwal_retensi_aktif_sk" value="<?= $sk->jadwal_retensi_aktif_sk ?>">
                                    <?php echo $sk->jadwal_retensi_aktif_sk ?>
                                </option>
                                <option value="" class="text-center text-gray-500">Pilih Jadwal Retensi</option>
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
                                <option id="jadwal_retensi_inaktif_sk" value="<?= $sk->jadwal_retensi_inaktif_sk ?>">
                                    <?php echo $sk->jadwal_retensi_aktif_sk ?>
                                </option>
                                <option value="" class="text-center text-gray-500">Pilih Jadwal Retensi</option>
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
                                <option id="keterangan" value="<?= $sk->keterangan ?>">
                                    <?php echo $sk->keterangan ?>
                                </option>
                                <option value="" class="text-center text-gray-500">Pilih Keterangan</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak">Rusak</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lokasi Berkas</label>
                            <input type="text" name="lokasi_berkas" class="form-control" placeholder="<?= $sk->lokasi_berkas ?>" value="<?= $sk->lokasi_berkas ?>" required="">
                        </div>
                        
                        <div class="form-group">
                            <label>Dokumen surat</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="berkas_suratkeluar" class="custom-file-input">
                                    <label class="custom-file-label"><?= $sk->berkas_suratkeluar ?></label>
                                </div>
                            </div>
                            <small class="text-danger">Dokumen surat, bisa berupa doc, docx, pdf.</small>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
        </div>
    </form>
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
    $("#sk_primary").on('change', function() {
        var judul_indekssk = $("#sk_primary option:selected").attr("judul_indeks");
        $("#judul_indekssk").val(judul_indekssk);
        // console.log(id);
    })
</script>