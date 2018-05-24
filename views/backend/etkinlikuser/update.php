<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\event\models\Etkinlikuser */

$this->title = 'Update Etkinlikuser: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Etkinlikusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etkinlikuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
