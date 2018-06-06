<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotogalerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photogaleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photogalery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Photogalery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'date',
            'title',
            'text:ntext',
            //'link',
            //'publicate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
