<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Videogalery */

$this->title = 'Create Videogalery';
$this->params['breadcrumbs'][] = ['label' => 'Videogaleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videogalery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
