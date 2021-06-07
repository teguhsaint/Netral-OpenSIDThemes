<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes.'/layouts/header.php');?>
      <br>
<div class="row"  style="margin-left: 0em!important; margin-right: 0em!important">
<!--  Kolom Untuk Lis Artikel -->
<div class="col bg-white">
            <?php $this->load->view($halaman_peta); ?>
</div>


</div>
      
	<div id=" footer">
		<?php $this->load->view($folder_themes.'/commons/footer');?>
	</div>
    </div>
  </body>
</html>
