<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="sidebar">
	
	<?php foreach($w_cos as $widget) : ?>
		<?php if ($widget["jenis_widget"] == 1): ?>
			<?php if($widget['isi'] == 'keuangan.php') : ?>
				<?php continue; ?>
			<?php endif ?>
			<div class="sidebar__item">
				<?php $this->load->view($folder_themes . '/widgets/'.$widget['isi']) ?>
			
			</div>
			<?php elseif($widget['jenis_widget'] == 2) : ?>
				<div class="sidebar__item"


				>
					<div class="panel panel--sidebar">
						<div class="panel__header">
							<h3 style="color: #29bbad" class="panel__title"><?= strip_tags($widget['judul']) ?></h3>
						</div>
						<div class="panel__body"
>
							<?php include($widget['isi']) ?>
						</div>
					</div>
				</div>
			<?php else : ?>
				<div class="sidebar__item">
					<div class="panel panel--sidebar">
						<div class="panel__header">
							<h4 class="panel__title"><?= strip_tags($widget['judul']) ?></h4>
						</div>
						<div class="panel__body">
							<?= html_entity_decode($widget['isi']) ?>
						</div>
					</div>
				</div>
		<?php endif ?>
	<?php endforeach ?>
</aside>