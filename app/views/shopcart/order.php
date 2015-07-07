<?php
use yii\helpers\Html;

$this->title = 'Chi tiết đơn hàng';
?>
<h1>Đơn đặt hàng số<?= $order->id ?></h1>

<div class="well well-sm">Tình trạng: <b><?= $order->status ?></b></div>

<table class="table">
    <thead>
    <tr>
        <th>Mặt hàng</th>
        <th width="100">Số lượng</th>
        <th width="120">Đơn giá</th>
        <th width="100">Tổng</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($order->goods as $good) : ?>
        <tr>
            <td>
                <?= Html::a($good->item->title, ['/shop/view', 'slug' => $good->item->slug]) ?>
                <?= $good->options ? "($good->options)" : '' ?>
            </td>
            <td><?= $good->count ?></td>
            <td>
                <?php if($good->discount) : ?>
                    <del class="text-muted "><small><?= $good->item->oldPrice ?></small></del>
                <?php endif; ?>
                <?= $good->price ?>
            </td>
            <td><?= $good->price * $good->count ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="5" class="text-right">
            <h3>Tổng: <?= $order->cost ?>vnđ</h3>
        </td>
    </tr>
    </tbody>
</table>
