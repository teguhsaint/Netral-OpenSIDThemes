<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>



<script src="<?= base_url("$this->theme_folder/$this->theme/js/jquery-3.6.0.min.js?" )?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/js/aos.js?" )?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/js/jquery.dataTables.min.js?" )?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/js/jquery.fancybox.min.js?" )?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/js/highcharts.js?" )?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/js/feather.min.js?" )?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/js/jquery.marquee.min.js?" )?>"></script>

<script src="<?= base_url("$this->theme_folder/$this->theme/js/slick.min.js?" )?>"></script>

<script src="<?= base_url("$this->theme_folder/$this->theme/assets/distOWL/owl.carousel.min.js?" )?>"></script>
<script>
 function invertMode() {
 var galleries = document.getElementsByClassName("my-body");
var len =  galleries.length;

for(var i=0 ; i<len; i++){
    $(galleries[i]).toggleClass("dark-mode");;
}
    
  }
  $(document).ready(function(){

    $( "#tombolmenubawah").click(function() {
     $("#igniels").toggleClass("ignielsHorizontal ignielsHorizontal-hide");
   });

    $("#menus > li > .asek").click(function(e){
      e.preventDefault();
      if($(this).hasClass("buka"))
      {
        $(this).removeClass("buka");
        $(this).parent().children("ul").stop(true,true).slideUp("normal");
      } else {
        $("#menus .asek.tutup.buka").removeClass("buka");
        $(this).addClass("buka");
        $(".sub").filter(":visible").slideUp("normal");
        $(this).parent().children("ul").stop(true,true).slideDown("normal");
      }
    });

    
    $( "#target_samping" ).click(function() {

      $("#badan_slide_samping").removeClass("menu_samping_hide");
      $("#badan_slide_samping").toggleClass("menu_samping_show");

      setTimeout(function(){
        $("#bg_clicks").removeClass("bg_click_hide");
        $("#bg_clicks").addClass("bg_click_show");}, 450);
      setTimeout(function(){

        $("#slide_samping").removeClass("samping_hide");
        $("#slide_samping").toggleClass("samping_show");


      }, 40);


    });

    $( "#bg_clicks" ).click(function() {


      $("#slide_samping").removeClass("samping_show");
      $("#slide_samping").addClass("samping_hide");

      $("#bg_clicks").removeClass("bg_click_show");
      $("#bg_clicks").addClass("bg_click_hide");
      setTimeout(function(){ $("#badan_slide_samping").removeClass("menu_samping_show"); $("#badan_slide_samping").toggleClass("menu_samping_hide");


    }, 100);


    });


    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:4
        }
      },
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true

    })

  });
  $(function() {
    AOS.init();
  });



</script>

<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/script.min.js?")?>"></script>
<?php $this->load->view('head_tags_front') ?>