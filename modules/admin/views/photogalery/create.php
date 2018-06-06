<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Photogalery */

$this->title = 'Create Photogalery';
$this->params['breadcrumbs'][] = ['label' => 'Photogaleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photogalery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
