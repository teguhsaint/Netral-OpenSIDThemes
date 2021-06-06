<div class="mb-3" style="
  
  display: flex;
  justify-content: center;
  align-items: center;
  align-content: center;
  flex-wrap: wrap;

  margin: 0 auto;
  padding:0px;

">

  
    
    <a href="<?= base_url(); ?>index.php/informasi_publik" class="card shadow btns btns-1">
      <i class="fad fa-file icon-btn" style="font-size: 45px; color: blue"></i>
      <span class="text-btn">
      Informasi Publik
    </span>
    </a>
       <a href="<?= base_url(); ?>index.php/artikel/2021/5/17/apbd-2020" class="card shadow btns btns-1">
      <i class="fad fa-coins icon-btn" style="font-size: 45px; color: green"></i>
      <span class="text-btn">
      Laporan APBDES
    </span>
    </a>   
    <a href="<?= base_url(); ?>index.php/first/status_idm" class="card shadow btns btns-1">
      <i class="fad fa-pie-chart icon-btn" style="font-size: 45px; color: orange"></i>
      <span class="text-btn">
      Status IDM
    </span>
    </a>

       <a href="#" class="card shadow btns btns-1">
      <i class="fad fa-virus icon-btn" style="font-size: 45px; color: red"></i>
      <span class="text-btn">
      Pantau Covid 19
          </span>
    </a>

       <a href="#" class="card shadow btns btns-1">
      <i class="fad fa-virus icon-btn" style="font-size: 45px; color: red"></i>
      <span class="text-btn">
      Pantau Covid 19
          </span>
    </a>
</div>

<style type="text/css">
.icon-btn {
 
}

.text-btn{


}

.btns {
  flex: 2 2 auto;
  margin: 5px;
  padding: 10px;
  text-align: center;
  font-weight: 700;

  background-size: 200% auto;
  color: #4d4c4c;

  border: 0px solid;
 }


.btns:hover {
background-color: #ffffff36
}
@media (max-width: 763px){
  .btns {
  margin: 3px;

  width: 47%;
}
}

/* <- Magic Stuff Start */

.btns:hover {
  background-position: right center; /* change the direction of the change here */
  color: #4d4c4c!important;
}

.btns-1 {

}
/* Magic Stuff End -> */
</style>