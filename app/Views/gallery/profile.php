<?= $this->extend('layout/template'); ?>
<?= $this->section('main'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
    <h1>
        <a href="<?= base_url('gallery') ?>">Discover</a>
        <a href="<?= base_url('gallery/profile') ?>">Profiles</a>
    </h1>
</div>

<div class="container">
<ul class="list-group">
  <li class="list-group-item">
  <table class="table table-striped">
      <thead>
          <tr>
              <th scope="col">Username</th>
              <th scope="col">twitter</th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($prof as $p) : ?>
          <tr>
              <td><?= $p['names']; ?></td>
              <td><?= $p['twitter']; ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
  </table>
  </li>
</ul>
</div>

<?= $this->endSection(); ?>