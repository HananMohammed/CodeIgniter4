<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
    <h1><?= $title ?> </h1>
    <div class="row">
        <div class="col-md-6">
            <form action="/blog/edit/<?= $post['id'] ?>" method="post">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" id="title" name="title" value="<?= $post['title'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Post Content</label>
                    <textarea name="content" id="content" rows="3"class="form-control"> <?= $post['content'] ?> </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="/blog/delete/<?= $post["id"] ?>" class="btn btn-danger"> Delete </a>
            </form>
        </div>
    </div>
<?= $this->endSection();?>

