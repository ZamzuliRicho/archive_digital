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
				<h1 class="h3 mb-4 text-gray-800">Laporan Surat Masuk</h1>
				<div class="card card-success">
					<div class="card-body">
						<?= $this->session->flashdata('message'); ?>
						<div class="row">
							<div class="col-md-4">
								<a href="http://localhost/arsip-digital/exportsm" class="btn btn-success btn-block"> Cetak laporan</a>
							</div>
							<div class="col-md-4">
								<form action="#" method="GET">
									<div class="form-group">
										<div class="input-group">
											<select class="form-control" id="filter-index-sm" name="id_index">
												<option value="">Filter Indeks Primer</option>
												<?php foreach ($indeks as $i) : ?>
													<option value="<?php echo $i->id_indeks ?>"><?php echo $i->judul_indeks; ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-4">
								<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle btn-block" type="button" id="filterTanggal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Filter tanggal
									</button>
									<?php if (isset($_GET['filter-tanggal'])) { ?>
										<a href="<?php echo base_url('admin/laporan_suratmasuk') ?>" class="btn btn-info text-white btn-block"><i class="fas fa-eye" title="Tampilkan semua"></i> Tampilkan semua</a>
									<?php } ?>
									<div class="dropdown-menu lg w-100" aria-labelledby="dropdownMenuButton">
										<form action="<?php echo base_url('admin/laporan_suratmasuk') ?>" method='GET'>
											<div class="form-group mx-3">
												<label for="">start</label>
												<input type="date" class="form-control" id="filter-tanggal-sm-awal" name="tanggal_awal">
											</div>
											<div class="form-group mx-3">
												<label for="">end</label>
												<input type="date" class="form-control" name="tanggal_akhir">
											</div>
											<div class="form-group mx-3">
												<button type="submit" name="filter-tanggal" class="btn btn-primary btn-block"><i class="fas fa-filter"></i> Filter</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="table-responsive">
							<table class="table table-bordered" id="lapsuratmasuk" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nomor Surat</th>
										<th>Pengirim</th>
										<th>Perihal</th>
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
										<th>Lokasi Berkas</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($suratmasuk as $sm) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $sm->no_suratmasuk; ?></td>
											<td><?= $sm->asal_surat; ?></td>
											<td><?= $sm->perihal; ?></td>
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
											<td><?= $sm->lokasi_berkas; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->
		<!-- modal tambah -->
		<!-- Footer -->
		<?php $this->load->view('templates/copyright') ?>
		<!-- End of Footer -->

	</div>
	<!-- End of Content Wrapper -->

</div>