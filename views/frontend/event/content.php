<?php


use kouosl\theme\widgets\CheckBoxColumn;
use kouosl\theme\widgets\Portlet;
use kouosl\theme\widgets\GridView;
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\ActionColumn;


$this->title 	= 'Samples Manage';
$data['title'] 	= $this->title;
$this->params['breadcrumbs'][] = $this->title;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'name',
        'descriptions',
        'date',
    ],
]);

Portlet::begin(['title' => $this->title, 'icon' => 'glyphicon glyphicon-cog']);

    echo $this->render('show',  $data);

Portlet::end();
