<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AaClientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aa-clientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'NombreComercial') ?>

    <?= $form->field($model, 'CreadoEl') ?>

    <?= $form->field($model, 'ModificadoEl') ?>

    <?php // echo $form->field($model, 'Correo') ?>

    <?php // echo $form->field($model, 'Estatus') ?>

    <?php // echo $form->field($model, 'ClienteId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
