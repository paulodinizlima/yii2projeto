<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id_produto
 * @property int $cod_categoria
 * @property string $pro_titulo
 * @property float $pro_valor
 * @property int $pro_status
 *
 * @property Categoria $codCategoria
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_categoria', 'pro_titulo', 'pro_valor', 'pro_status'], 'required'],
            [['cod_categoria', 'pro_status'], 'integer'],
            [['pro_valor'], 'number'],
            [['pro_titulo'], 'string', 'max' => 150],
            [['cod_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['cod_categoria' => 'id_categoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produto' => 'Id',
            'cod_categoria' => 'Categoria',
            'pro_titulo' => 'Titulo',
            'pro_valor' => 'Valor',
            'pro_status' => 'Status',
        ];
    }

    /**
     * Gets query for [[CodCategoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id_categoria' => 'cod_categoria']);
    }
}
