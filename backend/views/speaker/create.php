<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Speaker */

$this->title = Yii::t('app', 'Create speaker');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Speakers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="speaker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
