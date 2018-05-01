<?php


use kouosl\theme\widgets\CheckBoxColumn;
use kouosl\theme\widgets\Portlet;
use kouosl\theme\widgets\GridView;
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\ActionColumn;


$this->title 	= 'Samples Manage';
$data['title'] 	= $this->title;
$this->params['breadcrumbs'][] = $this->title;

$data['GridView'] = GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'title',
        'description',
        'date',
    ],
]);


Portlet::begin(['title' => $this->title, 'icon' => 'glyphicon glyphicon-cog']);

    echo $this->render('manage',  $data);

Portlet::end(); 
