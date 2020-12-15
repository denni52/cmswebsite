<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title; ?>
			<small>Manajemen Artikel</small>
		</h1>
	</section>
	<section class="content">
		<div class="col-lg-12">
			<?= $this->session->flashdata('message'); ?>
        		
			<a href="<?= base_url().'dashboard/tambah_artikel' ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>   Artikel Baru</a>
			<br/>
			<br/>
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Artikel</h3>
				</div>
				<div class="box-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th>Tanggal</th>
								<th>Artikel</th>
								<th>Author</th>
								<th>Kategori</th>
								<th width="10%" class="text-center">Gambar</th>
								<th class="text-center">Status</th>
								<th colspan="3" class="text-center">OPSI</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$no = 1;
							foreach ($artikel as $a) :
						?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= date('d/m/Y H:i', strtotime($a->tanggal_artikel)); ?></td>
							<td>
								<?= $a->judul_artikel; ?>
							<br/>
							<small class="text-muted">
								<?= base_url()."".$a->slug_artikel; ?>
							</small>
							</td>
							<td><?= $user['name']; ?></td>
							<td><?= $a->nama_kategori; ?></td>
							<td>
								<img src="<?= base_url().'/gambar/artikel/'.$a->sampul_artikel; ?>" class="img-responsive" width="100px">
							</td>
							<td class="text-center">
								<?php 

								if ($a->status_artikel=="publish") {
								echo "<span class='label label-success'>Publish</span>";
								}else{
								echo "<span class='label label-danger'>Draft</span>";
								}
								?>
							</td>
							<td>
								<a href="<?= base_url().$a->slug_artikel; ?>" class="btn btn-sm btn-success" target="_blank"><i class="fa fa-eye"></i></a>
							</td>
								<?php 

								if ($this->session->userdata('role_id') == 2 ){
								if ($this->session->userdata('id') == $a->author_artikel) {
					
								?>
							<td>	
								<a href="<?= base_url().'dashboard/edit_artikel/'.$a->id_artikel; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
							</td>
							<td>
								<a href="<?= base_url().'dashboard/hapus_artikel/'.$a->id_artikel; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin menghapus ?')"><i class="fa fa-trash"></i></a>
							</td>
								<?php 
								}
								}else{
								?>
							<td>	
								<a href="<?= base_url().'dashboard/edit_artikel/'.$a->id_artikel; ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
							</td>
							<td>	
								<a href="<?= base_url().'dashboard/hapus_artikel/'.$a->id_artikel; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" onclick="return confirm('Apakah yakin ingin menghapus ?')"></i></a>	
								<?php } ?>
							</td>
						</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>		
	</section>
</div>