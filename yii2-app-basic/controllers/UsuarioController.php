<?php

namespace app\controllers;

use Yii;
use app\models\Usuario;
use yii\base\Controller;
/**
 * Description of UsuarioController
 *
 * @author PAULO
 */
class UsuarioController 
{
    public function actionUsuario()
    {
        $usuarios = Usuario::find()->orderBy('nome')->all();
    }
    
}
