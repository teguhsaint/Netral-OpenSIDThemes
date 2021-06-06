<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes.'/layouts/header.php');?>

<style type="text/css">
	body{
		background-color: white!important;
	}
</style>
<br class="mobile_br">
<main>
	<div class="container">
		<section id="news-list" >
			<div class="row">
				<!--  Kolom Untuk Lis Artikel -->
				<div class="col blog-main bg-white col-mobiledesktop">
					<?php $this->load->view($folder_themes.'/partials/artikel.php');?>

				</div>

				<div class="col-sm-4-side blog-sidebar" >
					
					<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/side.right.php'));?>
					
				</div>
			</div>

		</div>
	</section>



</main>

	<div id=" footer">
		<?php $this->load->view($folder_themes.'/commons/footer');?>
	</div>
<?php $this->load->view($folder_themes.'/commons/source_js.php');?>

</body>
</html>

