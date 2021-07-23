
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
    <h1><?= $title ?> </h1>
    <div class="row">
        <div class="col-md-6">
            <form action="/blog/newPost" method="post">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Post Content</label>
                    <textarea name="content" id="content" rows="3"class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<?= $this->endSection();?>

