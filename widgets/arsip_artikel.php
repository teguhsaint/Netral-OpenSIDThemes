<!-- widget Arsip Artikel -->

<style type="text/css">
	#arsip_artikel .nav > li.active > a {}
	
	#arsip_artikel td { padding-bottom: 2px; }
</style>

<style type="text/css">
	.contenth {
		display: flex;
	}

	.contenth img {
		margin-right: 10px;
		display: block;
	}

	.contenth h3,
	.contenth p {margin: 0;}
</style>
<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title"><a href="<?= site_url("arsip")?>"><i class="fad fa-archive"></i> Arsip Artikel</a></h3>
	</div>
	<div id="arsip_artikel" class="box-body">
		<ul class="nav nav-tabs">
			
			<li class="active"><a data-toggle="tab" href="#populer"><i class="fad fa-star" ></i> Populer</a></li>
			<li ><a data-toggle="tab" href="#terkini">Terkini</a></li>
			<li><a data-toggle="tab" href="#acak">Acak</a></li>
		</ul>
		<div class="tab-content">

			<?php foreach (array('populer' => 'arsip_populer', 'terkini' => 'arsip_terkini', 'acak' => 'arsip_acak') as $jenis => $jenis_arsip) : ?>
				<div id="<?= $jenis ?>" class="tab-pane fade in <?php ($jenis == 'terkini') and print('active') ?>">
					
					<?php foreach ($$jenis_arsip as $arsip): ?>
						
						<div >
							<a href="<?= site_url('artikel/'.buat_slug($arsip))?>">
								
								<div class="float-start mb-3" style="width: 100% !important">


									<?php $image = ($arsip['gambar'] && is_file(LOKASI_FOTO_ARTIKEL."kecil_$arsip[gambar]"))? 
									AmbilFotoArtikel($arsip['gambar'],'kecil') :
									base_url($this->theme_folder.'/'.$this->theme .'/assets/images/placeholder.png');
									?>

									
										<div class="contenth float-start " style="width: 100%; border-bottom:2px dotted #a6a6a6; padding-bottom: 5px;">
											<img src="<?= $image ?>" style="width: 50px; object-fit: cover; border-radius: 50%; height: 50px;">
											<div class="text">

												<font style="font-weight:401;" ><?= $arsip['judul']?></font>
												<p><small><i class="fad fa-calendar"></i> &nbsp;&nbsp;<?= tgl_indo($arsip['tgl_upload']) ?>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fad fa-eye"></i> <?= hit($arsip['hit']) ?></small></p>
											</div>
										</div>

								
								</div>
							</a>
						</div>
						
					<?php endforeach; ?>
					
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
