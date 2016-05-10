<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ma_kho')->textInput() ?>

    <?= $form->field($model, 'ten_kho')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dia_chi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sdt')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
