<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StateModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="state-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameRu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameUa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
