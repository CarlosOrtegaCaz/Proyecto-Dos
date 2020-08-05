<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AaUsuarios */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Aa Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aa-usuarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id], [
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
            'Id',
            'Nombre',
            'ApellidoPaterno',
            'ApellidoMaterno',
            'Correo',
            'Usuario',
            'Contrasena',
            'Estatus',
            'CreadoEl',
            'CreadoPor',
            'JefeDirecto',
            'ModificadoEl',
            'ModificadoPor',
            'ClienteId',
        ],
    ]) ?>

</div>
