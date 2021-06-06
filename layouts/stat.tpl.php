<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes.'/layouts/header.php');?>


<script type="text/javascript">
	let chart;
	const rawData = Object.values(<?= json_encode($stat) ?>);
	const type = '<?= $tipe == 1 ? 'column' : 'pie' ?>';
	const legend = Boolean(!<?= ($tipe) ?>);
	let categories = [];
	let data = [];
	let i = 1;
	let status_tampilkan = true;
	for (const stat of rawData) {
		if (stat.nama !== 'TOTAL' && stat.nama !== 'JUMLAH' && stat.nama != 'PENERIMA') {
			let filteredData = [stat.nama, parseInt(stat.jumlah)];
			categories.push(i);
			data.push(filteredData);
			i++;
		}
	}

	function tampilkan_nol(tampilkan = false) {
		if (tampilkan) {
			$(".nol").parent().show();
		} else {
			$(".nol").parent().hide();
		}
	}

	function toggle_tampilkan() {
		$('#showData').click();
		tampilkan_nol(status_tampilkan);
		status_tampilkan = !status_tampilkan;
		if (status_tampilkan) $('#tampilkan').text('Tampilkan Nol');
		else $('#tampilkan').text('Sembunyikan Nol');
	}

	function switchType(){
		var chartType = chart_penduduk.series[0].type;
		chart_penduduk.series[0].update({
			type: (chartType === 'pie') ? 'column' : 'pie'
		});
	}

	$(document).ready(function () {
		tampilkan_nol(false);
		if (<?=$this->setting->statistik_chart_3d?>) {
			chart_penduduk = new Highcharts.Chart({
				chart: {
					renderTo: 'contai',
					options3d: {
						enabled: true,
						alpha: 45
					}
				},
				title: 0,
				yAxis: {
					showEmpty: false,
				},
				xAxis: {
					categories: categories,
				},
				plotOptions: {
					series: {
						colorByPoint: true
					},
					column: {
						pointPadding: -0.1,
						borderWidth: 0,
						showInLegend: false,
						depth: 45
					},
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						showInLegend: true,
						depth: 45,
						innerSize: 70
					}
				},
				legend: {
					enabled: legend
				},
				series: [{
					type: type,
					name: 'Jumlah Populasi',
					shadow: 1,
					border: 1,
					data: data
				}]
			});
		} else {
			chart_penduduk = new Highcharts.Chart({
				chart: {
					renderTo: 'container'
				},
				title: 0,
				yAxis: {
					showEmpty: false,
				},
				xAxis: {
					categories: categories,
				},
				plotOptions: {
					series: {
						colorByPoint: true
					},
					column: {
						pointPadding: -0.1,
						borderWidth: 0,
						showInLegend: false,
					},
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						showInLegend: true,
					}
				},
				legend: {
					enabled: legend
				},
				series: [{
					type: type,
					name: 'Jumlah Populasi',
					shadow: 1,
					border: 1,
					data: data
				}]
			});
		}

		$('#showData').click(function () {
			$('tr.lebih').show();
			$('#showData').hide();
			tampilkan_nol(false);
		});

	});
</script>
<!-- TODO: Pindahkan ke external css -->
<style>
	tr.lebih {
		display: none;
	}
	
	.input-sm
	{
		padding: 4px 4px;
	}
	@media (max-width:780px)
	{
		.btn-group-vertical
		{
			display: block;
		}
	}
	
</style>


<div class="row" style="width: 94%; margin:auto; margin-top: 15px;">
<div class="col-sm-8 bg-light" style="padding: 10px;" >
	
				<div class="innertube">
						<?php if ($tipe == 2): ?>
						<?php elseif ($tipe == 3): ?>
							<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/wilayah.php')); ?>
						<?php elseif ($tipe == 4): ?>
								<?php $this->load->view($folder_themes.'/statistik/dpt.php');?>
						
						<?php else: ?>
								<?php $this->load->view($folder_themes.'/statistik/penduduk_grafik_web.php');?>
						
							<?php if (in_array($st, array('bantuan_keluarga', 'bantuan_penduduk'))):?>
								<?php if ($this->setting->daftar_penerima_bantuan):?>
									<?php $this->load->view($folder_themes.'statistik/peserta_bantuan', array('lap' => $st)); ?>
								<?php endif;?>
							<?php endif;?>

						<?php endif; ?>
				
			</div>
</div>

<div class="col-sm-4-side">
    <?php $this->load->view($folder_themes .'/partials/side.right.php') ?>
</div>
</div>

			<div id="footer">
				<?php
				$this->load->view($folder_themes.'/commons/footer');
				?>
			</div>
		</div>
	<?php $this->load->view($folder_themes . '/commons/source_js') ?>
	</body>
</html>
