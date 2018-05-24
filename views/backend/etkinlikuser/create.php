<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\event\models\Etkinlikuser */

$this->title = 'Create Etkinlikuser';
$this->params['breadcrumbs'][] = ['label' => 'Etkinlikusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etkinlikuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
