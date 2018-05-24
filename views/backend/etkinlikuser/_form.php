<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\event\models\Etkinlikuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etkinlikuser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EtkinlikId')->textInput() ?>

    <?= $form->field($model, 'BaşvuranKişiId')->textInput() ?>

    <?= $form->field($model, 'BaşvuruTarihi')->textInput() ?>

    <?= $form->field($model, 'Onay')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
