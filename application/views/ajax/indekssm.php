<thead>
    <tr>
    <th>No.</th>
	<th>Nomor Surat</th>
	<th>Pengirim</th>
	<th>Tanggal Diterima</th>
	<th>Keterangan</th>
	<th>Klasifikasi Primer</th>
	<th>Klasifikasi Skunder</th>
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
    foreach ($suratmasuk as $sm) : ?>
        <tr>
        <td><?= $no++; ?></td>
		<td><?= $sm->no_suratmasuk; ?></td>
		<td><?= $sm->asal_surat; ?></td>
		<td><?php $date = date_create($sm->tanggal_diterima);
		echo date_format($date, 'd/m/Y'); ?></td>
		<td><?= $sm->keterangan; ?></td>
		<td><?= $sm->judul_indeks; ?></td>
		<td><?= $sm->id_sekunder; ?></td>
		<td><?= $sm->id_tersier; ?></td>
        <td><?= $sm->jenis_retensi; ?></td>
		<td><?= $sm->jadwal_retensi_aktif; ?></td>
		<td><?= $sm->jadwal_retensi_inaktif; ?></td>
        <td><?= $sm->tingkat_perkembangan; ?></td>
        <td><?= $sm->kategori_surat; ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>