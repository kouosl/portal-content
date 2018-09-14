<?php

namespace kouosl\content\controllers\backend;

use Yii;
use kouosl\content\models\Content;
use kouosl\content\models\ContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContentController implements the CRUD actions for Content model.
 */
class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
     /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
}


