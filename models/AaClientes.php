<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aa_clientes".
 *
 * @property int $Id
 * @property string $Nombre
 * @property string|null $NombreComercial
 * @property string $CreadoEl
 * @property string $ModificadoEl
 * @property string|null $Correo
 * @property string $Estatus
 * @property int|null $ClienteId
 *
 * @property AaClientes $cliente
 * @property AaClientes[] $aaClientes
 * @property AaUsuarios[] $aaUsuarios
 */
class AaClientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aa_clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'CreadoEl', 'ModificadoEl', 'Estatus'], 'required'],
            [['CreadoEl', 'ModificadoEl'], 'safe'],
            [['ClienteId'], 'integer'],
            [['Nombre', 'Correo'], 'string', 'max' => 200],
            [['NombreComercial'], 'string', 'max' => 100],
            [['Estatus'], 'string', 'max' => 2],
            [['Nombre'], 'unique'],
            [['ClienteId'], 'exist', 'skipOnError' => true, 'targetClass' => AaClientes::className(), 'targetAttribute' => ['ClienteId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nombre' => 'Nombre',
            'NombreComercial' => 'Nombre Comercial',
            'CreadoEl' => 'Creado El',
            'ModificadoEl' => 'Modificado El',
            'Correo' => 'Correo',
            'Estatus' => 'Estatus',
            'ClienteId' => 'Cliente ID',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(AaClientes::className(), ['Id' => 'ClienteId']);
    }

    /**
     * Gets query for [[AaClientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAaClientes()
    {
        return $this->hasMany(AaClientes::className(), ['ClienteId' => 'Id']);
    }

    /**
     * Gets query for [[AaUsuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAaUsuarios()
    {
        return $this->hasMany(AaUsuarios::className(), ['ClienteId' => 'Id']);
    }
}
