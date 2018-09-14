<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\content\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'draft' => 'Draft', 'public' => 'Public', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'page' => 'Page', 'blog' => 'Blog', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'author')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <?= $form->field($model, 'modified')->hiddenInput(['value' => $model['modified']])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
