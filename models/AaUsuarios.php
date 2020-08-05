<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aa_usuarios".
 *
 * @property int $Id
 * @property string $Nombre
 * @property string $ApellidoPaterno
 * @property string|null $ApellidoMaterno
 * @property string|null $Correo
 * @property string $Usuario
 * @property string $Contrasena
 * @property string $Estatus
 * @property string $CreadoEl
 * @property int $CreadoPor
 * @property int|null $JefeDirecto
 * @property string $ModificadoEl
 * @property int $ModificadoPor
 * @property int $ClienteId
 *
 * @property AaClientes $cliente
 * @property AaUsuarios $creadoPor
 * @property AaUsuarios[] $aaUsuarios
 * @property AaUsuarios $modificadoPor
 * @property AaUsuarios[] $aaUsuarios0
 * @property AaUsuarios $jefeDirecto
 * @property AaUsuarios[] $aaUsuarios1
 */
class AaUsuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aa_usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'ApellidoPaterno', 'Usuario', 'Contrasena', 'Estatus', 'CreadoEl', 'CreadoPor', 'ModificadoEl', 'ModificadoPor', 'ClienteId'], 'required'],
            [['CreadoEl', 'ModificadoEl'], 'safe'],
            [['CreadoPor', 'JefeDirecto', 'ModificadoPor', 'ClienteId'], 'integer'],
            [['Nombre', 'ApellidoPaterno', 'ApellidoMaterno', 'Usuario', 'Contrasena'], 'string', 'max' => 100],
            [['Correo'], 'string', 'max' => 200],
            [['Estatus'], 'string', 'max' => 2],
            [['Usuario'], 'unique'],
            [['ClienteId'], 'exist', 'skipOnError' => true, 'targetClass' => AaClientes::className(), 'targetAttribute' => ['ClienteId' => 'Id']],
            [['CreadoPor'], 'exist', 'skipOnError' => true, 'targetClass' => AaUsuarios::className(), 'targetAttribute' => ['CreadoPor' => 'Id']],
            [['ModificadoPor'], 'exist', 'skipOnError' => true, 'targetClass' => AaUsuarios::className(), 'targetAttribute' => ['ModificadoPor' => 'Id']],
            [['JefeDirecto'], 'exist', 'skipOnError' => true, 'targetClass' => AaUsuarios::className(), 'targetAttribute' => ['JefeDirecto' => 'Id']],
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
            'ApellidoPaterno' => 'Apellido Paterno',
            'ApellidoMaterno' => 'Apellido Materno',
            'Correo' => 'Correo',
            'Usuario' => 'Usuario',
            'Contrasena' => 'Contrasena',
            'Estatus' => 'Estatus',
            'CreadoEl' => 'Creado El',
            'CreadoPor' => 'Creado Por',
            'JefeDirecto' => 'Jefe Directo',
            'ModificadoEl' => 'Modificado El',
            'ModificadoPor' => 'Modificado Por',
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
     * Gets query for [[CreadoPor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreadoPor()
    {
        return $this->hasOne(AaUsuarios::className(), ['Id' => 'CreadoPor']);
    }

    /**
     * Gets query for [[AaUsuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAaUsuarios()
    {
        return $this->hasMany(AaUsuarios::className(), ['CreadoPor' => 'Id']);
    }

    /**
     * Gets query for [[ModificadoPor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModificadoPor()
    {
        return $this->hasOne(AaUsuarios::className(), ['Id' => 'ModificadoPor']);
    }

    /**
     * Gets query for [[AaUsuarios0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAaUsuarios0()
    {
        return $this->hasMany(AaUsuarios::className(), ['ModificadoPor' => 'Id']);
    }

    /**
     * Gets query for [[JefeDirecto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJefeDirecto()
    {
        return $this->hasOne(AaUsuarios::className(), ['Id' => 'JefeDirecto']);
    }

    /**
     * Gets query for [[AaUsuarios1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAaUsuarios1()
    {
        return $this->hasMany(AaUsuarios::className(), ['JefeDirecto' => 'Id']);
    }
}
