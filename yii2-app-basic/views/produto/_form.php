<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \app\models\Categoria;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_categoria')->textInput() ?>

    <?= $form->field($model, 'pro_titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_status')->textInput() ?>
    
    <?= $form->field($model,'cod_categoria')->dropDownList(ArrayHelper::map(Categoria::find()->all(), 'id_categoria', 'cat_nome'),['prompt'=>'Selecione uma categoria'])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
