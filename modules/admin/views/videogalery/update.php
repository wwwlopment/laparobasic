<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Videogalery */

$this->title = 'Update Videogalery: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Videogaleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="videogalery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
