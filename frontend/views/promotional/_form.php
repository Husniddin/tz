<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PromotionalCode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="promotional-code-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tariff_zone_id')->textInput() ?>

    <?= $form->field($model, 'customer_reward')->textInput() ?>

    <?= $form->field($model, 'start_dt')->textInput() ?>

    <?= $form->field($model, 'end_dt')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
