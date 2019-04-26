<?php
namespace kouosl\content;

use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\web\HttpException;

class Module extends \kouosl\base\Module{
    public $controllerNamespace = '';

    public function init(){
        parent::init();
        $this->registerTranslations();
    }

    public function registerTranslations(){
        Yii::$app->i18n->translations['site/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@kouosl/content/messages',
            'fileMap' => [
                'content/content' => 'content.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null){
        return Yii::t('content/'. $category, $message, $params, $language);
    }

    public static function initRules(){
        return $rules = [
            [
                'class' => 'yii\rest\UrlRule',
                'controller' => [
                   'content/contents',
                ],
                'tokens' => [
                    '{id}' => '<id:\\w+>'
                ],
            ],
        ] ;
    }
}