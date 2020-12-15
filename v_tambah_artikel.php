<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title; ?>
			<small>Tulis Artikel Baru</small>
		</h1>
	</section>
	<section class="content">
		<a href="<?= base_url().'dashboard/artikel'; ?>" class="btn btn-sm btn-primary"><i class="fa fa-chevron-left"></i> Kembali</a>
		<br/>
		<br/>

		<form method="post" action="<?= base_url('dashboard/artikel_aksi') ?>" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-9">
				<div class="box box-primary">
					<div class="box-body">
						
						<div class="box-body">
							<div class="form-group">
								<label>Judul</label>
								<input type="text" name="judul" class="form-control" placeholder="Masukan judul artikel.." value="<?= set_value('judul'); ?>">
								<br/>
								<?= form_error('judul'); ?>
							</div>
						</div>

						<div class="box-body">
								<div class="form-group">
									<label>Konten</label>
								<?= form_error('konten'); ?>	
								<br/>
								<textarea class="form-control" id="editor" name="konten">
									<?= set_value('konten'); ?>
								</textarea>
							</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="box box-primary">
				<div class="box-body">
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control" name="kategori">
							<option value="">Pilih Kategori</option>

							<?php foreach ($kategori as $k) : ?>

							<option <?php 
							if (set_value('kategori')==$k->id_kategori) {
								echo "selected='selected'";
							}?> 
							value="<?= $k->id_kategori ?>">
								<?= $k->nama_kategori; ?>
							</option>
							<?php endforeach; ?>	
						</select>
						<br/>
						<?= form_error('kategori'); ?>
				</div>
				<br/>
				<br/>
				<div class="form-group">
					<label>Gambar Sampul</label>
					<input type="file" name="sampul">
					<br/>
					<?php  
					if (isset($gambar_error)) {
						echo "$gambar_error";
					}
					?>
					<?= form_error('sampul'); ?>
				</div>
				<br/>
				<br/>
					<input type="submit" name="status" value="Draft" class="btn btn-warning btn-block">
					<input type="submit" name="status" value="Publish" class="btn btn-success btn-block">
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>