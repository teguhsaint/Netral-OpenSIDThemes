<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

	<p>
		<div class="container">
		<?php if (!is_null($transparansi)) $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/apbdesa-tema.php'), $transparansi);?>
</div>
</p>

<div class="container-fluid text-white" style="background-color: #4a5568">
<div class="row">

<div class="col-sm-4">

		<h5 class="box-title"> Sinergi Program</h5>
	
		<table>
			<?php foreach($sinergi_program as $key => $program) : ?>
				<?php $baris[$program['baris']][$program['kolom']] = $program; ?>
			<?php endforeach; ?>

			<?php foreach($baris as $baris_program) : ?>
				<tr>
					<td>
						<?php $width = 100/count($baris_program)-count($baris_program)?>
						<?php foreach($baris_program as $key => $program) : ?>
							<span style="display: inline-block; width: 25%; height:  25%; object-fit: cover">
								<a href="<?= $program['tautan'] ?>" target="_blank"><img src="<?= base_url().LOKASI_GAMBAR_WIDGET.$program['gambar'] ?>" alt="<?= $program['judul'] ?>" /></a>
							</span>
						<?php endforeach; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>

</div>

</div>



<div class="row" style=" text-align: center; justify-content:center">
		<a target="blank" href="https://opendesa.id" style="width: auto">&copy; 2016-<?php echo date("Y");?>  OpenDesa</a>

		<a target="blank" href="https://github.com/OpenSID/OpenSID"  style="width: auto">OpenSID  <?php echo AmbilVersi()?></a>

		<div>
	  <a target="blank" href="https://www.facebook.com/groups/OpenSID/">Aplikasi Sistem Informasi Desa (SID) ini dikembangkan oleh Komunitas OpenSID</a>
</div>

</div>
</div>
