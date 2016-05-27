<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\resim */

$this->title = 'Update Resim: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Resims', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
