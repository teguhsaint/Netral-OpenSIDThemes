
<div class="bg-white shadow-sm mb-2 " style="text-align: left; border-radius: 5px;">
	<h4  style="padding:10px;"><i class="fad fa-shopping-cart"></i> Produk Warga</h4>

</div>
<?php 

// Read JSON file
$json = file_get_contents(base_url($this->theme_folder.'/'.$this->theme .'/partials/lapak.json'));

//Decode JSON
$json_data = json_decode($json,true);

//Print data

?>

<div class="owl-carousel shadow owl-theme mb-4">
<?php 
foreach ($json_data as $key1 => $value1) : ?>
    
<?php $gambars = $json_data[$key1]["gambar"]; ?>

<div class="item card ">
<img src="<?php echo base_url($this->theme_folder.'/'.$this->theme .'/assets/lapak/'.$gambars);?>" class="card-img-top" style="object-fit: cover;border-radius:0px;">
<div class="card-body">
	<h5  class="card-title"><a style="text-decoration: none;" ><?php print_r ($json_data[$key1]["namaproduk"]); ?></a></h5>
	<span class="card-harga"><b><?php print_r ($json_data[$key1]["harga"]); ?></b></span>
	<p class="card-text" style="margin-top: 10px;"><?php print_r ($json_data[$key1]["catatan"]); ?></p>
	<a href="https://api.whatsapp.com/send?phone=<?php print_r ($json_data[$key1]["nomor_penjual"]); ?>" class="btn" style="margin-top: 10px;width: 100%; background-color: #16ca2a; color: white"><i class="fab fa-whatsapp"></i> Hubungi Penjual</a>
</div>
</div>


    
<?php endforeach

?>
</div>
</br>
<!-- 

 -->
<style type="text/css">
	.card-harga{
		padding-left: 5px;padding-right: 5px; background-color: #fb7702 !important; color: white;border-radius: 5px;
	}
</style>