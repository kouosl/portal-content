<?php

namespace kouosl\content\controllers\frontend;

use Yii;
use kouosl\content\models\Content;
use kouosl\content\models\ContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContentController implements the CRUD actions for Content model.
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
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


