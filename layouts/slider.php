<?php

defined('BASEPATH') OR exit('No direct script access allowed');



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
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package	OpenSID
 * @author	Tim Pengembang OpenDesa
 * @copyright	Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright	Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license	http://www.gnu.org/licenses/gpl.html	GPL V3
 * @link 	https://github.com/OpenSID/OpenSID
 */
?>






<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
 <div class="carousel-indicators">
 		<?php foreach ($slider_gambar['gambar'] as $gambar) : 
		$is++;
		$file_gambar = $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar'];?>
		<?php if ($is==1) {if(is_file($file_gambar)){?>
			<button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<?php }
		}else{

			if(is_file($file_gambar)){?>
			 <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="<?php echo $is-1 ?>" aria-label="Slide 2"></button>
			<?php }
		}

	endforeach; ?>

  </div>

<div class="carousel-inner">
	<?php foreach ($slider_gambar['gambar'] as $gambar) : 

		$i++;
		$file_gambar = $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar'];?>

		<?php if ($i==1) {
			if(is_file($file_gambar)){?>
				<div class="carousel-item active"> 
					<img src="<?= base_url($file_gambar); ?>" class="d-block h-100 w-100">
				
						<div class="carousel-caption d-md-block">
							<h6><?php echo $gambar['judul']; ?></h4>
						
					</div>
				</div>
			<?php }
		}else{
			if(is_file($file_gambar)){?>
				<div class="carousel-item"> 
					<img src="<?= base_url($file_gambar); ?>" class="d-block  h-100 w-100">

					<div class="carousel-caption d-md-block">
						<h6 ><?php echo $gambar['judul']; ?></h4>

					</div>
				</div>
			<?php }
		}

	endforeach; ?>

	<style type="text/css">
		.carousel .carousel-item  {
			height: 400px;
		}

		.carousel .carousel-caption{
		
		}

		.carousel-item  img {
			object-fit: cover;
			position: absolute;
			top: 0;
			left: 0;
			min-height: 400px;
		}
	</style>

</div>

	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
		<span class="carousel-control-prev-icon " aria-hidden="true" style="padding: 10px; width: 40px; height: 40px; border-radius: 0px 50px 50px 0px; width: 85px; background-color: #0167f3"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
		<span class="carousel-control-next-icon " aria-hidden="true"  style="padding: 10px; width: 40px; height: 40px; border-radius:50px 0px  0px  50px; width: 85px;background-color:#0167f3"></span>
		<span class="visually-hidden">Next</span>
	</button>

</div>