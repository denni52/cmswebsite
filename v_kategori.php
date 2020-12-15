<div class="content-wrapper">
	<section class="content-header">
		<h1><?= $title ?>
		<small>Manajemen Kategori</small>
		</h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-lg-9">
				<?= form_error('kategori', '<div class="alert alert-danger text-center" role="alert">','</div>'); ?>
				<?= $this->session->flashdata('message'); ?>
        		<a href="" data-toggle="modal" data-target="#modal-kategori" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Kategori</a>
				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Kategori</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="1%">No</th>
									<th>Kategori</th>
									<th>Slug</th>
									<th width="12%" colspan="2" class="text-center">OPSI</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($kategori as $k ) : ?>
							<tr>
								<td><?= $no++ ; ?></td>
								<td><?= $k['nama_kategori']; ?></td>
								<td><?= $k['slug_kategori']; ?></td>
								
								<td>
									<a href="<?= base_url().'dashboard/edit_kategori/'.$k['id_kategori']; ?>"  class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
								</td>
								<td>
									<a href="<?= base_url().'dashboard/hapus_kategori/'.$k['id_kategori']; ?>" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin ingin menghapus ?')"><i class="fa fa-trash"></i></a>
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

<div class="modal fade" id="modal-kategori">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kategori</h4>
              </div>
              <form method="post" action="<?= base_url('dashboard/kategori') ?>">
              	<div class="modal-body">

		     <div class="form-group">
		    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan nama kategori ..">
		  	</div>

		      </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>	
              </form>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

