<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title; ?>
			<small>Manajemen User</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-6">
				<a href="<?= base_url().'dashboard/user'; ?>" class="btn btn-sm btn-primary"><i class="fa fa-chevron-left"></i> Kembali</a>
				
				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Edit Level & Status User </h3>
					</div>
					<div class="box-body">
						<?= $this->session->flashdata('message'); ?>

						<?php foreach ($get_user as $gu) : ?>

						
						<form method="post" action="<?= base_url('dashboard/update_user') ?>">
							<div class="box-body">
								<div class="form-group">
									<label>Nama</label>
									<input type="hidden" name='user_id' value="<?= $gu['user_id']; ?>">
									<input type="text" name="nama" class="form-control" value="<?= $gu['name']; ?>" readonly >
									<?= form_error('nama'); ?>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Masukkan email pengguna .." value="<?= $gu['email']; ?>" readonly >
									<?= form_error('email'); ?>
								</div>
								
								
								<div class="form-group">
									<label>Level</label>
									<select class="form-control" name="level">
										<option value="">- Pilih Level -</option>
										<option <?php 
										if ($gu['role_id'] == 1 ) {
											echo "selected='selected'";
										} ?> value="1">Admin</option>
										<option <?php if ($gu['role_id'] == 2) {
											echo "selected='selected'";
										} ?> value="2">Penulis</option>
									</select>
									<?= form_error('level'); ?>
								</div>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option value="">- Pilih Status -</option>
										<option <?php if ($gu['is_active'] == 1) {
											echo "selected='selected'";
										} ?> value="1">Aktif</option>
										<option <?php 
										if ($gu['is_active'] == 0) {
											echo "selected='selected'";
										} ?>  value="0">Non-Aktif</option>
									</select>
									<?= form_error('status'); ?>
								</div>
								

							<div class="box-footer">
								<input type="submit" class="btn btn-success form-control" value="Simpan">
							</div>
						</form>
					<?php endforeach; ?>
					</div>
				</div>

			</div>
		</div>

	</section>

</div>