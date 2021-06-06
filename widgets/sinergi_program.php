<!-- widget Sinergi Program-->

<style>
	#sinergi_program
	{
		text-align: center;
	}

	#sinergi_program table
	{
		margin: auto;
	}

	#sinergi_program img
	{
		max-width: 100%;
		max-height: 100%;
		transition: all 0.5s;
		-o-transition: all 0.5s;
		-moz-transition: all 0.5s;
		-webkit-transition: all 0.5s;
	}

	#sinergi_program img:hover
	{
		
	}
</style>
<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title"><i class="fa fa-external-link"></i> Sinergi Program</h3>
	</div>
	<div id="sinergi_program" class="box-body">
		<table>
			<?php foreach($sinergi_program as $key => $program) : ?>
				<?php $baris[$program['baris']][$program['kolom']] = $program; ?>
			<?php endforeach; ?>

			<?php foreach($baris as $baris_program) : ?>
				<tr>
					<td>
						<?php $width = 100/count($baris_program)-count($baris_program)?>
						<?php foreach($baris_program as $key => $program) : ?>
							<span style="display: inline-block; width: <?= $width.'%'?>">
								<a href="<?= $program['tautan'] ?>" target="_blank"><img src="<?= base_url().LOKASI_GAMBAR_WIDGET.$program['gambar'] ?>" alt="<?= $program['judul'] ?>" /></a>
							</span>
						<?php endforeach; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>