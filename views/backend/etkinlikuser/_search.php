<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\event\models\EtkinlikuserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etkinlikuser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'EtkinlikId') ?>

    <?= $form->field($model, 'BaşvuranKişiId') ?>

    <?= $form->field($model, 'BaşvuruTarihi') ?>

    <?= $form->field($model, 'Onay') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
