<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AaUsuarios;

/**
 * AaUsuariosSearch represents the model behind the search form of `app\models\AaUsuarios`.
 */
class AaUsuariosSearch extends AaUsuarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'CreadoPor', 'JefeDirecto', 'ModificadoPor', 'ClienteId'], 'integer'],
            [['Nombre', 'ApellidoPaterno', 'ApellidoMaterno', 'Correo', 'Usuario', 'Contrasena', 'Estatus', 'CreadoEl', 'ModificadoEl'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AaUsuarios::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id' => $this->Id,
            'CreadoEl' => $this->CreadoEl,
            'CreadoPor' => $this->CreadoPor,
            'JefeDirecto' => $this->JefeDirecto,
            'ModificadoEl' => $this->ModificadoEl,
            'ModificadoPor' => $this->ModificadoPor,
            'ClienteId' => $this->ClienteId,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'ApellidoPaterno', $this->ApellidoPaterno])
            ->andFilterWhere(['like', 'ApellidoMaterno', $this->ApellidoMaterno])
            ->andFilterWhere(['like', 'Correo', $this->Correo])
            ->andFilterWhere(['like', 'Usuario', $this->Usuario])
            ->andFilterWhere(['like', 'Contrasena', $this->Contrasena])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
