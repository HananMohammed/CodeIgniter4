<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <h1><?= $title; ?></h1>
    <?php if (isset($errors)): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $errors->listErrors() ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <form method="post" action="/form">
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name" value="<?= set_value('name');?>" name="name" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email"  value="<?= set_value('email');?>" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password');?>" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="category">category</label>
            <select name="category" class="form-control" id="category" value="<?= set_value('category');?>">
                <?php foreach ($categories as $category): ?>
                <option <?= set_select('category', $category, TRUE) ?> value="<?= $category ?>"  ><?= $category ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="date">date</label>
            <input type="date" class="form-control" id="date" name="date" value="<?= set_value('date');?>">
        </div>
        <?php
            print_r($_POST);
        ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection();?>
