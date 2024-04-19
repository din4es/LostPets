<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Petrequests $model */

$this->title = 'Update Petrequests: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Petrequests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="petrequests-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
