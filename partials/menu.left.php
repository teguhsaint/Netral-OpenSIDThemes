<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Navigation Menu Horizontal Scroll by igniel.com -->
<div class="ignielHorizontal hiddenmobile">
<div class="container">
        <ul>
       
       
          <?php foreach($sosmed as $data) : ?>
          <?php if(!empty($data['link'])) : ?>
          <?php $brand = strtolower(str_replace(' ', '-', $data['nama'])) ?>
          <li   class="btn-<?php echo $data['nama']?>">
            <a href="<?= $data['link'] ?>" target="blank"><i class="fab fa-<?= $brand == 'youtube' ? 'youtube-play' : $brand ?>"></i> </a>
          </li>

          <?php endif ?>
          <?php endforeach ?>

          </ul>
   </div>
</div>

<style type="text/css">
.btn-Facebook i{
color: #fff;

}
.btn-Instagram i{
color: #fff;
}

.btn-WhatsApp i{
color: #fff;
}

	</style>
