<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body >

	<?php $this->load->view($folder_themes .'/layouts/header') ?>
<?php $this->load->view($folder_themes .'/partials/newsticker.php') ?>



		<main class="contents bg-white"  >
			<br>
			<section class="content__article" id="status-idm" style="max-width: 100%!important; margin: auto;" >
			
			<?php $this->load->view($folder_themes . '/partials/idm.php')?>
			
			</section>
		</main>
		
	<div id=" footer">
		<?php $this->load->view($folder_themes.'/commons/footer');?>
	</div>
	 <script type="text/javascript">



//Get the button
var mybutton = document.getElementById("buttontotop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


 	$("#buttontotop").click(function() {
    $('html, body').animate({
        scrollTop: $("#divtop").offset().top
    }, 500);
});
 </script>

 <?php $this->load->view($folder_themes . '/commons/source_js') ?>
 
</body>
</html>