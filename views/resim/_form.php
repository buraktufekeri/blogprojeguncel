<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\resim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resim-form">

    <?php $form = ActiveForm::begin(); ?>
    <input type="file" name="resim"/><br/>
 
    <?= $form->field($model, 'resimad')->textInput(['maxlength'=>"asd"]) ?>

     <?= $form->field($model, 'resimicerik')->textInput(['maxlength' =>true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>