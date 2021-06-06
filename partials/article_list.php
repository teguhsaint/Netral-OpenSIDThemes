<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $url = site_url('artikel/'.buat_slug($article)) ?>
<?php $abstract = potong_teks(strip_tags($article['isi']), 100) ?>
<?php $kategoris = potong_teks(strip_tags($article['kategori']), 100) ?>

<?php $image = ($article['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'kecil_'.$article['gambar'])) ? 
AmbilFotoArtikel($article['gambar'],'kecil') :

base_url($this->theme_folder.'/'.$this->theme .'/assets/images/placeholder.png');

?>



<div class="my-body mb-3 grid-show " style="" >
	<!-- calc(30% - -90.667px) -->

	<div class="card h-100 shadow-lg"
	data-aos="zoom-in"
	data-aos-offset="50"
	data-aos-duration="800"
	data-aos-once="true"
	data-aos-anchor-placement="center"

	>
	<a class="a-img" href="<?= $url ?>">
		<img src="<?= $image ?>" alt="<?= $article['judul'] ?>"  loading=”lazy” class="card-img-top" style="object-fit: cover; ">
	</a>
	<div class="my-body card-body" >

		<h5  class="card-title"><a style="text-decoration: none;font-size: larger " href="<?= $url ?>"><?= potong_teks(strip_tags($article['judul']), 20)  ?></a></h5>

		<span class=" content__meta__item "><i class="fad fa-calendar content__meta__icon i-green"></i> <?= tgl_indo($article['tgl_upload']) ?></span>
		<span class="content__meta__item "><i class="fad fa-user content__meta__icon i-green"></i> <?= $article['owner'] ?></span>
		
		<p class="card-text gitem"><?= $abstract ?></p>
		<?php 

		$tags = $article['kategori'];
		$new_str = str_replace(' ', '-', $tags);
		$urlkategori = site_url ('artikel/kategori/'.strtolower($new_str));
		if ($tags==""){
		}else{
		
		echo '<p style="margin-top:20px"><small style="background-color:#ececec; padding:3px 10px; border-radius:12px;"><a href="'.$urlkategori.'"> <i class="fad fa-tags"></i> '.$article['kategori'].'</a></small></p>';
		}
		?>

	

		
	</div>
</div>
</div>


<div class="col-sm-6  list-show" style="margin-left: 5px; margin-right: 5px;">
	<div class="mb-2">

		<div class="my-body card h-100 shadow-lg"  style="border-radius: 0px; padding-right: 10px;">
			<div class="my-body card-body" style="padding: 0px;">
				<a style="text-decoration: none; " href="<?= $url ?>">
					<img src="<?= $image ?>" alt="<?= $article['judul'] ?>" class="img-thumbnail img-list" style="

					width: 204px;
					height: 204px;
					border: none;
					border-radius: 0px!important;
					object-fit: cover;
					float: left;
					margin-right: 20px;
					padding: 0px!important;

					">
					<h5 style="text-decoration: none;  " class="title-list"><a style="font-size: larger; text-decoration: none; " href="<?= $url ?>"><?= potong_teks(strip_tags($article['judul']), 100)  ?></a></h5></a>
					<span class="content__meta__item"><i class="fad fa-calendar content__meta__icon i-green"></i> <?= tgl_indo($article['tgl_upload']) ?></span>
					<span class="content__meta__item"><i class="fad fa-user content__meta__icon i-green"></i> <?= $article['owner'] ?></span>
					<article><p class="card-text" ><?=potong_teks(strip_tags($article['isi']), 50) ?></p></article>

				</div></div>
			</div>



		</div>
		<style type="text/css">
			.title-list{
				margin-top: 4%;
			}

			.content__meta__item{
				font-size: initial;
			}
			.list-show{
				width: 48%!important;
				margin: auto!important;
			}

			.row > .list-show{
				padding-right: 1px!important;
				padding-left: 1px!important;
			}
			@media (max-width: 763px){
				.card-text{display: none;}
				.title-list{
					margin-top: 6%;
				}
				.content__meta__item{
					font-size: 13px;
				}
				.list-show{
					width: 97%!important;
					margin: auto!important;
				}

				.row > .list-show{
					padding-right: 5px!important;
					padding-left: 5px!important;
				}
			}

		</style>
