<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title; ?>
			<small>Manajemen Halaman</small>
		</h1>
	</section>

	<section class="content">

		<a href="<?= base_url().'dashboard/pages'; ?>" class="btn btn-sm btn-primary"><i class="fa fa-chevron-left"></i> Kembali</a>

		<br/>
		<br/>
		<?php foreach ($halaman as $h) : ?>
		<form method="post" action="<?= base_url('dashboard/update_pages'); ?>">
			<div class="row">
				<div class="col-lg-12">

					<div class="box box-primary">
						<div class="box-body">


							<div class="box-body">
								<div class="form-group">
									<label>Judul Halaman</label>

									<input type="hidden" name="id_halaman" value="<?= $h['id_halaman']; ?>">
									<input type="text" name="judul" class="form-control" placeholder="Masukkan judul halaman.." value="<?= $h['judul_halaman'];?>">
									<?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>

							<div class="box-body">
								<div class="form-group">
									<label>Konten Halaman</label>
									<br/>
									<textarea class="form-control" id="editor" name="konten"> <?= $h['konten_halaman']; ?> 
									</textarea>
									<?= form_error('konten', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>

							<input type="submit" value="Publish" class="btn btn-success btn-block">

						</div>
					</div>

				</div>
				
			</div>
		</form>
	<?php endforeach; ?>
	</section>

</div>