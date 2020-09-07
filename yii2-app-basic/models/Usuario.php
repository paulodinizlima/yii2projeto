<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id_usuario
 * @property string $usu_nome
 * @property string $usu_login
 * @property string $usu_senha
 * @property int $usu_status
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usu_nome', 'usu_login', 'usu_senha', 'usu_status'], 'required'],
            [['usu_status'], 'integer'],
            [['usu_nome', 'usu_login'], 'string', 'max' => 150],
            [['usu_senha'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id',
            'usu_nome' => 'Nome',
            'usu_login' => 'Login',
            'usu_senha' => 'Senha',
            'usu_status' => 'Status',
        ];
    }
}
