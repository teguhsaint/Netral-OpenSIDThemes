<?php

/**
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:

 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.

 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package OpenSID
 * @author  Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license http://www.gnu.org/licenses/gpl.html  GPL V3
 * @link  https://github.com/OpenSID/OpenSID
 */
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php if ($title):?>
			<?= $title; ?>
			<?php else:?>
				<?=
				get_dynamic_title_page_from_path()
				. ' ' . $this->setting->website_title
				. ' ' . ucwords($this->setting->sebutan_desa)
				. (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : '')
				?>
			<?php endif?>
		</title>
		
		<meta content="utf-8" http-equiv="encoding">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name='viewport' content='width=device-width, initial-scale=1' />
		<meta content="utf-8" http-equiv="encoding">
		<meta name="keywords" content="OpenSID,opensid,sid,SID,SID CRI,SID-CRI,sid cri,sid-cri,Sistem Informasi Desa,sistem informasi desa, desa <?= $desa['nama_desa'];?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta property="og:site_name" content="<?= $desa['nama_desa'];?>"/>
		<meta property="og:type" content="article"/>

		<?php if (isset($single_artikel)): ?>
			<meta property="og:title" content="<?= htmlspecialchars($single_artikel["judul"]);?>"/>
			<meta property="og:url" content="<?= site_url('artikel/'.buat_slug($single_artikel))?>"/>
			<meta property="og:image" content="<?= base_url(LOKASI_FOTO_ARTIKEL.'sedang_'.$single_artikel['gambar']);?>"/>
			<meta property="og:description" content="<?= potong_teks($single_artikel['isi'], 300)?> ..."/>
			<meta name="description" content="<?= potong_teks($single_artikel['isi'], 300)?> ..."/>
			<?php else: ?>
				<meta name="description" content="Website <?= ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>"/>
			<?php endif; ?>

			<?php if (is_file(LOKASI_LOGO_DESA . "favicon.ico")): ?>
				<link rel="shortcut icon" href="<?= base_url()?><?= LOKASI_LOGO_DESA?>favicon.ico" />
				<?php else: ?>
					<link rel="shortcut icon" href="<?= base_url()?>favicon.ico" />
				<?php endif; ?>

				<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

				<?php $this->load->view($folder_themes.'/commons/source_css.php');?>


				<script src="<?= base_url("$this->theme_folder/$this->theme/js/popper.min.js?" )?>"></script>

				<script src="<?= base_url("$this->theme_folder/$this->theme/js/bootstrap.min.js?" )?>"></script>

				<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/sidebars.js?") ?>"></script>
				<script src="<?= base_url("$this->theme_folder/$this->theme/js/jquery.min.js?") ?>"></script>
				
				<script src="<?= base_url("$this->theme_folder/$this->theme/js/leaflet.js?") ?>"></script>
				<script src="<?= base_url("$this->theme_folder/$this->theme/js/leaflet-providers.min.js?") ?>"></script>

				<script src="<?= base_url("$this->theme_folder/$this->theme/js/mapbox-gl.js?") ?>"></script>
				
				<script src="<?= base_url("$this->theme_folder/$this->theme/js/leaflet-mapbox-gl.js?") ?>"></script>
				
				<script src="<?= base_url("$this->theme_folder/$this->theme/js/jquery.cycle2.min.js?") ?>"></script>
				
				<script src="<?= base_url('assets/js/peta.js') ?>"></script>

				<!-- Diperlukan untuk javascript yg mengakses resources -->
				<script type="text/javascript">
					var BASE_URL = "<?= base_url(); ?>";
				</script>

				<?php $this->load->view('head_tags_front') ?>
			</head>
			<body>


				<div class="bg_click_hide" id="bg_clicks"></div>
				<div id="badan_slide_samping" class="menu_samping_hide">
					<div id="slide_samping" class="samping_hide">
						<?php $this->load->view($folder_themes.'/layouts/sidebar.php');?>

					</div>
				</div>
				
<div class="my-body bg-white">
				<?php $this->load->view($folder_themes.'/layouts/header_middle.php');?>
</div>

				<header class="header bg-white shadow-lg mb-3" style="0px solid #4a556821 !important">

					<?php $this->load->view($folder_themes.'/partials/menu.tpl.php');?>


				</header> 
