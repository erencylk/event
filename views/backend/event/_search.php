<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\event\models\EventSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'EtkinlikAd') ?>

    <?= $form->field($model, 'EtkinlikAciklama') ?>

    <?= $form->field($model, 'EtkinlikKontenjan') ?>

    <?= $form->field($model, 'EtkinlikTarihi') ?>

    <?php // echo $form->field($model, 'Adres') ?>

    <?php // echo $form->field($model, 'OluşturanKişiId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
