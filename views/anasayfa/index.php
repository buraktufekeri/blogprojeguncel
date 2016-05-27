<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\AnasayfaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anasayfas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anasayfa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anasayfa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'aciklama:ntext',
            'resimUrl:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
