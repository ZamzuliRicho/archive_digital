<?php
foreach ($indeks_tersier as $i) :
?>
    <form action="<?php echo base_url('admin/aksiubahindekstersier') ?>" method="post">
        <div class="modal-header">
            <h4 class="modal-title">Ubah Indeks Tersier</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="hidden" id="id_tersier" name="id_tersier" value="<?= $i->id_tersier ?>">
            <div class="form-group">
                <label for="">Nama Indeks tersier</label>
                <div class="input-group">
                    <input type="text" id="judul_tersier" name="judul_tersier" value="<?= $i->judul_tersier ?>" class="form-control" required>
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