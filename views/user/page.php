<?php

use app\models\PetRequests;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PetRequestsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Административная панель';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-requests-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Управление заявками', ['/petrequests/index']) ?>
    </p>

</div>