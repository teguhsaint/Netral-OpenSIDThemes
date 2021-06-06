<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>




<nav class="nav gradcolor" style="box-shadow: 0 10px 10px #0000003d">

	<ul class="nav__list" >
		<?php if(menu_atas) : ?>
			<li class="nav__item">
				<div class="hiddendesktop mb-4" style="width:100%">
				<form action="<?= site_url('first') ?>" method="get" >

				<div class="input-group bg-light text-dark " style="border-radius: 5px;">
				<input type="search" class="form-control" placeholder="Cari" name="cari" style="border:none; background-color: transparent !important;">
				<span class="input-group-text bg-success text-dark" style="border:none;background-color: transparent !important;"><i class="fal fa-search" ></i></span>
				</div>
				</form>

				</div>
			</li>
			<li class="nav__item bg-dark">
				<a href="<?= site_url('first') ?>" class="nav__link">Beranda</a>
			</li>
			<?php foreach($menu_atas as $menu) : ?>
				<li class="nav__item <?php count(menu['submenu']) > 0 and print('nav__item--has-dropdown') ?>">
					<a href="#" class="nav__link"><?= $menu['nama'] ?>
						<?php if(count($menu['submenu']) > 0) : ?>
							<i class="fal fa-chevron-down nav__icon"></i>
						<?php endif ?>
					</a>
						<?php if(count($menu['submenu']) > 0) : ?>
							<ul class="nav-dropdown">
								<?php foreach($menu['submenu'] as $submenu) : ?>
									<li class="nav-dropdown__item"><a href="<?= $submenu['link'] ?>" class="nav-dropdown__link"><i class="fal fa-circle"> </i>&nbsp;&nbsp;&nbsp;<?= $submenu['nama'] ?></a></li>
								<?php endforeach ?>
							</ul>
						<?php endif ?>
			<?php endforeach ?>
		<?php endif ?>
	</li>
	
<div  class="d-flex justify-content-end" style="width:47%">
<form action="<?= site_url('first') ?>" method="get" >

<div class="input-group bg-light text-dark hiddenmobile" style="border-radius: 5px;">
  <input type="search" class="form-control" placeholder="Cari" name="cari" style="border:none; background-color: transparent !important;">
  <span class="input-group-text bg-success text-dark" style="border:none;background-color: transparent !important;"><i class="fal fa-search" ></i></span>
</div>
</form>

</div>

</ul>


</nav>
