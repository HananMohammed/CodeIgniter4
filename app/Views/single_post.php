<h1><?= $title ?> </h1>
<?php if (count($posts) > 0): ?>
    <?php foreach ($posts as $post): ?>
        <div>
            <h3><?= $value ?></h3>
            <img src="/assets/images/poster.jpg"  style="height: auto; width: 200px" alt="post Picture">
            <p>loreom Epsiom Text loreom Epsiom Text loreom Epsiom Text loreom Epsiom Text loreom Epsiom Text </p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

