<?php
foreach ($indeks_sekunder as $i) :
?>
    <form action="<?php echo base_url('admin/aksiubahindekssekunder') ?>" method="post">
        <div class="modal-header">
            <h4 class="modal-title">Ubah Indeks Sekunder</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="hidden" id="id_sekunder" name="id_sekunder" value="<?= $i->id_sekunder ?>">
            <div class="form-group">
                <label for="">Nama Indeks Sekunder</label>
                <div class="input-group">
                    <input type="text" id="judul_sekunder" name="judul_sekunder" value="<?= $i->judul_sekunder ?>" class="form-control" required>
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