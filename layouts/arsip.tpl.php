<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes.'/layouts/header.php');?>
		

<div class="row">
<!--  Kolom Untuk Lis Artikel -->
<div class="col-sm-9 bg-light" style="padding: 20px" >
	
				<div class="innertube">
						<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/arsip.php'));?>
					</div>
			
</div>


<div class="col-sm-3">
    <?php $this->load->view($folder_themes .'/partials/side.right.php') ?>
</div>
</div>

		

	<div id=" footer">
		<?php $this->load->view($folder_themes.'/commons/footer');?>
	</div>
		</div>
<?php $this->load->view($folder_themes . '/commons/source_js') ?>
	</body>
</html>
