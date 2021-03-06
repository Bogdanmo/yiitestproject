<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StateSearchModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="state-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idState') ?>

    <?= $form->field($model, 'idCountry') ?>

    <?= $form->field($model, 'alias') ?>

    <?= $form->field($model, 'nameRu') ?>

    <?= $form->field($model, 'nameUa') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
