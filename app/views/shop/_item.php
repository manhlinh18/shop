<?php use yii\helpers\Html; ?>

<div class="row">
    <div class="col-md-2">
        <?= Html::img($item->thumb(80, 160)) ?>
    </div>
    <div class="col-md-10">
        <p><?= Html::a($item->title, ['shop/view', 'slug' => $item->slug]) ?></p>
        <p>
            <span class="text-muted">Lưu trữ:</span> <?= $item->data->storage ?> GB
            <br/>
            <span class="text-muted">Màn Hình Cảm Ứng:</span> <?= $item->data->touchscreen ? 'Yes' : 'No' ?>
            <br/>
            <span class="text-muted">CPU cores:</span> <?= $item->data->cpu ?>
            <br/>
            <?php if(!empty($item->data->features) ) : ?>
                <span class="text-muted">Tính năng:</span> <?= implode(', ', $item->data->features) ?>
            <?php endif; ?>
        </p>
        <h3>
            <?php if($item->discount) : ?>
                <del class="small"><?= $item->oldPrice ?></del>
            <?php endif; ?>
            <?= $item->price ?>vnđ
        </h3>
    </div>
</div>
<br>