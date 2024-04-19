<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Petrequests $model */

$this->title = 'Создание заявки';
$this->params['breadcrumbs'][] = ['label' => 'Petrequests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="petrequests-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
