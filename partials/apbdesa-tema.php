<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style type="text/css">
	.progress-bar span
	{
		position: absolute;
		right: 20px;
	}
</style>
<div class="bg-white shadow-sm " style="text-align: left; border-radius: 5px; margin:3px;">
	<h4  style="padding:10px;"><i class="fad fa-eye"></i> Tansparasi Desa </h4>
</div>
<div class="container-fluid " id="transparansi-footer" style="width: 100%; padding-bottom: 20px; margin-top: 3px; ">

	<div class="row" style="padding-left: -2px; padding-right: -2px;" >
		<?php foreach ($data_widget as $subdata_name => $subdatas): ?>
			<div class="col-sm-4 mb-2 " style="padding-left: 2px; padding-right: 2px;"  >
				<div class="card h-100"
				data-aos="fade-up"
				data-aos-duration="800"
				data-aos-once="true"
				data-aos-anchor-placement=".slide"
				>
				<div class="card-header" style="background-color: #fff !important; border-bottom: 2px dotted rgb(74, 85, 104)"><div align="center"><h3 ><?= ($subdatas['laporan'])?></h3></div></div>
				<div class="card-body" >

					<div class="mb-2" align="center"><h4>Realisasi | Anggaran</h4></div>
					<?php foreach ($subdatas as $key => $subdata): ?>
						<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
							<div class="progress-group"
						> 
							<div class="mb-2" style="padding: 5px; ; border-radius: 5px;">
								<?php

								$juduls = $subdata['judul'];
								if ($juduls=="PENDAPATAN") {
									echo '<span><i class="fas fa-wallet" style="color:green"></i></span>&nbsp;&nbsp;';

								}elseif ($juduls=="BELANJA") {
									echo '<span><i class="fas fa-coins" style="color:orange"></i></span>&nbsp;&nbsp;';

								}elseif ($juduls=="PEMBIAYAAN") {
									echo '<span><i class="fas fa-money-bill-wave" style="color:blueviolet"></i></span>&nbsp;&nbsp;';
								}   ?>

								<?= $subdata['judul']; ?>
								<br>



								<b>Rp. <?= number_format($subdata['realisasi']); ?> | Rp. <?= number_format($subdata['anggaran']); ?></b>
								<div class="progress" align="right" style="background-color: #4a5568 !important; border-radius: 1rem ; height: 1rem;" ><small></small>
									<div class="progress-bar " role="progressbar" style="height: 1rem; border-radius: 1rem ; width: <?= $subdata['persen']?>%;" aria-valuenow="<?= $subdata['persen'] ?>" aria-valuemin="0" aria-valuemax="100"><span><?= $subdata['persen'] ?> %</span></div>
								</div>
							</div>
						</div>

					<?php endif; ?>
				<?php endforeach; ?>
			</div>

		</div>
	</div>
<?php endforeach; ?>
</div>
</div><hr>
