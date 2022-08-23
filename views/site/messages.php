<?php

/** @var yii\web\View $this */

$this->title = 'Форма';
?>
<div class="site-index">
    <?php foreach ($data as $item) : ?>
        <div class="card mb-2">
            <div class="card-body">
                <span class="badge badge-pill badge-success"><?= $item->id ?></span>
                <?= $item->text ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>