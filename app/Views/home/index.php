<?= $this->extend('layout/home'); ?>
<?= $this->section('content'); ?>

<nav>
	<a href="<?= base_url(); ?>">Home</a>
	<a href="<?= base_url('about'); ?>">About</a>
	<?php if (logged_in()) : ?>
	<a href="<?= base_url('logout') ?>">Logout</a>
	<?php else : ?>
	<a href="<?= base_url('login') ?>">Login</a> 
	<?php endif; ?>
	<div class="animation start-home "></div>
</nav>


<div class="bt">
		Creator's perfect space to <div class="cl">looking for inspiration </div>
</div>
<p class="bt-1">
	Creator space give A lot of highly recommended creativity, especially <br>Geometry dash stuff!
</p>
<div class="bt-1">
	<button class="btn btn1">
		<a href="<?= base_url('gallery') ?>">Go to page</a>
	</button>
</div>

<?= $this->endSection(); ?>