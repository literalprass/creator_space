<?= $this->extend('layout/template'); ?>
<?= $this->section('main'); ?>

<div class="container" style="
	position: relative;
  	margin: 80px auto 0;
	">

<p style="margin-bottom: 20px;" >
  <a href="<?= base_url('gallery'); ?>" style="margin-right: 10px;"><button class="btn" style="background: #d6e5fa;">Back</button></a>
  <a href="<?= base_url('gallery/edit/'. $gal['title']); ?>"style="margin-right: 10px;"><button class="btn" style="background: #baabda;">Edit</button></a>

  <form class="d-inline" action="<?= base_url('gallery/' . $gal['id'] ); ?>" method="POST">
    <input type="hidden">
    <button class="btn" style="background: #d77fa1;" onclick="return confirm('Are you sure want to delete this data?');" >Delete</button>
  </form>

</p>

	<div class="card ml-auto" style="max-width: 1120px; border: 1px solid #C8C6C6; 
    box-shadow: 0 4px 5px 0.5px rgba(0, 0, 0, 0.3);
    border-radius: 10px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= base_url('img/' . $gal['image']); ?>" class="img-fluid rounded-start"
      	style="
        box-shadow: 0 4px 5px 0.5px rgba(0, 0, 0, 0.3);
        border: 1px solid gray;
      		width: 1120px;
      	" 
      	alt="<?= $gal['image']; ?>">
    </div>
    <div class="col-md-8">
  	
      <div class="card-body">
        <h5 class="card-title"><?= $gal['title']; ?></h5>
        <p class="card-text"><?= $gal['description']; ?><p>

        <p class="card-text"><small class="text-muted"><?= $gal['category']; ?></small></p>
      </div>
    </div>
  </div>
</div>

</div>

<?= $this->endSection(); ?>