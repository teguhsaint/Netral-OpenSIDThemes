<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<?php $this->load->view($folder_themes."/partials/feed.php") ?>


<!-- <div class="mb-2" style="margin-top: -30px;">
	<?php $this->load->view($folder_themes .'/partials/menu_kotak') ?>
</div>  -->

<div class="bg-white shadow-sm mb-2 " style="text-align: left; border-radius: 5px;">
	<h4  style="padding:10px;"><i class="fad fa-stars"></i> Artikel Unggulan</h4>

</div>

		<?php $this->load->view($folder_themes."/partials/headline.php") ?>
<section id="news-list" >

	<div class="row" >
		<!--  Kolom Untuk Lis Artikel -->
		<div class="col blog-main">

			<div class="row" style="height: 60px;" >
				<div class="col colmobile">

					<div class="bg-white shadow-sm " style="text-align: left; border-radius: 5px;">
						<h4  style="padding:10px;"><i class="fad fa-newspaper"></i> Berita Terkini</h4>
					</div>
					<div style="float: right;position: relative;top: -45px;	right: 9px;">
						<button id="jenistampilan" value="hidegrid" class="hidegrid btn btn-light" style="float: right; color: #535573"><i class="fad fa-list"></i></button>
						<button id="jenistampilan2" value="hidelist" class="hidelist btn btn-light" style="float: right; color: #535573"><i class="fad fa-grid"></i></button>
					</div>
				</div>


			</div>

			<script>

				$(document).ready(function(){

					var JenisTampil = localStorage.getItem('Text');

					if(JenisTampil == 'hidegrid') {
						listmuncul();
					}
					else {
						gridmuncul();
					}

					$(".hidegrid").click(function(){
						listmuncul();
						var storage = document.getElementById('jenistampilan').value;
						localStorage.setItem('Text',storage);
					});
					$(".hidelist").click(function(){

						gridmuncul();	
						var storage = document.getElementById('jenistampilan2').value;
						localStorage.setItem('Text',storage);
					});


					function gridmuncul(){
						$(".grid-show").show();
						$(".list-show").hide();
						$("#jenistampilan").show();
						$("#jenistampilan2").hide();
					}

					function listmuncul(){
						$(".grid-show").hide();
						$(".list-show").show();
						$("#jenistampilan").hide();
						$("#jenistampilan2").show();
					}


				});


			</script>
			<div class="row rowmobile" >

				<?php if($artikel) : ?>
					<?php foreach($artikel as $article) : ?>

						<?php $data['article'] = $article ?>
										
						<?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
					<?php endforeach ?>
					<?php else : ?>
						<?php $data['title'] = $title ?>
						<?php $this->load->view($folder_themes .'/commons/404', $data) ?>
					<?php endif ?>

				</div>
				<?php $this->load->view($folder_themes .'/commons/paging') ?>
			</div>
			<!-- End Lis Artikel -->

		</div>
		
	</section>
