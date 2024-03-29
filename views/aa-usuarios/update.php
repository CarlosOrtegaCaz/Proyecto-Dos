<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AaUsuarios */

$this->title = 'Update Aa Usuarios: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Aa Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aa-usuarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
