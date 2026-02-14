<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Fanlar $model */

$this->title = 'Update Fanlar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fanlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
