<?php
foreach ($indeks as $i) :
?>
    <form action="<?php echo base_url('admin/aksiubahindeks') ?>" method="post">
        <div class="modal-header">
            <h4 class="modal-title">Ubah Indeks Primer</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="hidden" id="id_indeks" name="id_indeks" value="<?= $i->id_indeks ?>">
            <div class="form-group">
                <label for="">Nama Indeks Primer</label>
                <div class="input-group">
                    <input type="text" id="judul_indeks" name="judul_indeks" value="<?= $i->judul_indeks ?>" class="form-control" required>
                </div>
            </div>
            
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
        </div>
    </form>
<?php
endforeach;
?>