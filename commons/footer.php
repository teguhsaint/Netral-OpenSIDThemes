<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<p>
	<div class="container">
		<?php if (!is_null($transparansi)) $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/apbdesa-tema.php'), $transparansi);?>
	</div>
</p>

<div class="container-fluid text-light" style="background-color: #4a5568">
	<div class="row" style="padding: 10px;">

		<div class="col-sm-4">
			
			<div class="contenth" style="width: 100%; display: flex; padding-top: 10px;">
				<img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="" style="width: 15%; margin-top: 0px; margin-right: 10px;" >
				<div class="text" style="margin-top: 3%">
					<h3><?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></h3>

				</div>


			</div>

			<p style="padding-left: 10px; margin-top: 5px;">Website Resmi Pemerintah <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>, <?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> <?= ucwords($desa['nama_kecamatan']) ?>, <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?> <?= ucwords($desa['nama_kabupaten']) ?>, Prov. <?= ucwords($desa['nama_propinsi']) ?></p>

			<p style="padding-left: 10px; margin-top: 5px;">

				<?php foreach($sosmed as $data) : ?>
					<?php if(!empty($data['link'])) : ?>
						<?php $brand = strtolower(str_replace(' ', '-', $data['nama'])) ?>

						<a style="font-size: 25px;" href="<?= $data['link'] ?>" target="blank"><i class="fab fa-<?= $brand == 'youtube' ? 'youtube-play' : $brand ?>"></i></a>&nbsp;&nbsp;
					<?php endif ?>
				<?php endforeach ?>

			</p>

		</div>

		<div class="col-sm-4">
			<div class="card" style="border:none;background-color: #4a5568">
				<div class="card-body"  >

					<h4 class="mb-2">Kontak Kami</h4>

					<?= ucwords($desa['alamat_kantor']) ?>, Kode Pos <?= ucwords($desa['kode_pos']) ?> </br>
					Desa <?= ucwords($desa['nama_desa']) ?>								
					<?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> <?= ucwords($desa['nama_kecamatan']) ?>, <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?> <?= ucwords($desa['nama_kabupaten']) ?>, Prov. <?= ucwords($desa['nama_propinsi']) ?> 
					
				</br>
			</br>
			<span style="text-transform: lowercase">
				<i class="fal fa-envelope"></i> <?= ucwords($desa['email_desa']) ?>
			</span>
		</br>
		<span style="text-transform: lowercase">
			<i class="fal fa-phone"></i> <?= ucwords($desa['telepon']) ?>
		</span>

	</div>

</div>
</div>


<div class="col-sm-4">
	<div class="card" style="border:none;background-color: #4a5568">
		<div class="card-body"  >

			<h4>Sinergi Program</h4>

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
</div>

</div>


<div class="row" style=" text-align: center; justify-content:center; background-color: #0000002e; padding:10px;">
	<a  target="blank" href="https://opendesa.id" style="padding: 2px; width: auto">&copy; 2016-<?php echo date("Y");?>  OpenDesa</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a target="blank" href="https://github.com/OpenSID/OpenSID"  style="padding: 2px; width: auto"> Versi : OpenSID  <?php echo AmbilVersi()?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a target="blank" href="#"  style="padding: 2px; width: auto">Tema Netral</a>

	<div>
		<a target="blank" href="https://www.facebook.com/groups/OpenSID/">Aplikasi Sistem Informasi Desa (SID) ini dikembangkan oleh Komunitas OpenSID</a>
	</div>

</div>
</div>
