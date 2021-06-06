<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<nav class="navbar navbar-expand-md " style="z-index: 9999">

<!--  	<a href="https://www.natairaya.desa.id/" class="logo hiddenmobile">
		<img src="<?= gambar_desa($desa['logo']) ?>">

		<span><b class="text-hide-xs">Sistem Informasi <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></b><br>
			<span class="small"><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> <?= ucwords($desa['nama_kecamatan']) ?></span> <span class="small text-hide-xs"><?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?> <?= ucwords($desa['nama_kabupaten']) ?>, Prov. <?= ucwords($desa['nama_propinsi']) ?></span>
		</span>
	</a> -->
	<div class="container">

		<button class="navbar-toggler" type="button"  id="target_samping" data-bs-target="#target_samping" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:0px solid; height: 40px;">
			<span class=" fal fa-bars text-dark"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">

			<ul class="navbar-nav  mb-2 mb-lg-0" >

				<li class="nav-item" >
					<a href="<?= site_url('first') ?>" class="nav-link text-dark"  style="font-weight: 500">Beranda</a>
				</li>

				<?php foreach($menu_atas as $menu) : ?>
					<li class="nav-item <?php count(menu['submenu'])?>">
						<?php if(count($menu['submenu']) < 1) : ?>

							<li class="nav-item ">
								<a class="nav-link text-dark" href="<?= $menu['link'] ?>" >
									<?= $menu['nama'] ?>
								</a>
							</li>
						<?php endif ?>

						<?php if(count($menu['submenu']) > 0) : ?>
							<li class="nav-item dropdown text-dark">
								<a  class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="font-weight: 500"><?= $menu['nama'] ?>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

								<?php foreach($menu['submenu'] as $submenu) : ?>

									<li class="dropdown-item "><a href="<?= $submenu['link'] ?>" class="nav-link"><?= $submenu['nama'] ?></a></li>
								<?php endforeach ?>
							</ul>
						</li>
					<?php endif ?>
				<?php endforeach ?>
			</li>


		</ul>
		<style type="text/css">
			.btn-boders{
				border: 2px solid white;
			}
		</style>
	</div>
	<div  id="tombolmenubawah" class="row menukiriku" style="

	margin-right: 0px;
	color: #0167f3;
	cursor: pointer;
	background-color: #fff;
	height: 50px;
	align-items: center;
	width: 46px;
	justify-content: center;

	">
		<i class="fas fa-ellipsis-v" style="text-align: center"></i>
	</div>
</div>

</nav>

<div id="igniels" class="ignielsHorizontal-hide">
	<div class="container">
		<ul>
			<?php foreach($menu_kiri as $data): ?>
				<li>
					<a class="" href="<?= site_url("artikel/kategori/$data[slug]"); ?>">
						<?= $data['kategori']; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<style type="text/css">
	
	/*  Navigation Menu Horizontal Scroll by igniel.com */
	.ignielsHorizontal ul {
		width: 100%; /* Lebar maksimal menu */
		overflow-x: auto;
		display: table;
		text-align: center;

	}

	.ignielsHorizontal-hide{
		transition-duration: 0.4s;
		height: 0px;
		
		position: relative;
		
	}



	.ignielsHorizontal {

	color: #fff;
	/* line-height: 2px; */
	overflow: hidden;
	width: 100%;
	background-color: #0167f3;
	 transition-duration: 0.4s;
	height: 39px;
	display: block;
	top: 0px;
	position: relative;

}
	.ignielsHorizontal a {
		font-size: 17px;
		color: #fff;
		text-decoration: none;
		padding: 5px 8px;
		line-height: 2rem;
		display: block;
	}
	.ignielsHorizontal a:hover {
		background-color: rgba(0,0,0,.25);
		color: #fff;
		text-decoration: none;
	}

	.ignielsHorizontal ul, .ignielsHorizontal li {
		list-style: none;
		display: inline-block;
		white-space: nowrap;
		padding: 0px;
		float: none;
	}

	.ignielsHorizontal-hide ul, .ignielsHorizontal-hide li {
		
		display: none;
		
	}

	@media screen and (max-width: 763px){
		.menukiriku{
			margin-right: -11px!important;
		}
		.ignielsHorizontal a {
			font-size: 13px;
			padding: 4px 11px;
		}
		.hiddenmobile{
			display: none;
		}
		.ignielsHorizontal ul{
			text-align: center;
		}
	}
	@media screen and (max-width: 360px){
		.ignielsHorizontal a {
			font-size: 12px;
			padding: 4px 10px;
		}
	}
</style>

