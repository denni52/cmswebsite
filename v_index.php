    
    <div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title; ?>
			<small>Control panel</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-12">
				
				<div class="box box-primary">
					
					<div class="box-body">
						<h2 class="text-center">Selamat Datang ! <b> <?= $user['name']; ?> </b></h2>

						
					</div>
				</div>

			</div>

			<div class="col-lg-6 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo $jumlah_artikel ?></h3>

						<p>Jumlah Artikel</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-list"></i>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo $jumlah_halaman ?></h3>

						<p>Jumlah Halaman/Page</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-document"></i>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6 col-xs-6">
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo $jumlah_kategori ?></h3>

						<p>Jumlah Kategori</p>
					</div>
					<div class="icon">
						<i class="ion ion-pie-graph"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo $jumlah_pengguna ?></h3>

						<p>Jumlah Pengguna</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
      

      