<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style type="text/css">
	.populars {
  flex: 2 2 auto;

  
 }
 .vignette-shadow-ex {
 	display: block;
  box-shadow: inset 24px -63px 55px #26272899;
}
.vignette-shadow-ex:hover{
	transition-duration: 0.5s;
	box-shadow:inset 24px -63px 55px #9babbb99;
}
@media (max-width: 768px){
	.populars {
	flex: 2 2 auto;
	width: 41%;
	margin-right: 3px;
	margin-left: 3px;
}

.text{
	left: 0px!important;
	text-align: center;
}
}

</style>

<?php foreach (array('arsip_populer') as $jenis => $jenis_arsip) { 

	foreach ($$jenis_arsip as $arsip){


		$images = ($arsip['gambar'] && is_file(LOKASI_FOTO_ARTIKEL."kecil_$arsip[gambar]"))? 
		AmbilFotoArtikel($arsip['gambar'],'kecil') :
		base_url($this->theme_folder.'/'.$this->theme .'/assets/images/placeholder.jpg');

		$is = $is+1;
		
		if ($is < 4) {?>

<div class="populars" style="height: 137px">
				<a class="vignette-shadow-ex" href="<?= site_url('artikel/'.buat_slug($arsip))?>">
				<img   src="<?= $images ?>" alt="<?= $headline['judul'] ?>" style="

				width: 100%;
				height: 126px;
				object-fit: cover;
				z-index: -1;
				position: relative;

				">

				<div class="text" style="

				position: relative;
				top: -55px;
				z-index: 7;
				color: #fff;
				left: 15px;

				"></a>
				<font style="font-weight:401;" ><?= $arsip['judul']?></font>
				<p><small><i class="fad fa-calendar"></i> &nbsp;&nbsp;<?= tgl_indo($arsip['tgl_upload']) ?>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fad fa-eye"></i> <?= hit($arsip['hit']) ?></small></p>
			</div>

		</div>

	<?php } } } ?>


