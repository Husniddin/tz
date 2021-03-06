<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PromotionalCode */

$this->title = 'Update Promotional Code: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Promotional Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="promotional-code-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
