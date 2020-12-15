<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title; ?>
			<small>Manajemen Halaman</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-12">
				<?= $this->session->flashdata('message'); ?>
				<a href="<?= base_url('dashboard/tambah_pages') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Halaman baru</a>

				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title"><?= $title; ?></h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="1%">NO</th>
									<th>Judul Halaman</th>
									<th>URL Slug</th>
									<th width="15%" colspan="3" class="text-center">OPSI</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no = 1;
								foreach($halaman as $h) : ?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $h['judul_halaman']; ?></td>
										<td><?= base_url()."page/".$h['slug_halaman']; ?></td>
										<td>
											<a target="_blank" href="<?= base_url()."page/".$h['slug_halaman']; ?>" class="btn btn-success btn-sm"> <i class="fa fa-eye"></i> </a>
											</td>
											<td>
											<a href="<?= base_url().'dashboard/edit_pages/'.$h['id_halaman']; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
											</td>
											<td>
											<a href="<?= base_url().'dashboard/hapus_pages/'.$h['id_halaman']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> </a>
											</td>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						

					</div>
				</div>

			</div>
		</div>

	</section>

</div>

