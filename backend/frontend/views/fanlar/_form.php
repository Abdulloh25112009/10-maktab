<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Fanlar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="fanlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'malaka')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reyting')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ishfaol')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rasm')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
