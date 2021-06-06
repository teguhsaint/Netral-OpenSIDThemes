<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style type="text/css">
	#covid {
		
	}

	#covid .panel {
		background-color: inherit;
		margin-bottom: 0px;
		padding: 10px;
	}
	#covid .row .panel-heading{
		height:35px;
	}
	#covid .panel-body {
		
		font-weight: bold;
		font-size:x-large;

	}

	#covid .panel-body span.i {
		font-size: inherit;
	}

	#covid .panel-body span {
		font-size: initial;
		font-weight: normal;
	}

	#covid .panel-body.sub {
		background-color: inherit;
		padding-top: 10px;
	}

	#covid .row .panel-heading {

		padding: 1px;
	}
	.col-sm-3{
	
	width: 24% !important;
	margin: auto;
	height: 80px;
	display: grid;
	align-items: center;


	}

	span.text-small {
		font-size: 14px !important;
	}
</style>
<script>
	const COVID_API_URL = 'https://api.kawalcorona.com/';
	const KODE_PROVINSI = <?= $this->setting->provinsi_covid ? : 'undefined' ?> ;
	const ENDPOINT = KODE_PROVINSI ? 'indonesia/provinsi/' : 'indonesia/';

	function numberFormat(num) {
		return new Intl.NumberFormat('id-ID').format(num);
	}

	function parseToNum(data) {
		return parseFloat(data.toString().replace(/,/g, ''));
	}

	function showData(result) {
		const data = result[0];
		const wilayah = KODE_PROVINSI ? data.attributes.Provinsi : data.name;
		const meninggal = parseToNum(KODE_PROVINSI ? data.attributes.Kasus_Meni : data.meninggal);
		const sembuh = parseToNum(KODE_PROVINSI ? data.attributes.Kasus_Semb : data.sembuh);
		const positif = parseToNum(KODE_PROVINSI ? data.attributes.Kasus_Posi : data.positif);
		const perawatan = positif - (sembuh + meninggal);

		const attributes = ['positif', 'perawatan', 'sembuh', 'meninggal'];

		$('.nama-wilayah').html(`di ${wilayah}`);
		attributes.forEach(function (attr) {
			$(`[data-status=${attr}]`).html(numberFormat(eval(attr)) + ' <span>orang</span>');
		})

	}

	function showError() {
		$('.nama-wilayah').html('');
		$('#covid .panel-body.text-center text-white').html('<span class="text-small">Gagal mengambil data</span>');
	}

	$(document).ready(function () {
		try {
			$.ajax({
				type: "POST",
				dataType: 'json',
				async: true,
				cache: true,
				url: '<?= site_url("ambil_data_covid")?>',
				data: {
					endpoint: COVID_API_URL + ENDPOINT
				},
				success: function (response) {
					const result = response.filter(data => KODE_PROVINSI ? data.attributes.Kode_Provi == KODE_PROVINSI :
						data);
					showData(result);
				},
				error: function (err) {
					showError();
				}
			});
		} catch (error) {
			showError()
		}
	})
</script>
<div id="covid" class="mb-4" >
	<div class="panel">
		<div class="box-header with-border">
			<h3 class="box-title">
				<span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">Status COVID-19
					<span class="nama-wilayah"><i class="fa fa-spinner fa-pulse"></i></span></span>
				</h3>
			</div>
			<div class="panel-body">
				<div class="row">

					<div class="col-sm-3 bg-danger" style="border-radius: 6px; border: 1px solid #dee3e8; ">
						<div style="display: block">
						<img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/sedih.png') ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" alt="test ap" class=" img-list" style="width: 55px; height: 55px; border:none; border-radius:7px; object-fit: cover;	float: left; margin-right: 20px;">
						<h5 style="text-decoration: none; " class="title-list text-white">
						Positif</h5>
						<p  data-status="positif" class="text-white"> <span><i class="fa fa-spinner fa-lg fa-pulse"></i></span></p></div>
					</div>


					<div class="col-sm-3" style="border-radius: 6px; border: 1px solid #dee3e8; ">
						<div style="display: block">
						<img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/corona.png') ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" alt="test ap" class=" img-list" style="width: 55px; height: 55px; border:none; border-radius:7px; object-fit: cover;	float: left; margin-right: 20px;">
						<h5 style="text-decoration: none; " class="title-list text-white">
						Dirawat</h5>
						<p  data-status="perawatan" class="text-white"> <span><i class="fa fa-spinner fa-lg fa-pulse"></i></span></p></div>
					</div>


					<div class="col-sm-3" style="border-radius: 6px; border: 1px solid #dee3e8; ">
						<div style="display: block">
						<img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/happy.png') ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" alt="test ap" class="img-list" style="width: 55px; height: 55px; border:none; border-radius:7px; object-fit: cover;	float: left; margin-right: 20px;">
						<h5 style="text-decoration: none; " class="title-list text-white">
						Sembuh</h5>
						<p  data-status="sembuh" class="text-white"> <span><i class="fa fa-spinner fa-lg fa-pulse"></i></span></p></div>
					</div>


					<div class="col-sm-3" style="border-radius: 6px; border: 1px solid #dee3e8; ">
						<div style="display: block">
						<img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/nangis.png') ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" alt="test ap" class="img-list" style="width: 55px; height: 55px; border:none; border-radius:7px; object-fit: cover;	float: left; margin-right: 20px;">
						<h5 style="text-decoration: none; " class="title-list text-white">
						Meninggal</h5>
						<p  data-status="meninggal" class="text-white"> <span><i class="fa fa-spinner fa-lg fa-pulse"></i></span></p></div>
					</div>
				</div>
			</div>
		</div>

	</div>
