<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Session */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sessions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="session-view">
    <div class="row">
        <div class="col-sm-6 hidden-xs">
            <h1 class="allpages_title"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col-sm-6 text-right allpages_buttons">
            <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> '.Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<span class="glyphicon glyphicon-trash"></span> '.Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'event_id',
                'value' => $model->event->title
            ],
            'title',
            'starts',
            'ends',
            'description:ntext',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
