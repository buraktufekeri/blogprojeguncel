<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Anasayfa */

$this->title = 'Create Anasayfa';
$this->params['breadcrumbs'][] = ['label' => 'Anasayfa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anasayfa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
