<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\resimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Resim', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'resimad',
            'resimicerik',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
