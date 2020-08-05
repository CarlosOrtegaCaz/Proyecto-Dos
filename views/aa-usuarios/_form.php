<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AaUsuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aa-usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ApellidoPaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ApellidoMaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contrasena')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Estatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreadoEl')->textInput() ?>

    <?= $form->field($model, 'CreadoPor')->textInput() ?>

    <?= $form->field($model, 'JefeDirecto')->textInput() ?>

    <?= $form->field($model, 'ModificadoEl')->textInput() ?>

    <?= $form->field($model, 'ModificadoPor')->textInput() ?>

    <?= $form->field($model, 'ClienteId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
