<thead>
    <tr>
    <th>No.</th>
    <th>Nomor Surat</th>
    <th>Penerima</th>
    <th>Tanggal Dikirim</th>
    <th>Keterangan</th>
    <th>Klasifikasi Primer</th>
    <th>Klasifikasi Sekunder</th>
    <th>Klasifikasi Tersier</th>
    <th>Jenis Retensi</th>
    <th>Jadwal Retensi Aktif</th>
    <th>Jadwal Retensi Inaktif</th>
    <th>Perkembangan</th>
    <th>Kategori</th>
    </tr>
</thead>
<tbody>
    <?php $no = 1;
    foreach ($suratkeluar as $sk) : ?>
        <tr>
        <td><?= $no++; ?></td>
        <td><?= $sk->no_suratkeluar; ?></td>
        <td><?= $sk->tujuan; ?></td>
        <td><?php $date = date_create($sk->tanggal_keluar);
		echo date_format($date, 'd/m/Y'); ?></td>
        <td><?= $sk->keterangan; ?></td>
        <td><?= $sk->judul_indeks; ?></td>
        <td><?= $sk->id_sekunder; ?></td>
        <td><?= $sk->id_tersier; ?></td>
        <td><?= $sk->jenis_retensi_sk; ?></td>
        <td><?= $sk->jadwal_retensi_aktif_sk; ?></td>
        <td><?= $sk->jadwal_retensi_inaktif_sk; ?></td>
        <td><?= $sk->tingkat_perkembangan_sk; ?></td>
        <td><?= $sk->kategori_surat_sk; ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>