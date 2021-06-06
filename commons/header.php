
<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
		<div id="divtop"></div>
	<div class="container-fluid hg bg-light">
		<div  class="row hg align-items-center" >

<div class="col-sm-6" >
<div class="contenth float-start " style="padding-left: 16px;">
  	<img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="header-brand__logo img-fluid" style="width: inline-block" >
  <div class="text">
    <h3>Sistem Informasi <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></h3>
    <p class="subtitleh"><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> <?= ucwords($desa['nama_kecamatan']) ?>, <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?> <?= ucwords($desa['nama_kabupaten']) ?>, Prov. <?= ucwords($desa['nama_propinsi']) ?></p>
  </div>
</div>
</div>

		
			<div class="col-sm-6" >

				
					<div style="padding-right: 10px;" class="float-end hiddenmobile">
					<ul class="social-media">
					<?php foreach($sosmed as $data) : ?>
					<?php if(!empty($data['link'])) : ?>
					<?php $brand = strtolower(str_replace(' ', '-', $data['nama'])) ?>
					<li class="social-media__item social-media--<?= $brand ?>" style="width: 118px;padding-left: 9px;">
						<a href="<?= $data['link'] ?>" class="social-media__link" style=" justify-content: normal;"><i class="fab fa-<?= $brand == 'youtube' ? 'youtube-play' : $brand ?>"></i>&nbsp;&nbsp;<?= $brand ?></a>
					</li>

					<?php endif ?>
					<?php endforeach ?>
					</ul>
					</div>
				
			</div>
		</div>
	</div>
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
<header class="header">
	<div class="header__group gradcolor" style="box-shadow: 0 10px 10px #0000003d">

		<button class="button button--menu"><i class="fa fa-bars"></i> <span></span></button>
	<div class="d-flex justify-content-end hiddendesktop" style="width: 82%" >

		<ul class="social-media">

					<?php foreach($sosmed as $data) : ?>
					<?php if(!empty($data['link'])) : ?>
					<?php $brand = strtolower(str_replace(' ', '-', $data['nama'])) ?>
					<li class="social-media__item social-media--<?= $brand ?>" style="color: #fff; border:2px solid;">
						<a href="<?= $data['link'] ?>" class="social-media__link" ><i class="fab fa-<?= $brand == 'youtube' ? 'youtube-play' : $brand ?>"></i></a>
					</li>
					<?php endif ?>
					<?php endforeach ?>
		</ul>

	</div>
	</div>
	<?php $this->load->view($folder_themes .'/commons/nav') ?>

</header>