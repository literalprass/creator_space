<div class="navy">
  <h4>Creator <label>Space</label></h4>

<nav>
  <a href="<?= base_url('gallery/add'); ?>">Post</a>
  <?php if (logged_in()) : ?>
	<a href="<?= base_url('logout') ?>">Logout</a>
	<?php else : ?>
	<a href="<?= base_url('login') ?>">Login</a> 
	<?php endif; ?>
  <div class="animation start-home "></div>
</nav>


</div>
