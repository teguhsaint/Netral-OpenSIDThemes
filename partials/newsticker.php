<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container" style="padding: 0px;"> 

	<?php if($teks_berjalan) : ?>

		<div class="newsticker" >
			<div style="
	position: absolute;
	display: block;
	background-color: #0167f3;
	color: white;
	text-align: center;
	font-weight: 600;
	padding: 8px 16px 9px 12px;
	top: 0px;
	width: 8%;
"><i class="fal fa-bullhorn"> </i>  Info</div>

			<marquee class="newsticker__lists" onmouseover="this.stop();" onmouseout="this.start();">

				<?php foreach($teks_berjalan as $newsticker) : ?>
					<span class="newsticker__item" style="padding-right: 1.5rem">
				

						<?= $newsticker['teks'] ?>
						<?php if($newsticker['tautan']) : ?>
							<a href="<?= $newsticker['tautan'] ?>" class="newsticker__link"><?= $newsticker['judul_tautan']?></a>
						<?php endif ?>
					</span>
				<?php endforeach ?>
			</marquee>
		</div>
	</div>
	<?php endif ?>