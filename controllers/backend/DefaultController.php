<?php

namespace kouosl\event\controllers\backend;

use kouosl\event\models\SLider;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    
    public function actionIndex()
    {
        $event = new Event();
        return $this->render('index', [
            'event' => $event,
        ]);
    }
}
