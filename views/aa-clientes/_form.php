<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AaClientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aa-clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NombreComercial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreadoEl')->textInput() ?>

    <?= $form->field($model, 'ModificadoEl')->textInput() ?>

    <?= $form->field($model, 'Correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Estatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ClienteId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
