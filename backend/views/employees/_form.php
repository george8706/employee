<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Employees */
/* @var $form yii\widgets\ActiveForm */

$groups = ArrayHelper::map(\common\models\Groups::find()->all(),'id','name');
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grouup')->dropDownList($groups, ['prompt' => 'Choose group']) ?>

    <?= $form->field($model, 'dateofbirth')->widget(DatePicker::className(), [
        'dateFormat' => 'dd-mm-yyyy',
    ]) ?>

    <?= $form->field($model, 'isworking')->dropDownList(['yes'=>'Yes','no'=>'No'],['prompt' => 'choose employed by']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
