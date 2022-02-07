<?= $this->extend('layout/home'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/about.css') ?>">
<nav>
	<a href="<?= base_url('about'); ?>">About</a>
	<a href="<?= base_url(); ?>">Home</a>
	<?php if (logged_in()) : ?>
	<a href="<?= base_url('logout') ?>">Logout</a>
	<?php else : ?>
	<a href="<?= base_url('login') ?>">Login</a> 
	<?php endif; ?>
	<div class="animation start-home "></div>
</nav>

<div class="container">
	<h1>About Us</h1>
</div>

<img src="<?= base_url('img/nya.png') ?>" style="">
<p>
	<b>Creator Space</b> is a Gallery themed website created by <a href="https://discordapp.com/users/665899777426325504" style="text-decoration: none;" target="_blank">Literalprass</a> with a <a href="https://www.collinsdictionary.com/dictionary/english/hall-of-fame" style="text-decoration: none;" target="_blank">Hall of fame</a> function looks a like. <br>
	We have a lot of incredible works from a wellknown either a rarelyknow artist. 
</p>

<?= $this->endSection(); ?>