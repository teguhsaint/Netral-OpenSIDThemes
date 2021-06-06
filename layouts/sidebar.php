	    <div id="menus-wrap">
	    	    <div class="col-lg-9">
      <a href="<?= base_url(); ?>" class="brand" style="padding-top:20px; padding-left: 10px; align-items: start;">
        <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="brand-image" style="margin-bottom:0px;">
        <div class="my-body brand-name bg-gray bg-opacity-75 p-0.5 dark:bg-dark-primary dark:bg-opacity-75"  style="

		position: absolute;
		top: 46px;
		left: 90px;

        ">
          <h1 class="brand-title"><?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></h1>
          
        </div>
      </a>
    </div>
		<ul id="menus">
				<li  >
				<a href="<?= site_url('first') ?>" style="padding-left:2% ;	font-weight: 500;width: 100%;display: block;align-items: center;display: flex;height: 50px;">Beranda</a>
				</li>
			<?php foreach($menu_atas as $menu) :  ?>
				<?php $mu=$mu+1;  ?>
				<li  >
					<?php if(count($menu['submenu']) < 1) : ?>

						<li>
							<a class="" href="<?= $menu['link'] ?>"  style="
							padding-left:2% ;

							font-weight: 500;
							width: 100%;
							display: block;
							/* justify-content: center; */
							align-items: center;
							display: flex;
							height: 50px;">
								<?= $menu['nama'] ?>
							</a>
						</li>
					<?php endif ?>

					<?php if(count($menu['submenu']) > 0) : ?>
						<li >
							<a  href="#collapseExample<?php echo $mu;?>" role="button" aria-controls="collapseExample" class="asek tutup" style="
							padding-left:2% ;

							font-weight: 500;
							width: 100%;
							display: block;
							/* justify-content: center; */
							align-items: center;
							display: flex;
							height: 50px;">

							<?= $menu['nama'] ?>
						</a>
						<ul class="sub" style="list-style: none">
						
									<?php foreach($menu['submenu'] as $submenu) : ?>
										<li class="" style="color: white"><a href="<?= $submenu['link'] ?>" class=""><?= $submenu['nama'] ?> </a></li>
									<?php endforeach ?>
							
						</ul>
					</li>
				<?php endif ?>
			<?php endforeach ?>
		</li>

	</ul>

</div>
<style type="text/css">
	#menus > li > a:hover{
		color: #0167f3;

	}
	#menus > li > a.tutup:hover{
		color: #0167f3;

	}
	#menus > li > a.tutup{
		color: #000;

	}
</style>