<?php
namespace kouosl\content\controllers\frontend;

use kouosl\content\models\Content;
use yii\filters\AccessControl;

/**
 * Default controller for the `content` module
 */
class ContentsController extends DefaultController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
       
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [ 
                            'allow' => true,
                            'roles' => ['?'],
                        ],
                        [ 
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ]
        ]);
       
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = ['body' => ''];
        return $this->render('index',[
            'model' =>$model ,
        ]);
    }
    public function actionView($id){
        return $this->render('index',[
            'model' => $this->findModel($id) ,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Content::findOne($id)) !== null) {
            return $model;
        }

    }
}
