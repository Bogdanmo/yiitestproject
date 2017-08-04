<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StateModel */

$this->title = $model->idState;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'State Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idState], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idState], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idState',
            'idCountry',
            'alias',
            'nameRu',
            'nameUa',
        ],
    ]) ?>

</div>
