<!DOCTYPE html>
<html>
<head>
<title>asiakas sivusto</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css');?>">
</head>
<body>

<ul>
	<li><a href="<?php echo site_url('Etusivu'); ?>">Etusivu</a></li>
	<li><a href="<?php echo site_url('asiakas/listaa'); ?>">Asiakkaat</a></li>
	<li><a href="<?php echo site_url('tilaus/listaa'); ?>">Tilaukset</a></li>
	<li><a href="<?php echo site_url('asiakas/etsi_tilaus'); ?>">Etsi tilaus</a></li>
	<li><a href="<?php echo site_url('asiakas/lisaa'); ?>">Lisää asiakas</a></li>
	<li><a href="<?php echo site_url('asiakas/nayta_poistettavat'); ?>">Poista asiakas</a></li>
	<li><a href="<?php echo site_url('asiakas/nayta_muokattavat_asiakkaat'); ?>">Muokkaa asiakkaita</a></li>
</ul>