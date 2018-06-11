<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Реєстрація';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Будьласка заповніть нижченаведені поля для реєстрації:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'login')->label('Логін')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'pass')->label('Пароль')->passwordInput() ?>

        <?= $form->field($model, 'name')->label('Ім\'я')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'surname')->label('Прізвище')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'email')->label('Е-мейл')->textInput(['autofocus' => true]) ?>
    <?php $items = [
            '0' => 'Чоловіча',
            '1' => 'Жіноча',
];
    $params = [
            'prompt' => 'Виберіть зі списку...',
    ];
    ?>

        <?= $form->field($model, 'sex')->dropDownList($items, $params)->label('Стать'); ?>


        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

<!--    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>-->
</div>
