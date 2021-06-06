<div class="my-body container" style="padding-top: 20px;">
  <div class="my-body row align-items-center">
    <div class="my-body col-lg-9 mb-3">
      <a href="<?= base_url(); ?>" class="brand">
        <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="brand-image">
        <div class="my-body brand-name bg-gray bg-opacity-75 p-0.5 dark:bg-dark-primary dark:bg-opacity-75">
          <h1 class="brand-title">Sistem Informasi <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></h1>
          <p><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> <?= ucwords($desa['nama_kecamatan']) ?>, <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?> <?= ucwords($desa['nama_kabupaten']) ?></p><p> Prov. <?= ucwords($desa['nama_propinsi']) ?></p>
        </div>
      </a>
    </div>

    <div class="my-body col mb-3 hiddenmobile">

      <form action="<?= base_url(); ?>index.php/first" method="GET" class="form mt-4 lg:mt-0">
        <div class="my-body input-group">
          <input type="search" name="cari" id="cari" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2">

          <button class="form-search-button btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search icon icon-base mx-2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
        </div>
      </form>

 
</div>
  </div>
</div>