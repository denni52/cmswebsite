<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Edit Kategori Artikel
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-lg-5">
				
				<br/>
				<br/>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title"><?= $title; ?></h3>
					</div>
					<div class="box-body">
						<?= $this->session->flashdata('message'); ?>
						<?php foreach ($kategori as $k) :?>
						<form method="post" action="<?= base_url('dashboard/update_kategori'); ?>">
						<div class="box-body">
							<div class="form-group">
								<label>Nama Kategori</label>
								<input type="hidden" name="id_kategori" value="<?= $k['id_kategori']; ?>">
								<input type="text" name="kategori" class="form-control" placeholder="Masukan nama kategori.." value="<?= $k['nama_kategori'];?>">

								<?= form_error('kategori'); ?>
							</div>
						</div>	
							<div class="box-footer">
								<a href="<?= base_url().'dashboard/kategori'; ?>" class="btn btn-sm btn-primary pull-left"><i class="fa fa-chevron-left"></i> Kembali</a>

								<input type="submit" class="btn btn-sm btn-success pull-right" value="Update">

								
							</div>
						</form>	
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>