<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AaClientes */

$this->title = 'Create Aa Clientes';
$this->params['breadcrumbs'][] = ['label' => 'Aa Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aa-clientes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
