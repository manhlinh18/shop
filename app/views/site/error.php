<?php
use yii\helpers\Html;
$this->title = $name;
?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="alert alert-danger">
    <?= nl2br(Html::encode($message)) ?>
</div>

<p>
    Đã xảy ra lỗi trên trong khi các máy chủ Web đã được xử lý theo yêu cầu của bạn.
</p>
<p>
    Hãy liên hệ với chúng tôi nếu bạn nghĩ rằng đây là một lỗi máy chủ. Cám ơn.
</p>
