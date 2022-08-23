<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Форма';

?>
<div class="site-index">
    <?php if (Yii::$app->session->hasFlash("error")) : ?>
        <?php Yii::$app->session->getFlash("error") ?>
    <?php endif; ?>
    <?php if (Yii::$app->session->hasFlash("success")) : ?>
        <?php Yii::$app->session->getFlash("success") ?>
    <?php endif; ?>

    <?php $form = ActiveForm::begin(); ?>
    <h2>Форма для сообщения</h2>
    <hr>
    <?= $form->field($model, "text")->textarea(["rows" => "5"]) ?>
    <?= Html::submitButton("Отправить", ["class" => "btn btn-dark mt-2"]) ?>
    <?php ActiveForm::end(); ?>
</div>