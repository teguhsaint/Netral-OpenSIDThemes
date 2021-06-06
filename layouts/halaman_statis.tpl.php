<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body >

  <?php $this->load->view($folder_themes .'/layouts/header') ?>
<?php $this->load->view($folder_themes .'/partials/newsticker.php') ?>

<style type="text/css">
	.statisku{
		width: 68.667%!important;
		padding: 7px 25px 7px 9px;
	}

	@media (max-width: 763px){
		.statisku{
		width: 100%!important
	}
	}
</style>


<div class="container"  style="padding: 20px 0" >
	
<div class="row"  style="margin-left: 0px!important; margin-right: 0px!important">
<!--  Kolom Untuk Lis Artikel -->
<div class="col-sm-8 bg-light statisku" >
	
	<?php if ($halaman_statis=="web/halaman_statis/informasi_publik"):?>
			<?php $this->load->view($folder_themes .'/halaman_statis/informasi_publik.php'); ?>
	<?php else :?>
			<?php $this->load->view($halaman_statis); ?>
	<?php endif ?>
			
</div>
<div class="col-sm-4-side colku">
    <?php $this->load->view($folder_themes .'/partials/side.right.php') ?>
</div>
</div>
	
</div>
	<?php $this->load->view($folder_themes . '/commons/source_js') ?>


<style type="text/css">
	.row > .colku{
		padding: 0px!important;
	}
.dataTables_filter > label >input{
  border: 1px solid black!important;
}
#peraturanForm{
	display: flex;
	flex-wrap: wrap;
}
@media (max-width: 768px) {

#peraturanForm >.col-md-3{
margin-bottom: 0px!important;
}

#peraturanForm > .col-md-3 > .btn-info{
	margin-top:20px !important;
	width: 100%!important;
}

}


#peraturanForm > .col-md-3 > .btn-info{
	color: #fff;
	background-color: #3a67ec;
}
#peraturanForm >.col-md-3{
flex: auto!important;
margin-left: 10px;
width: auto!important;
margin-bottom: 30px;
}

@media (min-width: 1000px) {



#peraturanForm >.col-md-3 #tentang{
width: 100%!important;
}

#peraturanForm > .col-md-3 > .btn-info{
	margin-top: 1.5rem!important;
	width: 100%;
}
}
.info_publik{
  border: 1px solid black!important;
}
</style>

	<div id=" footer">
		<?php $this->load->view($folder_themes.'/commons/footer');?>
	</div>
</body>
</html>