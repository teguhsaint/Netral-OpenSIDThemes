<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/distOWL/assets/owl.carousel.min.css?") ?>">

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/distOWL/assets/owl.theme.default.min.css?") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/jquery.dataTables.min.css?") ?>">

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/highcharts.min.css?") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/jquery.fancybox.min.css?") ?>">

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/leaflet.css?") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/mapbox-gl.min.css?") ?>">

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/slick.min.css?") ?>">

<link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;600;700&family=Roboto+Slab:wght@600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/bootstrap.min.css?") ?>">


<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/dist/fontawesome6/pro/css/all.min.css") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/style.min.css?") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/css/ionicons.min.css?") ?>">


<style type="text/css">


	#menus {
		padding: 18px 0;
	}

	#menus > li {

	}
	#menus > li > a {
		display: block;
		margin: 0 auto;
		width: 90%;
		text-indent: 18px;
		line-height: 39px;
	}
	#menus > li > a.tutup::after {
		position: absolute;
		right: 30px;
		margin-top: 1px;
		font-family: "Font Awesome 6 Duotone";
		content: "\10f107";
	}


	#menus > li > a.tutup:hover, 
	#menus > li > a.tutup.buka {
		color: #0167f3;
	}
	#menus > li > a.tutup.buka::after {
		content: "\10f106";
	}

	.sub {
		display: none;
		background-color: #0167f3;
		padding-left: 8%;
	}
	.sub a {
		position: relative;
		display: block;
		
		width: 212px;
		text-indent: 0px;
		line-height: 39px;
		padding: 0px;
	}
		.sub a:hover {
		color: #fff!important;
	}


	[title~=Peta]:before{
		font-family: "Font Awesome 6 Duotone";
		content: "\f041" ;
		margin-right: 5px;
	}

	[title~=Wilayah]:before{
		font-family: "Font Awesome 6 Pro";
		content: "\f5ff";
		margin-right: 5px;
	}


	[title~=Masyarakat]:before{
		font-family: "Font Awesome 6 Pro";
		content: "\f0c0";
		margin-right: 5px;
	}

	[title~=Potensi]:before{
		font-family: "Font Awesome 6 Pro";
		content:"\f47c";
		margin-right: 5px;
	}

	[title~=Sejarah]:before{
		font-family: "Font Awesome 6 Pro";
		content:"\f558";
		margin-right: 5px;
	}

	[title~=IDM]:before{
		font-family: "Font Awesome 6 Pro";
		content:"\f643";
		margin-right: 5px;
	}
	[title~=Pendidikan]:before{
		font-family: "Font Awesome 6 Pro";
		content:"\f501";
		margin-right: 5px;
	}

	[title~=Pekerjaan]:before{
		font-family: "Font Awesome 6 Pro";
		content:"\e0c8";
		margin-right: 5px;
	}


	[title~=Agama]:before{
		font-family: "Font Awesome 6 Pro";
		content:"\f67f";
		margin-right: 5px;
	}

	[title~=Kelamin]:before{
		font-family: "Font Awesome 6 Pro";
		content:"\26a6";
		margin-right: 5px;
	}
	[title~=Negara]:before{
		font-family: "Font Awesome 6 Pro";
		content:"\f2b4";
		margin-right: 5px;
	}

	.grad-green1{
		background: #00F260;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0575E6, #00F260); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	/* ============ desktop view ============ */
	@media all and (min-width: 992px) {
		.navbar .nav-item .dropdown-menu{ display: none; }
		.navbar .nav-item:hover .nav-link{   }
		.navbar .nav-item:hover .dropdown-menu{ display: block; }
		.navbar .nav-item .dropdown-menu{  position: absolute;top: 50px;}
	}	
	/* ============ desktop view .end// ============ */
</style>