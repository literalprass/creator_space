<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/edit.css') ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit data</title>
</head>

<body>
    <div class="container mt-5">
        <form action="<?= base_url('gallery/update/' . $gal['id'])?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="oldImg" value="<?= $gal['image']; ?>">
            <h2>Edit Data</h2>
            <hr>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping">Title</span>
                <input type="text" name="title" class="form-control" value="<?= $gal['title']; ?>" name="title">
                <span class="input-group-text" id="addon-wrapping">Type</span>
                <input type="text" name="type" class="form-control" value="<?= $gal['type']; ?>" name="title">
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping">Category</span>
                <input type="text" name="category" class="form-control" value="<?= $gal['category']; ?>" name="title">
                <span class="input-group-text" id="addon-wrapping">By</span>
                <input type="text" name="creator" class="form-control" value="<?= $gal['creator']; ?>" name="title">
            </div>
            <div class="input-group flex-nowrap mb-3">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-floating mb-3">
                <h6>Description</h6>
                <textarea name="description" class="form-control" style="height: 150px"><?= $gal['description']; ?></textarea>
            </div>
            <button type="reset" class="btn btn-danger">
                Reset
            </button>
            <button type="submit" class="btn btn-primary">
                edit
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>