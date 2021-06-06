<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title"><i class="fad fa-tags"></i> Kategori</h3>
	</div>
	<div class="box-body">
		

		<?php foreach($menu_kiri as $data): ?>

		
				<a style="

	background-color: #e8e8e8;
	margin-bottom: 7px;
	padding: 0px 9px;
	border-radius: 4px;
	margin-right: 2px;
	margin-left: 2px;
font-size: 15px;
				" href="<?= site_url("artikel/kategori/$data[slug]"); ?>"><i class="fad fa-bookmark"></i> <?= $data['kategori']; ?></a>
				<?php if(count($data['submenu']) > 0): ?>

					<?php foreach($data['submenu'] as $submenu): ?>

						<div> <a href="<?= site_url("artikel/kategori/$submenu[slug]"); ?>"><?= $submenu['kategori']?></a></div>

					<?php endforeach; ?>
					
				<?php endif; ?>

		<?php endforeach; ?>
		
	</div>
</div>
