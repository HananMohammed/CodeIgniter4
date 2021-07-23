
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
    <h1><?= $title ?> </h1>
    <?php if (count($posts) > 0): ?>
        <div class="row">
            <?= $this->include('layouts/includes/sidebar') ?>
            <div class="col-sm-9">
                <div class="row">
                    <?php foreach ($posts as $post): ?>
                        <?= view_cell('\App\Libraries\Blog::postItem', ["title" => $post])?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?= $this->endSection();?>

