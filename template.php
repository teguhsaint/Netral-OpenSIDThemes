<?php defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php $this->load->view($folder_themes.'/layouts/header.php');?>

<div class="container sliderpadding " >
	<div class="row row-mobile">
		<div class="col-sm-9 mb-1">

	
	<?php $this->load->view($folder_themes .'/layouts/slider.php') ?>
	</div>
	<div class="col-sm-3 mb-1" style="display: flex;flex-wrap: wrap;">
		
		<?php $this->load->view($folder_themes."/partials/coolheadline.php") ?>

	</div>

</div>


</div> 
<br>

	<div class="container" style="margin-top: -25px;" >
		<?php $this->load->view($folder_themes.'/partials/lapak.php');?>
	</div>

<main>

	<div class="container" style="margin-top: -25px;" >
		<?php $this->load->view($folder_themes.'/partials/content.php');?>
	</div>
	
	<div id=" footer">
		<?php $this->load->view($folder_themes.'/commons/footer');?>
	</div>

</main>

<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view($folder_themes.'/commons/source_js.php');?>

<?php $this->load->view('head_tags_front') ?>
</body>
</html>
