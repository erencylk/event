<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\event\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EtkinlikAd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EtkinlikAciklama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'EtkinlikKontenjan')->textInput() ?>

    <?= $form->field($model, 'EtkinlikTarihi')->textInput() ?>

    <?= $form->field($model, 'Adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OluşturanKişiId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
