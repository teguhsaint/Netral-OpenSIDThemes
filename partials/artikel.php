<?php defined('BASEPATH') OR exit('No direct script access allowed');


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
 * @package	OpenSID
 * @author	Tim Pengembang OpenDesa
 * @copyright	Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright	Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license	http://www.gnu.org/licenses/gpl.html	GPL V3
 * @link 	https://github.com/OpenSID/OpenSID
 */
?>

<?php if($single_artikel["id"]) : ?>
	
	<div class="artikel" id="<?= 'artikel-'.$single_artikel['judul']?>">
		<h3 class="judul"><?= $single_artikel["judul"]?></h3>
		<small class="kecil">
			<i class="fad fa-user"></i> <?= $single_artikel['owner']?> |
			<i class="fad fa-clock"></i> <?= tgl_indo2($single_artikel['tgl_upload']);?> |
			<?php if (trim($single_artikel['kategori']) != '') : ?>
				<i class='fad fa-tag'></i> <a href="<?= site_url('artikel/kategori/'.$single_artikel['kat_slug'])?>"><?= $single_artikel['kategori']?></a> |
			<?php endif; ?>
			<i class="fad fa-eye"></i> <?= hit($single_artikel['hit']) ?>
		</small></br></br>

		<?php if($single_artikel['id_kategori'] == 1000) : ?>
			<div class="detail_agenda box box-info">
				<div class="box-body">
					<p>TANGGAL KEGIATAN : <?= tgl_indo2($detail_agenda['tgl_agenda'])?></p>
					<p>KOORDINATOR KEGIATAN : <?= $detail_agenda['koordinator_kegiatan']?></p>
					<p>LOKASI KEGIATAN : <?= $detail_agenda['lokasi_kegiatan']?>	</p>
				</div>
			</div>
		<?php endif; ?>

		<?php if($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
			<div class="sampul">
				<a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>" title=""><img style="width: 100%" src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>" /></a>
			</div>
			<br>
		<?php endif; ?>
		<div class="teks"><?= $single_artikel["isi"]?></div>

		<?php	if($single_artikel['dokumen']!='' and is_file(LOKASI_DOKUMEN.$single_artikel['dokumen'])): ?>
			<p>Dokumen Lampiran : <a href="<?= base_url().LOKASI_DOKUMEN.$single_artikel['dokumen']?>" title=""><?= $single_artikel['link_dokumen']?></a></p>
			<br/>
		<?php endif; ?>
		<?php if($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
			<div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>" /></a>
			</div>
		<?php endif; ?>
		<?php if($single_artikel['gambar2']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar2'])): ?>
			<div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>" /></a>
			</div>
		<?php endif; ?>
		<?php if($single_artikel['gambar3']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar3'])): ?>
			<div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>" /></a>
			</div>
		<?php endif; ?>
</br>
		<div class="form-group mb-4" style="clear:both; border:1px solid; font-size: 17px;">

			<ul id="pageshare" title="Bagikan ke teman anda" class="pagination">
				<li>Bagikan Artikel Ini :</li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li class="sbutton" id="fb"><a name="fb_share" href="http://www.facebook.com/sharer.php?u=<?= site_url('artikel/'.buat_slug($single_artikel))?>" target="_blank"><i class="fab fa-facebook"></i>&nbsp;Facebook</a></li>&nbsp;&nbsp;
				<li class="sbutton" id="rt"><a href="http://twitter.com/share?url=<?= site_url('artikel/'.buat_slug($single_artikel)) ?>" class="twitter-share-button" target="_blank"><i class="fab fa-twitter"></i>&nbsp;Tweet</a></li>&nbsp;&nbsp;
				<li class="sbutton" id="wa_share"><a href="https://api.whatsapp.com/send?text=<?= site_url('artikel/'.buat_slug($single_artikel))?>" target="_blank"><i class="fab fa-whatsapp" style="color:green"></i>&nbsp;WhatsApp</a></li>&nbsp;&nbsp;
				<li class="sbutton" id="tele_share"><a href="https://telegram.me/share/url?url=<?= site_url('artikel/'.buat_slug($single_artikel))?>&text=<?= htmlspecialchars($single_artikel["judul"]); ?>" target="_blank"><i class="fab fa-telegram" style="color:blue"></i>&nbsp;Telegram</a></li>
			</ul>
		</div>

		<div class="form-group" id="kolom-komentar">
			<?php if(!empty($komentar)): ?>
				<div class="card mb-4">
					<div class="card-header">
						<h4 >Komentar</h4>
						<div style="font-size: 13px;" >Pada Artikel Ini</div>
					</div>
					<div class="card-body">
						<?php foreach($komentar AS $data): ?>
							<div class="kom-box mb-2" style="padding: 15px;background-color: #fff; border:1px solid #ced4da">
								<div style="font-size:15px;">

									<i class="bg-primary text-light fad fa-comment" style="border-radius: 50px; padding:  2px 6px; "></i>
									

									<span><?= $data['owner']?></span> 
									<p style="margin-top: 5px; padding-left: 32px;"><span style="font-size: 12px;"><i class="fad fa-clock"></i> <?= tgl_indo2($data['tgl_upload'])?></span></p>
									<p style="margin-top: 5px; padding-left: 32px;">
									<span><?= $data['komentar']?></span></p>
								</div>
								<div style="margin-top: 5px;">
								
								
								</div>
							</div>
							
						<?php endforeach; ?>

					</div>
				</div>
			<?php elseif ($single_artikel['boleh_komentar'] == 1): ?>
			</br>
			<?php endif; ?>
		</div>
		<div class="form-group group-komentar">

			<?php if ($single_artikel['boleh_komentar'] == 1): ?>
				<div class="card">
					<div class="card-header">
						<h3 class="box-title">Tulis Komentar </h3>
						<div style="font-size: 13px;" >Untuk Artikel Ini</div>
					</div>

					<!-- Tampilkan hanya jika 'flash_message' ada -->
					<?php $label = !empty($_SESSION['validation_error']) ? 'label-danger' : 'label-info'; ?>
					<?php if ($flash_message): ?>
					<div class="card-header <?= $label?>"><?= $flash_message?></div>
						<?php unset($_SESSION['validation_error']); ?>
					<?php endif; ?>
					<div class="card-body">
						<form id="form-komentar" class="form-validasi" name="form" action="<?= site_url('add_comment/'.$single_artikel['id'])?>" method="POST" onSubmit="return validasi(this);">
							<table class="table table-borderless">
								<tr class="komentar nama">
									<td>Nama</td>
									<td>
										<input type="text" name="owner" class="form-control required" maxlength="50" value="<?= !empty($_SESSION['post']['owner']) ? $_SESSION['post']['owner'] : $_SESSION['nama'] ?>">
									</td>
								</tr>
								<tr class="komentar alamat">
									<td>No. HP</td>
									<td>
										<input type="text" class="form-control number required" name="no_hp" maxlength="30" value="<?= $_SESSION['post']['no_hp'] ?>">
									</td>
								</tr>
								<tr class="komentar alamat">
									<td>Alamat e-mail</td>
									<td>
										<input type="text" name="email" class="form-control email" maxlength="30" value="<?= $_SESSION['post']['email'] ?>">
									</td>
								</tr>
								<tr class="komentar pesan">
									<td valign="top">Komentar</td>
									<td>
										<textarea class="form-control required" name="komentar"><?= $_SESSION['post']['komentar']?></textarea>
									</td>
								</tr>
								<tr class="captcha"><td>&nbsp;</td>
									<td>
										<img id="captcha" src="<?= base_url().'securimage/securimage_show.php'?>" alt="CAPTCHA Image"/>
										<a href="#" onclick="document.getElementById('captcha').src = '<?= base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false">[ Ganti gambar ]</a>
									</td>
								</tr>
								<tr class="captcha_code">
									<td>&nbsp;</td>
									<td>
										<input type="text" name="captcha_code" class="form-control required" maxlength="6" value="<?= $_SESSION['post']['captcha_code']?>"/> Isikan kode di gambar
									</td>
								</tr>
								<tr class="submit">
									<td>&nbsp;</td>
									<td><input class="btn btn-primary" type="submit" value="Kirim Komentar"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			<?php else: ?>
				<span class='info'>Komentar untuk artikel ini telah ditutup.</span>
			<?php endif; ?>
		</div>
	</div>
<?php else: ?>
	<div class="artikel" id="artikel-blank">
		<div class="box box-danger box-solid">
			<div class="box-header"><h3 class="box-title">Maaf, data tidak ditemukan</h3></div>
			<div class="box-body">
				Anda telah terdampar di halaman yang datanya tidak ada lagi di web ini. Mohon periksa kembali, atau laporkan kepada kami.
			</div>
		</div>
	</div>
<?php endif; ?>
