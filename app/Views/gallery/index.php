<?= $this->extend('layout/template'); ?>
<?= $this->section('main'); ?>

<div class="container">
  <h1>
    <a href="<?= base_url('gallery') ?>">Discover</a>
    <a href="<?= base_url('gallery/profile') ?>">Profiles</a>
</h1>
</div>

<div class="container">
<?php foreach ($gal as $g) : ?>
    <div class="crad card" style="width: 352px; border: 1px solid #C8C6C6; 
    box-shadow: 0 4px 5px 0.5px rgba(0, 0, 0, 0.3);
    border-radius: 10px;">
  <img src="<?= base_url('img/' . $g['image']); ?>" class="card-img-top" alt="<?= $g['image']; ?>">
  <div class="card-body">
    <h5 class="card-title"><?= $g['title']; ?></h5>
    <p class="card-text">
        By : <?= $g['creator']; ?>
    </p>
    <a href="<?= base_url('gallery/' . $g['title']); ?>" class="btn" style="background: #d6e5fa;">Detail</a>
  </div>
</div>
<?php endforeach; ?>
</div>



<?= $this->endSection(); ?>