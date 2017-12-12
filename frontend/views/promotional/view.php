<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PromotionalCode */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Promotional Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotional-code-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'tariff_zone_id',
            'customer_reward',
            'start_dt',
            'end_dt',
            'status',
        ],
    ]) ?>

</div>
