<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title; ?>
			<small>Manajemen User</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-12">
				<?= $this->session->flashdata('message'); ?>
				<a href="<?= base_url().'auth/registrasi'; ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>  Pengguna Baru</a>

				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Pengguna</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="1%">No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Image</th>
									<th>Level</th>
									<th>Status</th>
									<th>Date Created</th>
									<th width="8%" colspan="2" class="text-center">OPSI</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no = 1;
								foreach($datauser as $du): ?> 
									
									<tr>
									<td><?= $no++; ?></td>
									<td><?= $du['name']; ?></td>
								    <td><?= $du['email']; ?></td>
								    <td><img src="<?= base_url('assets/img/profile/') . $du['image']; ?>" class="img-responsive img-thumbnail" width="50px"></td>
								    <td><?php if ($du['role_id'] == 1) {
								    	echo "Admin";
								    }else{ 
								    	echo "Penulis";
								    	}
								    ?>	
								    </td>
								    <td><?php if ($du['is_active'] == 1) {
								    	echo "Active";
								    }else{ 
								    	echo "Non Active";
								    	}
								    ?>	
								    </td>
								    <td><?= date('d F Y', $du['date_created']); ?></td>
								    <td>
										<a href="<?= base_url().'dashboard/edit_user/'.$du['user_id']; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
									</td>
									<td>
										<a href="<?= base_url().'dashboard/hapus_user/'.$du['user_id']; ?>" class="btn btn-danger btn-sm" onclick="confirm('Apakah anda yakin ingin menghapus')"> <i class="fa fa-trash"></i> </a>
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